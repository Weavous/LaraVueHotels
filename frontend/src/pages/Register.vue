<template>
  <div class="container p-3">
    <form>
      <div class="row">
        <div class="col">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" />
        </div>

        <div class="col">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="inputPassword4" />
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" />
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" />
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity" />
        </div>

        <div class="col">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>

        <div class="col">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip" />
        </div>
      </div>

      <div class="row">
        <div class="col">
          <button type="submit" class="btn btn-primary w-100 mt-2">Sign in</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "Register",
};
</script>

<style>
</style>