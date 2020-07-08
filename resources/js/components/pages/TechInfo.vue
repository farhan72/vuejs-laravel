<template>
  <div class="jumbotron jumbotron-fluid bg-white border-bottom">
    <div class="container text-center">
      <div class="row img-package">
        <div class="col-md">
          <clazy-load src="/assets/svg/zendguard.svg">
            <img src="/assets/svg/zendguard.svg" />
            <div slot="placeholder">Loading....</div>
          </clazy-load>
        </div>
        <div class="col-md">
          <clazy-load src="/assets/svg/ioncube.svg">
            <img src="/assets/svg/ioncube.svg" />
            <div slot="placeholder">Loading....</div>
          </clazy-load>
        </div>
        <div class="col-md">
          <clazy-load src="/assets/svg/composer.svg">
            <img src="/assets/svg/composer.svg" />
            <div slot="placeholder">Loading....</div>
          </clazy-load>
        </div>
      </div>
      <div class="mt-5 price">
        <div class="title">
          <h3>Paket Hosting Singapura yang Tepat</h3>
          <p class="subtitle">Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
        </div>
        <PriceCard />
      </div>
    </div>
  </div>
</template>

<script>
import PriceCard from "../elements/PriceCard";
export default {
  name: "TechInfo",
  components: { PriceCard }
};
</script>

<style lang="scss" scoped>
.title {
  margin-top: 4rem;
  color: #4c4c4c;
  h3 {
    font-weight: bold;
    font-size: 33px;
  }
  .subtitle {
    font-family: "Montserrat", sans-serif;
    font-size: 24px;
  }
}

.img-package .col-md {
  margin-top: 50px;
}

@media (min-width: 992px) {
  .img-package .col-md {
    margin-top: 0;
  }
}
</style>