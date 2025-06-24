<template>
  <section>
    <div class="py-24" style="background:linear-gradient(131deg, #E8E5FE 26.82%, #FFEED8 96.89%);">
      <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
        <div class="flex justify-center">
          <span class="text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-5xl mx-auto font-heading border-b-4 border-orange-400"> {{ productName(slug) }}</span>
        </div>
      </div>
    </div>
    <div>
      <div class="bg-neutral-200/70 py-20">
        <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
          <div class="bg-white rounded-3xl py-16 md:py-20 px-4 md:px-10">
            <div class="block lg:flex">
              <div class="w-full flex flex-col lg:w-1/2 p-5 gap-10">
                <Carousel id="gallery" v-bind="galleryConfig" v-model="currentSlide">
                  <Slide v-for="(image, index) in product.image_url" :key="index" @click="openFullscreen(image)">
                    <img :src="image" alt="Gallery Image" class="gallery-image rounded-md w-full object-contain h-[350px]  shadow-lg" />
                  </Slide>
                  <template #addons>
                    <Navigation />
                  </template>
                </Carousel>
                <Carousel id="thumbnails" v-bind="thumbnailsConfig" v-model="currentSlide">
                  <Slide v-for="(image, index) in product.image_url" :key="index">
                    <template #default="{ currentIndex, isActive }">
                      <div :class="['thumbnail', { 'is-active': isActive }]" @click="slideTo(currentIndex)">
                        <img :src="image" alt="Thumbnail Image" class="thumbnail-image rounded-md h-20 w-20 object-cover" :style="{ opacity: isActive ? 1 : 0.5 }" />
                      </div>
                    </template>
                  </Slide>
                </Carousel>
              </div>
              <div class="w-full lg:w-1/2 p-5 ">
                <div class="text-3xl font-bold">
                  {{ product.name }}
                </div>
                <div class="text-neutral-800 py-5">
                  {{ product.title }}

                </div>

                <div>
                  <div class="no-tailwind">
                   <div v-html="product.description"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <transition name="fade-zoom">
    <div v-if="isFullscreen" class="fixed inset-0 z-50 bg-black bg-opacity-90 flex items-center justify-center" @click="closeFullscreen">
      <img :src="fullscreenImage" class="max-w-full max-h-full object-contain transform transition duration-300" />
      <button class="absolute top-4 right-4 text-white text-3xl" @click.stop="closeFullscreen">✕</button>
    </div>
  </transition>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useRoute } from 'vue-router'
import { Carousel, Slide, Navigation } from 'vue3-carousel'
import apiService from '../services/api'


const route = useRoute()
const slug = ref(route.params.slug)
const currentSlide = ref(0)

const fullscreenImage = ref(null)
const isFullscreen = ref(false)

const product = ref({})

const galleryConfig = {
  itemsToShow: 1,
  wrapAround: false,
  mouseDrag: true,       // ✅ Enable mouse dragging
  touchDrag: true,       // ✅ Enable touch dragging
  height: 350,
}

const thumbnailsConfig = {
  height: 80,
  itemsToShow: 6,
  wrapAround: false,
  touchDrag: false,
  gap: 10,
}

function openFullscreen(imageUrl) {
  fullscreenImage.value = imageUrl
  isFullscreen.value = true
}

function closeFullscreen() {
  isFullscreen.value = false
}


const productName = (value) => {
  return value
    .replaceAll('-', ' ')                   // Replace hyphens with spaces
    .split(' ')                             // Split into words
    .map(word => word.charAt(0).toUpperCase() + word.slice(1)) // Capitalize each word
    .join(' ')
}


const slideTo = (nextSlide) => {
  currentSlide.value = nextSlide
}

onMounted(async () => {
  document.title = productName(slug.value)+' - Jindal Thread';
  try {
    const res = await apiService.getProduct(slug.value)
    
    let data = res.data;
    if (data.status) {
      product.value = data.data
      console.log(data.data);
    }
  } catch (error) {
    console.log(error);
  }
})

</script>


<style scoped>
.no-tailwind * {
  all: revert;
}

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