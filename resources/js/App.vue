<template>
  <div>
    <Heder />
    <router-view></router-view>
    <Footer />
  </div>
  <Loading />
</template>

<script setup>
import Heder from './partial/Heder.vue';
import Footer from './partial/Footer.vue';
import Loading from './components/Loading.vue';


</script>

<style scoped>

</style>