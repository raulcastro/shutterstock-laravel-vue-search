import './bootstrap';
import { createApp } from 'vue';
import HelloWorld from '../components/HelloWorld.vue';
import ImageList from '../components/ImageList.vue';

window.app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    components: {
        HelloWorld,
        'image-list': ImageList,
    },
}).mount('#app');
