<template>
  <div class="jumbotron jumbotron-fluid bg-white">
    <div class="container text-center">
      <h3 class="text-dark">Mendukung Penuh Framework Laravel</h3>
      <div class="row mt-md-4 mt-3 align-items-center">
        <div class="col-md col-6">
          <div class="hero">
            <h2 class="hero-description mt-3 text-left">
              <p>
                Tak Perlu menggunakan dedicated server ataupun VPS
                yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit
                Anda
              </p>
            </h2>
            <ul class="hero-keuntungan mt-3 text-left">
              <li v-for="(name, index) in daftarKelebihan" :key="index">
                <i class="fa fa-check-circle text-success" aria-hidden="true" />
                <span class="ml-1" v-html="name"></span>
              </li>
              <li class="mt-2">
                <small
                  class="text-muted"
                >Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
              </li>
              <li class="mt-2">
                <button
                  class="btn btn-primary font-weight-bold rounded-pill btn-lg"
                >Pilih Hosting Anda</button>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md col-6 align-bottom">
          <clazy-load src="/assets/svg/support_laravel.svg">
            <img src="/assets/svg/support_laravel.svg" class="img-fluid" />
            <div slot="placeholder">Loading....</div>
          </clazy-load>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SupportingFramework",
  data: () => ({
    daftarKelebihan: [
      "Install Laravel <b>1 klik</b> dengan Softaculous Installer.",
      "Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json,</b> dan <b>fileinfo.</b>",
      "Tersedia Composer dan SSH untuk menginstall packages pilihan Anda."
    ]
  })
};
</script>

<style lang="scss" scoped>
.hero {
  font-family: "Montserrat", sans-serif;
  .hero-keuntungan {
    list-style: none;
    padding-left: 0;

    li {
      line-height: 35px;
    }
  }

  .hero-description,
  .hero-keuntungan {
    font-weight: 300;
  }
}

@media (min-width: 992px) {
  .hero-description {
    font-size: 20px;
    line-height: 24px;
  }
}
</style>