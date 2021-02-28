<template>
  <div id="app">
    <Menu></Menu>
    <Footer></Footer>
  </div>
</template>

<script>
import Menu from "./components/Menu.vue";
import Footer from "./components/Footer.vue";

export default {
  name: "app",
  data() {
    return {};
  },
  components: { Menu, Footer },
};
</script>

<style>
</style>