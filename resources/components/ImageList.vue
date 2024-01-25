<template>
<div>
    <!-- Lista de imágenes -->
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3" v-for="(image, index) in images" :key="index">
            <div class="product-item">
                <div class="product-image">
                    <img class="img-fluid" :src="image.url" :alt="image.description">
                </div>
                <div class="product-info">
                    <h4 class="product-name">
                        <a href="#" @click.prevent="showModal(image)">
                            {{ image . description }}
                        </a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
import {
    bus
} from '../js/eventBus'; // Verifica la ruta

export default {
    data() {
        return {
            images: [], // Inicializa las imágenes como un arreglo vacío
            searchQuery: '' // Para almacenar la consulta de búsqueda
        };
    },
    created() {
        bus.on('search-submitted', this.searchImages);
    },
    beforeUnmount() { // Reemplaza 'beforeDestroy' si estás usando Vue 3
        bus.off('search-submitted', this.searchImages);
    },
    methods: {
        searchImages(searchQuery) {
            // Actualiza la consulta de búsqueda y realiza la solicitud
            this.searchQuery = searchQuery;
            axios.get('/search', { // Asegúrate de que el endpoint sea correcto
                params: {
                    search: this.searchQuery
                }
            }).then(response => {
                this.images = response.data.images;
            }).catch(error => {
                console.error("Error en la búsqueda:", error);
            });
        },
        showModal(image) {
            this.$emit('show-modal', image);
        }
    }
}
</script>
