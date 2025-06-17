<template>
  <div>
    <Heder />
    <!-- <router-view></router-view> -->
    <RouterView />
    <Footer />
  </div>
  <Loading />
</template>

<script setup>
import Heder from './partial/Heder.vue';
import Footer from './partial/Footer.vue';
import Loading from './components/Loading.vue';
import { RouterView } from 'vue-router';


</script>

<style scoped>

</style>