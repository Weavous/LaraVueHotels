<template>
  <div class="row">
    <div v-for="(property, key) in this.data" :key="key" class="col-md-3 mt-2">
      <Card :data="{ property }"></Card>
    </div>
  </div>
</template>

<script>
import Card from "../components/Card.vue";

import properties from "../services/properties.js";

export default {
  name: "NearProperty",
  components: { Card },
  data() {
    return {
      data: [],
    };
  },
  props: {
    lat: {
      required: true,
      default: 0,
      type: Object
    },
    lng: {
      required: true,
      default: 0,
      type: Object
    },
    id: {
      required: true,
      default: 0,
      type: Object
    },
  },
  mounted() {
    const res = properties.nearestproperties(this.lat.lat, this.lng.lng);

    res.then((response) => {
      this.data = response.data.filter((n) => {
        return parseInt(n.id) !== parseInt(this.id.id);
      });
    });
  },
};
</script>

<style>
</style>