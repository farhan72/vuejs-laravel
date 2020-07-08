<template>
  <div class="jumbotron jumbotron-fluid bg-white border-bottom">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <clazy-load src="/assets/svg/zendguard.svg">
            <img src="/assets/svg/zendguard.svg" />
            <div slot="placeholder">Loading....</div>
          </clazy-load>
        </div>
        <div class="col">
          <clazy-load src="/assets/svg/ioncube.svg">
            <img src="/assets/svg/ioncube.svg" />
            <div slot="placeholder">Loading....</div>
          </clazy-load>
        </div>
        <div class="col">
          <clazy-load src="/assets/svg/composer.svg">
            <img src="/assets/svg/composer.svg" />
            <div slot="placeholder">Loading....</div>
          </clazy-load>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SupportedLibrary"
};
</script>
