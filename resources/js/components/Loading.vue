<template>
<div v-if="showLoader" :class="[
    'bg-white absolute z-50 top-0 w-full h-screen flex justify-center items-center transition-transform duration-700',
    !loading ? '-translate-y-full' : 'translate-y-0'
  ]">
    <div class="loader"></div>
  </div>
</template>

<script setup>
import { onMounted, ref, watch } from 'vue';

const loading = ref(sessionStorage.getItem('load') ? false : true);
const showLoader = ref(true);

setTimeout(() => {
  loading.value = false;
  sessionStorage.setItem('load', true);
  setTimeout(() => {
    showLoader.value = false;
  }, 700); // match duration-700
}, 3000);

onMounted(() => {
  if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
  }

  // Only scroll to top on hard reload
  if (performance && performance.getEntriesByType("navigation")[0]?.type === "reload") {
    window.scrollTo(0, 0);
  }

  if(loading.value == true){
    document.body.classList.add('overflow-hidden');
  }
});

watch(loading, (val) => {
  if (val) {
    document.body.classList.add('overflow-hidden');
  } else {
    document.body.classList.remove('overflow-hidden');
    history.scrollRestoration = 'auto';
  }
});

</script>
<style scoped>
.loader {
  width: fit-content;
  font-size: 100px;
  line-height: 1.5;
  font-family: system-ui, sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  color: #0000;
  -webkit-text-stroke: 1px #000;
  background:
    radial-gradient(1.13em at 50% 1.6em, #000 99%, #0000 101%) calc(50% - 1.6em) 0/3.2em 100% text,
    radial-gradient(1.13em at 50% -0.8em, #0000 99%, #000 101%) 50% .8em/3.2em 100% repeat-x text;
  animation: l9 2s linear infinite;
}

.loader:before {
  content: "Loading";
}

@keyframes l9 {
  to {
    background-position: calc(50% + 1.6em) 0, calc(50% + 3.2em) .8em
  }
}
</style>