<template>
    <div class="bg-neutral-50 py-20">
      <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
        <div class="bg-white rounded-3xl py-16 md:py-20 px-4 md:px-10">
          <div class="flex justify-center">
            <span class="text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-4xl mx-auto font-heading border-b-4 border-orange-400">Our Infrastructure</span>
          </div>
          <p class="text-md sm:text-xl text-neutral-600 font-semibold text-center mb-16 tracking-tight">Our Infrastructure showing our capacity of production and support for each order.</p>
          <div class="">
            <Carousel v-bind="carouselConfig">
              <Slide v-for="slide in props.infrastructure" :key="slide">
                <div class="carousel__item w-full mx-6 relative">
                    <img :src="slide.image_url" alt="" class="w-full h-auto object-contain cursor-pointer rounded-md" @click="openFullscreen(slide.image_url)" />

                  <!-- <div class="bg-white text-center px-2">
                    <h3 class="text-lg font-semibold text-gray-800">{{ slide.title || 'Slide Title' }}</h3>
                    <p class="text-sm text-gray-600">{{ slide.description || 'Slide description goes here.' }}</p>
                  </div> -->
                </div>
              </Slide>

              <template #addons>
                <Navigation />
                <!-- <Pagination /> -->
              </template>
            </Carousel>
          </div>
        </div>
      </div>
    </div>
    <transition name="fade-zoom">
      <div v-if="isFullscreen" class="fixed inset-0 z-50 bg-black bg-opacity-90 flex items-center justify-center" @click="closeFullscreen">
        <img :src="fullscreenImage" class="max-w-full max-h-full object-contain transform transition duration-300" />
        <button class="absolute top-4 right-4 text-white text-3xl" @click.stop="closeFullscreen">✕</button>
      </div>
    </transition>
</template>

<script setup>
import 'vue3-carousel/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import { onMounted, ref, watch, watchEffect } from 'vue';

const props = defineProps(['infrastructure'])


const carouselConfig = {
  breakpointMode: 'carousel',
  wrapAround: false,
    // height: 300,
  // Breakpoints are mobile-first
  // Any settings not specified will fall back to the carousel's default settings
  breakpoints: {
    500: {
      itemsToShow: 1,
      snapAlign: 'start',
    },
    600: {
      itemsToShow: 2,
      snapAlign: 'start',
    },
    800: {
      itemsToShow: 3,
      snapAlign: 'start',
    },
  },
  wrapAround: true
}


const fullscreenImage = ref(null)
const isFullscreen = ref(false)

function openFullscreen(imageUrl) {
  fullscreenImage.value = imageUrl
  isFullscreen.value = true
}

function closeFullscreen() {
  isFullscreen.value = false
}

watchEffect(() => {
  // console.log(props.infrastructure)
})

watch(isFullscreen, (val) => {
  if (val) {
    document.body.classList.add('overflow-hidden');
  } else {
    document.body.classList.remove('overflow-hidden');
  }
});
</script>

<style scoped>
.fade-zoom-enter-active,
.fade-zoom-leave-active {
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.fade-zoom-enter-from {
  opacity: 0;
  transform: scale(0.9);
}

.fade-zoom-enter-to {
  opacity: 1;
  transform: scale(1);
}

.fade-zoom-leave-from {
  opacity: 1;
  transform: scale(1);
}

.fade-zoom-leave-to {
  opacity: 0;
  transform: scale(0.9);
}
</style>