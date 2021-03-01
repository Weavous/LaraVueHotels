<template>
  <div class="container p-3">
    <div class="row">
      <div class="col">
        <label>Title</label>
        <input type="email" v-model="title" class="form-control" required />
      </div>

      <div class="col">
        <label>Price</label>
        <input type="text" v-model="price" class="form-control" required />
      </div>

      <div class="col">
        <label>State</label>
        <Addresses @onchange="change"></Addresses>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label>Description</label>
        <input type="text" v-model="description" class="form-control" required />
      </div>
    </div>

    <div class="row">
      <div class="col">
        <button type="submit" @click="store" class="btn btn-success w-100 mt-2">Register</button>
      </div>
    </div>
  </div>
</template>

<script>
import Addresses from "../components/Addresses.vue";

import properties from "../services/properties.js";

export default {
  name: "Register",
  data() {
    return {
      title: "",
      description: "",
      price: 0,
      address_id: 0,
    };
  },
  components: { Addresses },
  methods: {
    store() {
      if (
        this.title.length > 0 ||
        this.title.description > 0 ||
        this.title.price > 0 ||
        this.title.address_id > 0
      ) {
        properties.store({
          title: this.title,
          description: this.description,
          price: this.price,
          address_id: this.address_id,
        });
      }
    },
    change(id) {
      this.address_id = id;
    },
  },
};
</script>

<style>
</style>