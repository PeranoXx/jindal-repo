<template>
    <div class="relative z-10 bg-neutral-50 py-20 pattern">
        <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
            <div class="flex justify-center">
                <span class="text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-4xl mx-auto font-heading border-b-4 border-orange-400">Management Team</span>
            </div>
            <p class="text-md sm:text-xl text-neutral-600 font-semibold text-center mb-16 tracking-tight">Pillar of JINDAL 777 With them it seems possible to conquer the world.</p>
            <div class="flex flex-wrap -mx-4 -mb-8">
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8" v-for="team in props.teams" :key="team">
                    <div class="p-8 bg-white shadow rounded-xl grayscale transition-all hover:grayscale-0 duration-300 hover:scale-105 hover:shadow-xl"><img class="block h-36 w-36 mb-8 mx-auto rounded-full" :src=team.image_url alt="">
                        <div class="text-center"><span class="block text-2xl font-bold mb-2">{{ team.name }}</span> <span class="block text-lg text-gray-700 font-medium"> {{ team.description }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { watchEffect } from 'vue';
const props = defineProps(['teams'])



watchEffect(() => {
  console.log(props.teams)
})

</script>