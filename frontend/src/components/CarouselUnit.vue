<template>
  <div class="carousel-item" v-bind:class="{ active: active }">
    <img :src="this.src" class="d-block w-100" style="height: 600px; width: 1200px" alt="#" />
  </div>
</template>

<script>
export default {
  name: "CarouselUnit",
  props: {
    src: {
      type: String,
      required: true,
    },
    active: {
      type: Boolean,
      required: false,
      default: false,
    },
  }
};
</script>

<style>
</style>