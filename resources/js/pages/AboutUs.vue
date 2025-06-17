<template>
    <section>
        <div class="py-24" style="background:linear-gradient(131deg, #E8E5FE 26.82%, #FFEED8 96.89%);">
            <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
                <div class="flex justify-center">
                    <span class="text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-4xl mx-auto font-heading border-b-4 border-orange-400">About Us</span>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-neutral-50 py-20">
                <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
                    <div class="bg-white rounded-3xl px-4 md:px-0">
                        <div v-for="(about, index) in aboutUs" :key="index">
                            <div class="text-4xl font-bold">{{ about.block }}</div>
                            <div class="no-tailwind">
                                <div v-html="about.description"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import apiService from '../services/api'

const aboutUs = ref()


onMounted(async () => {
    document.title = 'About Us - Jindal Thread';
    const res = await apiService.getAboutUs()
    let data = res.data;
    if (data.status) {
        aboutUs.value = data.data
        console.log(aboutUs.value);

    }
})
</script>

<style scoped>
.no-tailwind * {
    all: revert;
}
</style>