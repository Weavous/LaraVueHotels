<template>
  <footer class="footer mt-auto py-3 bg-light fixed-bottom">
    <div class="container d-flex justify-content-center">
      <span class="text-muted">
        {{ copymsg }}
      </span>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
  data() {
    return {
      copymsg: `Copyright @${new Date().getFullYear()} LaraVueHotels All Rights Reserved`,
    };
  },
};
</script>

<style>
</style>