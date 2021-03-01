<template>
  <div class="card">
    <img src="https://source.unsplash.com/user/erondu/1600x900" class="card-img-top" alt="Card" />
    <div class="card-body">
      <h5 class="card-title">{{ this.data.property.title }}</h5>
      <p class="card-text">{{ this.data.property.description | str32 }}</p>
    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-10 col-md-10">
          <small class="text-muted">Last updated {{ new Date(this.data.property.updated_at).toDateString() }}</small>
        </div>
        <div class="col-2 col-md-2">
          <i class="bi bi-blockquote-left"></i>
            <router-link v-bind:to="`register/${this.data.property.id}`" class="text-decoration-none text-dark">
              <i class="bi bi-grid-3x3-gap-fill" title="Edit this record?"></i>
            </router-link>
        </div>
      </div>
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
  filters: {
    str32(text){
      return text.substring(0, 32);
    }
  }
};
</script>

<style>
</style>