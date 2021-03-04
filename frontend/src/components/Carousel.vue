<template>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <CarouselUnit :active="true" src="/src/assets/carousel/69fkgMaR17dKzlFZk2mISw==.jpg"></CarouselUnit>
      <CarouselUnit src="/src/assets/carousel/dOenEgVlg2jdrtMVmEcpJw==.jpg"></CarouselUnit>
      <CarouselUnit src="/src/assets/carousel/p6Nuvr9O2Ehn262106yIYA==.jpg"></CarouselUnit>
      <CarouselUnit src="/src/assets/carousel/PAFJS+4Qzmpcq7USrC87Ug==.jpg"></CarouselUnit>
      <CarouselUnit src="/src/assets/carousel/RPykgNArgIVEQ4XlogcSOg==.jpg"></CarouselUnit>
      <CarouselUnit src="/src/assets/carousel/ScPtazXyWQz2b9u94Loiw==.jpg"></CarouselUnit>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</template>

<script>
import CarouselUnit from "./CarouselUnit.vue";

export default {
  name: "Carousel",
  components: { CarouselUnit },
};
</script>

<style>
</style>