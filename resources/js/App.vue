<template>
    <div>
      <router-view></router-view>
    </div>
  </template>
  
  <script>
  export default {
    name: 'App',
  };
  </script>
  
  <style>
  nav {
    padding: 1rem;
  }
  nav a {
    margin: 0 0.5rem;
    text-decoration: none;
    color: #42b983;
  }
  nav a.router-link-exact-active {
    font-weight: bold;
  }
  </style>
  