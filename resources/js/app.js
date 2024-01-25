import './bootstrap';
import { createApp } from 'vue';
import SearchForm from '../components/SearchForm.vue';
import ImageList from '../components/ImageList.vue';
import ImageModal from '../components/ImageModal.vue';

window.app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    data() {
        return {
            modalData: {}
        };
    },
    methods: {
        open(image) {
            this.image = image;
            this.show = true;
            console.log("Modal open called", this.show); // Agregar para depuración
        },
        openModal(image) {
            console.log("Modal abierto con:", image);
            this.modalData = image;
            this.$refs.imageModal.open(image); // Llama al método 'open' del componente 'ImageModal.vue'
        }
    },
    components: {
        'search-form': SearchForm,
        'image-list': ImageList,
        'image-modal': ImageModal,
    },
}).mount('#app');
