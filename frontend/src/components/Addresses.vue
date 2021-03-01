<template>
  <select @change="change" v-model="current" class="form-select">
    <option v-for="(address, key) in this.data" v-bind:value="address.id" :key="key" >
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
      current: 0,
    };
  },
  props: {
    id: {
      required: true,
    },
  },
  mounted() {
    addresses.index().then((response) => {
      this.data = response.data;

      if (this.id > 0) {
        this.current = this.id;
      }
    });
  },
  methods: {
    change() {
      this.$emit("onchange", this.current);
    },
  },
};
</script>

<style>
</style>