import './bootstrap';
import { createApp } from 'vue';
import HelloWorld from '../components/HelloWorld.vue';

const app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    components: {
        HelloWorld,
    },
});

app.mount('#app');
