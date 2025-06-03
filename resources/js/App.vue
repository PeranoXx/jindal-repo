<template>
    <div>
      <Heder />
      <router-view></router-view>
      <Footer />
    </div>
  </template>
  
  <script setup>
  import Heder from './partial/Heder.vue';
  import Footer from './partial/Footer.vue';
  </script>
  
  <style>

  </style>
  