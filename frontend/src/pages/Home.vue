<template>
  <div class="container mt-5">
    <div class="container px-4 px-md-3">
      <div class="row align-items-lg-center">
        <div class="col-8 mx-auto col-md-4 order-md-2 col-lg-2 d-flex justify-content-center">
          <img src="../assets/logo.png" />
        </div>
        <div class="col-md-8 order-md-1 col-lg-8 text-center text-md-start">
          <h1 class="mb-3">Made with Laravel & Vue with Bootstrap</h1>
          <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
      </div>
    </div>

    <Carousel></Carousel>
  </div>
</template>

<script>
import Carousel from "../components/Carousel.vue";

export default {
  name: "Home",
  components: { Carousel },
};
</script>

<style>
</style>