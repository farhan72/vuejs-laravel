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
              <li v-for="(name, index) in daftarKelebihan" :key="index" class="item-text">
                <span v-html="name"></span>
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
    padding-left: 0;
    list-style: none;
    padding-left: 1.5em;
    margin-left: 0;

    li {
      line-height: 33px;
    }

    .item-text {
      overflow-wrap: break-word;
      &::before {
        content: "\f058";
        font-family: FontAwesome;
        color: #38c172;
        position: absolute;
        left: 0;
        text-decoration: inherit;
        margin-left: 10px;
        font-size: 20px !important;
      }
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