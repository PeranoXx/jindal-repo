<template>
    <div class="py-10 xl:py-20" style="background:linear-gradient(131deg, #E8E5FE 26.82%, #FFEED8 96.89%);">
      <div class="mx-10 mt-10 lg:mx-20 lg:mt-0 gap-4 xl:w-7xl xl:mx-auto">
        <div class="flex justify-center">
          <span class="text-4xl sm:text-6xl xl:text-6xl font-semibold mb-5 sm:mb-8 py-4 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-4xl mx-auto font-heading border-b-4 border-orange-400">Achievements</span>
        </div>
        <p class="text-md sm:text-xl text-neutral-600 font-semibold text-center mb-16 tracking-tight">Empowering Innovation Through Our Capabilities</p>
        <div class="pb-20">
        <div  ref="animateSection" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 justify-evenly">
          <div v-for="(item, index) in achievements" :key="index" class="rounded-lg shadow-xl hover:shadow-orange-500/10 transition-all duration-200 bg-white px-20 py-10 text-center flex-1">
            <div class="text-6xl font-bold pb-5">
              <NumberAnimation
                v-if="animate"
                :from="0"
                :to="item.achivement_number"
                :duration="3"
                :format="theFormat"
                autoplay
                easing="linear"
                :key="animate + '-' + index"
              />
              <span v-if="animate">+</span>
            </div>
            <div class="text-2xl lg:text-xl xl:text-2xl text-neutral-600">
             {{ item.title }}
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
</template>

<script setup>
import { onBeforeUnmount, onMounted, ref } from 'vue';

let observer = null;
const animate = ref(false);
const animateSection = ref(null);
const props = defineProps(['achievements'])

function theFormat(value) {
  return Math.round(value);
}

onMounted(() => {
  observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.8,
  });
  if (animateSection.value) {
    observer.observe(animateSection.value);
  }
})


onBeforeUnmount(() => {
  if (observer) observer.disconnect();
});

function handleIntersection(entries) {
  const entry = entries[0];
  if (entry.isIntersecting) {
    animate.value = true;
    if (observer) observer.disconnect();
  }
}



</script>