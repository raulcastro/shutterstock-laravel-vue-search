<!-- SearchForm.vue -->
<template>
    <form @submit.prevent="submitSearch" class="searchbox">
      <input type="search" v-model="searchQuery" placeholder="Search Products ...." required>
      <button class="searchbox-submit" type="submit"><i class="bx bx-search-alt"></i></button>
    </form>
  </template>

  <script>
  import { bus } from '../js/eventBus'; // Asegúrate de que la ruta es correcta

  export default {
    data() {
      return {
        searchQuery: ''
      };
    },
    methods: {
      submitSearch() {
        bus.emit('search-submitted', this.searchQuery);
      }
    }
  };
  </script>
