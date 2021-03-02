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
        <Addresses v-if="this.loaded === true" @onchange="change" :id="this.address_id"></Addresses>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label>Lat</label>
        <input type="text" v-model="this.lat" class="form-control" required readonly />
      </div>
      <div class="col">
        <label>Lng</label>
        <input type="text" v-model="this.lng" class="form-control" required readonly />
      </div>
    </div>

    <div class="row">
      <div class="col">
        <label>Description</label>
        <input type="text" v-model="description" class="form-control" required />
      </div>
    </div>

    <div class="row mt-2">
      <div @click="attrpos" class="col">
        <div class="w-100" id="map"></div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <button v-if="this.id === 0" type="submit" @click="store" class="btn btn-success w-100 mt-2">Register</button>
        <button v-if="this.id > 0" type="submit" @click="store" class="btn btn-success w-100 mt-2">Update</button>
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
      price: "",
      address_id: 0,
      loaded: false,
      map: {},
      lat: 0,
      lng: 0,
    };
  },
  components: { Addresses },
  props: {
    id: {
      required: false,
      default: 0,
    },
  },
  methods: {
    store() {
      if (
        this.title.length > 0 ||
        this.title.description > 0 ||
        this.title.price > 0 ||
        this.title.address_id > 0
      ) {
        const data = {
          title: this.title,
          description: this.description,
          price: this.price,
          address_id: this.address_id,
          lat: this.lat,
          lng: this.lng,
        };

        if (this.id > 0) {
          properties.update(this.id, data);
        } else {
          properties.store(data);
        }
      }
    },
    attrpos() {
      this.lat = this.map.center.lat();
      this.lng = this.map.center.lng();
    },
    change(id) {
      this.address_id = id;
    },
  },
  mounted() {
    if (this.id > 0) {
      const response = properties.show(this.id);

      response.then((data) => {
        this.title = data.data.title;
        this.description = data.data.description;
        this.price = data.data.price;
        this.address_id = data.data.address_id;
        this.lat = data.data.lat;
        this.lng = data.data.lng;
      });
    }

    this.loaded = true;

    this.map = new google.maps.Map(document.getElementById("map"), { center: new google.maps.LatLng(-29, -49), zoom: 6, mapTypeId: google.maps.MapTypeId.ROADMAP });
  },
};
</script>

<style>
#map {
  height: 50vh;
}
</style>