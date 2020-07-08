<template>
  <div class="jumbotron jumbotron-fluid bg-white mb-0">
    <div class="container text-center">
      <div class="row mt-md-4 mt-3 align-items-center">
        <div class="col-md">
          <div class="hero">
            <div class="hero-description mt-3 text-left">
              <h3 class="text-dark">Linux Hosting yang Stabil dengan Teknologi LVE</h3>
              <p class="mt-md-3 mt-2">
                SuperMicro
                <b>Intel Xeon 24-Cores</b> server dengan RAM
                <b>128 GB</b> dan teknologi
                <b>LVE CludLinux</b> untuk stabilitas server Anda. Dilengkapi dengan SSD untuk kecepatan
                <b>MySQl</b> dan caching, Apache load balancer berbasis LiteSpeed Technologies,
                <b>CageFS</b> security,
                <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda.
              </p>
            </div>
            <div class="mt-md-3 mt-2 button">
              <button
                class="btn btn-primary font-weight-bold rounded-pill btn-lg"
              >Pilih Hosting Anda</button>
            </div>
          </div>
        </div>
        <div class="col-md align-bottom mt-md-0 mt-3">
          <clazy-load src="/assets/images/Image support.png">
            <img src="/assets/images/Image support.png" class="img-fluid" />
            <div slot="placeholder">Loading....</div>
          </clazy-load>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "LinuxHosting"
};
</script>

<style lang="scss" scoped>
b {
  font-weight: bold;
}
.hero {
  font-family: "Roboto", sans-serif;

  .button {
    text-align: center;
    .btn {
      width: 100%;
    }
  }

  .hero-description {
    font-weight: 300;

    p {
      font-size: 14px;
      text-align: justify;
    }
  }
}

@media (min-width: 992px) {
  .hero-description {
    font-size: 20px !important;
    line-height: 24px;

    p {
      text-align: left;
    }
  }

  .button {
    text-align: left !important;
    .btn {
      width: 50% !important;
    }
  }
}
</style>