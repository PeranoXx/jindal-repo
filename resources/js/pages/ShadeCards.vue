<template>
    <section>
        <div class="py-24" style="background:linear-gradient(131deg, #E8E5FE 26.82%, #FFEED8 96.89%);">
            <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
                <div class="flex justify-center">
                    <span class="text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-4xl mx-auto font-heading border-b-4 border-orange-400">Shade Cards</span>
                </div>
            </div>
        </div>

        <!-- Shade Cards Grid -->
        <div class="py-16 px-4 lg:px-8 xl:px-16">
            <div class="max-w-7xl mx-auto">
                <div v-if="loading" class="text-center py-8">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-orange-400 mx-auto"></div>
                    <p class="mt-4 text-gray-600">Loading shade cards...</p>
                </div>

                <div v-else-if="error" class="text-center py-8">
                    <p class="text-red-600">{{ error }}</p>
                    <button @click="fetchShadeCards" class="mt-4 px-4 py-2 bg-orange-400 text-white rounded hover:bg-orange-500">
                        Retry
                    </button>
                </div>

                <div v-else class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div 
                        v-for="data in shadeCards" 
                        :key="data.id"
                        class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
                    >
                    
                        <div class="aspect-w-1 aspect-h-1 bg-gray-100 overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                            <img 
                                :src="`/storage/${data.image}`" 
                                :alt="`Shade Card ${data.number}`"
                                class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110"
                                @error="handleImageError"
                            />
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
                <div v-if="lastPage > 1" class="flex justify-center mt-8 space-x-2">
                    <button
                        :disabled="currentPage === 1"
                        @click="fetchShadeCards(currentPage - 1)"
                        class="px-3 py-1 rounded bg-blue-400 text-white disabled:opacity-50"
                    >Prev</button>
                    <button
                        v-for="page in lastPage"
                        :key="page"
                        @click="fetchShadeCards(page)"
                        :class="['px-3 py-1 rounded', currentPage === page ? 'bg-blue-600 text-white' : 'bg-blue-200 text-blue-800']"
                    >{{ page }}</button>
                    <button
                        :disabled="currentPage === lastPage"
                        @click="fetchShadeCards(currentPage + 1)"
                        class="px-3 py-1 rounded bg-blue-400 text-white disabled:opacity-50"
                    >Next</button>
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

// Fetch shade cards data
const fetchShadeCards = async (page = 1) => {
    try {
        loading.value = true;
        error.value = null;
        const response = await fetch(`/api/shade-cards?page=${page}`);
        if (!response.ok) throw new Error('Failed to fetch shade cards');
        const data = await response.json();
        shadeCards.value = data.data.data; // paginated data
        currentPage.value = data.data.current_page;
        lastPage.value = data.data.last_page;
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
    font-family: 'Inter', sans-serif; /* Adjust font family as needed */
}

.aspect-w-1 {
    position: relative;
    width: 100%;
}

.aspect-h-1 {
    padding-bottom: 100%;
}

.aspect-w-1 > img {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
</style>