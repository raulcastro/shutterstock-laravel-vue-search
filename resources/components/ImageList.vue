<template>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-3" v-for="(image, index) in images" :key="index">
        <div class="product-item">
          <div class="product-image">
            <img class="img-fluid" :src="image.url" :alt="image.description">
          </div>
          <div class="product-info">
            <h4 class="product-name">
              <a href="#" @click.prevent="showModal(image)"> {{ image.description }} </a>
            </h4>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    props: ['images'],
    methods: {
      showModal(image) {
        this.$emit('show-modal', image);
      }
    }
  }
  </script>
