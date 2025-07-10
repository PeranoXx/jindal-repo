<template>
    <section>
        <div class="py-24" style="background:linear-gradient(131deg, rgb(216 226 255) 26.82%, rgb(232, 229, 254) 96.89%);">
            <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
                <div class="flex justify-center">
                    <span class="text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-4xl mx-auto font-heading border-b-4 border-fun-blue-500">Shade Cards</span>
                </div>
            </div>
        </div>

        <!-- Shade Cards Grid -->
        <div class="py-16 px-4 lg:px-8 xl:px-16">
            <div class="max-w-7xl mx-auto">
                <div v-if="loading" class="text-center py-8">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-fun-blue-500 mx-auto"></div>
                    <p class="mt-4 text-gray-600">Loading shade cards...</p>
                </div>

                <div v-else-if="error" class="text-center py-8">
                    <p class="text-red-600">{{ error }}</p>
                    <button @click="fetchShadeCards" class="mt-4 px-4 py-2 bg-fun-blue-400 text-white rounded hover:bg-fun-blue-500">
                        Retry
                    </button>
                </div>

                <div v-else class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div v-for="data in shadeCards" :key="data.id" class="bg-white">

                        <div class=" bg-gray-100 overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 rounded-lg">
                            <img :src="data.image_url" :alt="`Shade Card ${data.number}`" class="w-full h-24 object-cover transition-transform duration-300 hover:scale-110" @error="handleImageError" loading="lazy" />
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">
                                Shade Card #{{ data.number }}
                            </h3>
                            <p class="text-sm text-gray-600">
                                Card Number: {{ data.number }}
                            </p>
                        </div>
                    </div>
                </div>

                <div v-if="!loading && !error && shadeCards.length === 0" class="text-center py-16">
                    <p class="text-gray-600 text-lg">No shade cards found.</p>
                </div>
                <!-- <div v-if="lastPage > 1" class="flex justify-center mt-8 space-x-2">
                    <button :disabled="currentPage === 1" @click="fetchShadeCards(currentPage - 1)" class="px-3 py-1 rounded bg-fun-blue-400 text-white disabled:opacity-50">Prev</button>
                    <button v-for="page in lastPage" :key="page" @click="fetchShadeCards(page)" :class="['px-3 py-1 rounded', currentPage === page ? 'bg-fun-blue-600 text-white' : 'bg-fun-blue-200 text-fun-blue-800']">{{ page }}</button>
                    <button :disabled="currentPage === lastPage" @click="fetchShadeCards(currentPage + 1)" class="px-3 py-1 rounded bg-fun-blue-400 text-white disabled:opacity-50">Next</button>
                </div> -->

                <div v-if="pagination.length > 0" class="flex justify-center mt-8 space-x-2 bg-gray-200 rounded-lg p-2">
                    <div v-for="(page, index) in pagination" :key="page" class="flex items-center justify-center">
                        <button v-if="page.label == 'Previous'" @click="fetchShadeCards(currentPage - 1)" :disabled="currentPage === 1" >
                            <span  class="rounded-full w-10 h-10 cursor-pointer" :class="[page.active ? 'bg-fun-blue-600 text-white' : 'bg-white text-fun-blue-800 cursor-pointer']">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                </svg>

                            </span>
                        </button>
                        <button v-else-if="page.label == 'Next'" @click="fetchShadeCards(currentPage + 1)" :disabled="currentPage === lastPage" class="">
                            <span class="rounded-full w-10 h-10 cursor-pointer" :class="[page.active ? 'bg-fun-blue-600 text-white' : 'bg-white text-fun-blue-800 cursor-pointer']">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>

                            </span>
                        </button>
                        <button v-else-if="page.label == '...'">
                            <span class="px-3 py-1" v-html="page.label"></span>
                        </button>
                        <button v-else @click="fetchShadeCards(page.label)" class="rounded-full w-10 h-10 cursor-pointer" :class="[page.active ? 'bg-fun-blue-500 text-white' : 'bg-white text-fun-blue-800 cursor-pointer']">
                            {{ page.label }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from 'vue';

// Reactive data
const shadeCards = ref([]);
const loading = ref(true);
const error = ref(null);
const currentPage = ref(1);
const lastPage = ref(1);
const pagination = ref([]);

// Fetch shade cards data
const fetchShadeCards = async (page = 1) => {
    try {
        console.log(page, currentPage.value);

        loading.value = true;
        error.value = null;
        const response = await fetch(`/api/shade-cards?page=${page}`);
        if (!response.ok) throw new Error('Failed to fetch shade cards');
        const data = await response.json();
        shadeCards.value = data.data.data; // paginated data
        currentPage.value = data.data.current_page;
        lastPage.value = data.data.last_page;
        pagination.value = data.data.links.map(link => ({
            ...link,
            label: link.label.replace(/&laquo;|&raquo;/g, '').trim()
        }));
    } catch (err) {
        error.value = err.message || 'An error occurred while fetching shade cards';
    } finally {
        loading.value = false;
    }
};

// Handle image loading errors
const handleImageError = (event) => {
    event.target.src = '/placeholder-image.jpg'; // Fallback image
};

// Fetch data on component mount
onMounted(() => {
    document.title = 'Shade Cards - Jindal Thread';
    fetchShadeCards();
});
</script>

<style scoped>
.font-heading {
    font-family: 'Inter', sans-serif;
    /* Adjust font family as needed */
}

.aspect-w-1 {
    position: relative;
    width: 100%;
}

.aspect-h-1 {
    padding-bottom: 100%;
}

.aspect-w-1>img {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
</style>