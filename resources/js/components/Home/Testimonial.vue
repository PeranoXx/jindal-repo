<template>
    <div class="bg-neutral-900 py-20">
      <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
        <!-- <div class="bg-white rounded-3xl py-16 md:py-20 px-4 md:px-10"> -->
          <div class="flex justify-center">
            <span class="text-white text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-4xl mx-auto font-heading border-b-4 border-orange-400">WHAT PEOPLE SAYS</span>
          </div>
          <p class="text-md sm:text-xl text-neutral-300 font-semibold text-center mb-16 tracking-tight">Individual thoughts about us, Always Delivering More Than Expected.</p>
          <div class="">
            <Carousel v-bind="carouselConfig">
              <Slide v-for="(review, index) in reviews" :key="slide">
                <div class="carousel__item w-full px-6">
                  <!-- <img :src="slide.download_url" alt="" class="w-full h-[250px] object-cover cursor-pointer rounded-md" @click="openFullscreen(slide.download_url)" /> -->

                  <div class="bg-neutral-700 text-white px-5 md:px-10 py-6 rounded-md shadow-md">
                    <div class="flex mb-5">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-orange-400">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-orange-400">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-orange-400">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-orange-400">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 fill-orange-400">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <p>"{{ review.description }}"</p>
                    <div class="flex gap-3 pt-6">
                      <div>
                       <div class="bg-orange-400 w-10 h-10 rounded-full flex justify-center items-center text-lg">P</div> 
                      </div>
                      <div>
                        <span class="p-0 m-0 block leading-none ">{{ review.name }}</span>
                        <span class="p-0 m-0 text-neutral-300 leading-none">{{ review.email }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </Slide>

              <template #addons>
                <Navigation />
                <!-- <Pagination /> -->
              </template>
            </Carousel>
          </div>
        <!-- </div> -->
      </div>
    </div>
</template>

<script setup>
import 'vue3-carousel/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import { onMounted, ref, watch } from 'vue';
const props = defineProps(['reviews'])


const carouselConfig = {
  breakpointMode: 'carousel',
  // height: 250,
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
    900: {
      itemsToShow: 3,
      snapAlign: 'start',
    },
  },
  wrapAround: true
}

const slides = ref([]);

const fullscreenImage = ref(null)
const isFullscreen = ref(false)

function openFullscreen(imageUrl) {
  fullscreenImage.value = imageUrl
  isFullscreen.value = true
}

function closeFullscreen() {
  isFullscreen.value = false
}

onMounted(() => {
  
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

/* Optional: customize the arrow icons inside buttons */
:deep(.carousel__prev svg),
:deep(.carousel__next svg) {
  fill: white;
}
</style>