<template>
  <select class="form-control" required>
    <option v-for="(address, key) in this.data" v-bind:value="address.id" :key="key">
      {{ `${address.state} - ${address.city} - ${address.street}` }}
    </option>
  </select>
</template>

<script>
import addresses from "../services/addresses.js";

export default {
  name: "Addresses",
  data() {
    return {
      data: [],
    };
  },
  mounted() {
    addresses.index().then((response) => {
      this.data = response.data;
    });
  },
};
</script>

<style>
</style>