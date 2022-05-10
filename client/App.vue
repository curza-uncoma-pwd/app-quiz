<script setup lang="ts">
import { RouterView, RouterLink } from 'vue-router';
</script>

<template>
  <ul>
    <li><RouterLink to="/">Página principal</RouterLink></li>
    <li>
      <RouterLink to="/hola-mundo">Hola mundo</RouterLink>
    </li>
    <li><RouterLink to="/acerca-de">Acerca de</RouterLink></li>
  </ul>
  <img alt="Vue logo" src="./assets/logo.png" />

  <RouterView />
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
