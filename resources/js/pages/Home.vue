<template>
  <div class="relative ">
    <Carousel v-bind="carouselConfig" class="!h-auto md:!h-[500px] xl:!h-[700px] bg-gray-100">
      <Slide v-for="slide in slides" :key="slide">
        <div class="carousel__item relative h-full w-full">
          <!-- Image -->
          <img :src="slide.image_url" alt="" class="w-full h-full object-cover" />

          <!-- Dark Overlay -->
          <div class="absolute inset-0 bg-black/50"></div>

          <!-- Optional Text On Top -->
          <!-- <div class="absolute inset-0 flex items-center justify-center text-white text-2xl font-bold">
            {{ slide.title || 'Slide Content' }}
          </div> -->
        </div>
      </Slide>

      <template #addons>
        <Navigation />
        <Pagination />
      </template>
    </Carousel>
  </div>

  <section>
    <Stats />
  </section>

  <section>
    <Infrastructure :infrastructure="infrastructure" />
  </section>

  <section>
    <Machinery :machinery="machinery" />
  </section>

  <section class="relative overflow-hidden">
    <Team :teams="teams" />
  </section>
  <section>
    <Testimonial :reviews="reviews" />
  </section>

  <section>
    <Achievements :achievements="achievements" />
  </section>

  <section>
   <ContactDetail />
  </section>
</template>

<script setup>
import Header from '../partial/Heder.vue';

import 'vue3-carousel/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import { onBeforeUnmount, onMounted, ref } from 'vue';
import Stats from '../components/Home/Stats.vue';
import Infrastructure from '../components/Home/infrastructure.vue';
import Machinery from '../components/Home/Machinery.vue';
import Achievements from '../components/Home/Achievements.vue';
import Team from '../components/Home/Team.vue';
import Testimonial from '../components/Home/Testimonial.vue';
import ContactDetail from '../components/Home/ContactDetail.vue';
import apiService from '../services/api'

const carouselConfig = {
  itemsToShow: 1,
  wrapAround: true
}

const BASE_URL = import.meta.env.VITE_API_BASE_URL
const slides = ref([]);
const infrastructure = ref([]);
const machinery = ref([]);
const teams = ref([]);
const reviews = ref([])
const achievements = ref([])


onMounted(async() => {
  document.title = 'Home - Jindal Thread';
  const res = await apiService.getHomePageContent()
  let data = res.data;
  if(data.status){
    slides.value = data.data.carousel
    infrastructure.value = data.data.infrastructure
    machinery.value = data.data.machinery
    teams.value = data.data.team
    reviews.value = data.data.reviews
    achievements.value = data.data.achievements
  }
  
  // users.value = res.data
})

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