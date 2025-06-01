<template>
  <Header />
  <div class="relative md:-top-5">
    <Carousel v-bind="carouselConfig" class="!h-[300px] lg:!h-[700px] bg-gray-100">
      <Slide v-for="slide in slides" :key="slide">
        <div class="carousel__item">
          <img class="h-full object-contain" :src="slide.download_url" alt="">
        </div>
      </Slide>

      <template #addons>
        <Navigation />
        <Pagination />
      </template>
    </Carousel>
  </div>
  <div class="relative top-0 md:-top-14 z-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 mx-10 mt-10 sm:mx-20 lg:mt-0 lg:grid-cols-4 gap-4 xl:w-7xl lg:mx-auto">
      <div class="shadow-lg px-4 py-6 bg-white rounded-md">
        <div class="flex flex-col items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-[#1E40AF]">
            <path fill-rule="evenodd"
              d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z"
              clip-rule="evenodd" />
            <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
          </svg>
          <span class="font-bold text-xl pt-2">
            Take Requirement
          </span>
          <span class="text-center">Post an Inquiry via mail or contact us</span>
        </div>
      </div>
      <div class="shadow-lg px-4 py-6 bg-white rounded-md">
        <div class="flex flex-col items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-[#1E40AF]">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM9 7.5A.75.75 0 0 0 9 9h1.5c.98 0 1.813.626 2.122 1.5H9A.75.75 0 0 0 9 12h3.622a2.251 2.251 0 0 1-2.122 1.5H9a.75.75 0 0 0-.53 1.28l3 3a.75.75 0 1 0 1.06-1.06L10.8 14.988A3.752 3.752 0 0 0 14.175 12H15a.75.75 0 0 0 0-1.5h-.825A3.733 3.733 0 0 0 13.5 9H15a.75.75 0 0 0 0-1.5H9Z" clip-rule="evenodd" />
          </svg>

          <span class="font-bold text-xl pt-2">
            Best Price
          </span>
          <span class="text-center">We assure that best prices will be quoted by our employees</span>
        </div>
      </div>
      <div class="shadow-lg px-4 py-6 bg-white rounded-md">
        <div class="flex flex-col items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-[#1E40AF]">
            <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
            <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
          </svg>

          <span class="font-bold text-xl pt-2">
            Deal Finalize
          </span>
          <span  class="text-center">Finalize the deal and be our happy customer</span>
        </div>
      </div>
      <div class="shadow-lg px-4 py-6 bg-white rounded-md">
        <div class="flex flex-col items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 text-[#1E40AF]">
            <path d="M12.378 1.602a.75.75 0 0 0-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03ZM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 0 0 .372-.648V7.93ZM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 0 0 .372.648l8.628 5.033Z" />
          </svg>

          <span class="font-bold text-xl pt-2">
            Deliver Products
          </span>
          <span  class="text-center">The Delivery will be made within 7 business days</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import Header from '../partial/Heder.vue';

import 'vue3-carousel/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import { onMounted, ref } from 'vue';

const carouselConfig = {
  itemsToShow: 1,
  wrapAround: true
}

const slides = ref([]);

onMounted(() => {
  fetch('https://picsum.photos/v2/list?page=12&limit=5')
    .then(response => response.json())
    .then(data => {
      // Handle the response data
      slides.value = data;
      console.log(data);
    })
    .catch(error => {
      // Handle any errors
      console.error('Error:', error);
    });
})
</script>