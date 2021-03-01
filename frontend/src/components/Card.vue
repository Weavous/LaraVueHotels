<template>
  <div class="card">
    <img src="https://source.unsplash.com/user/erondu/1600x900" class="card-img-top" alt="#"/>
    <div class="card-body">
      <h5 class="card-title">{{ this.data.property.title }}</h5>
      <p class="card-text">{{ this.data.property.description }}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated {{ new Date(this.data.property.updated_at).toDateString() }}</small>
    </div>
  </div>
</template>

<script>
export default {
  name: "Card",
  props: {
    data: {
      required: true,
      type: Object,
    },
  },
};
</script>

<style>
</style>