<template>
<div class="modal fade" v-show="show" @click="close">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ image.description }}</h5>
                <button type="button" class="close" @click="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center align-items-center">
                <img class="img-fluid" :src="image.url" :alt="image.description">
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            show: false,
            image: {}
        };
    },
    methods: {
        open(image) {
            this.image = image;
            this.show = true;
            console.log("Modal open called", this.show); // Para depuración
        },
        close() {
            this.show = false;
        }
    }
}
</script>
