<template>
  <div class="container p-3">
    <div class="row">
      <div v-for="(property, key) in data" class="col-md-4" :key="key">
        <Card :data="{ property }"></Card>
      </div>
    </div>
  </div>
</template>

<script>
import Card from "../components/Card.vue";

import properties from "../services/properties.js";

export default {
  name: "Pricing",
  components: { Card },
  data() {
    return {
      data: [],
    };
  },
  mounted() {
    properties.index().then((response) => {
      this.data = response.data;
    });
  },
};
</script>

<style>
</style>