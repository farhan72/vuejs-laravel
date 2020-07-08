<template>
  <div class="jumbotron jumbotron-fluid bg-white">
    <div class="container text-center">
      <h3 class="text-dark">Mendukung Penuh Framework Laravel</h3>
      <div class="row mt-md-4 mt-3 align-items-center">
        <div class="col-md">
          <div class="hero">
            <h2 class="hero-description mt-3 text-left">
              <p>
                Tak Perlu menggunakan dedicated server ataupun VPS
                yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit
                Anda
              </p>
            </h2>
            <ul class="hero-keuntungan mt-3 text-left">
              <li class="item-text">
                <span>
                  Install Laravel
                  <b>1 klik</b> dengan Softaculous Installer.
                </span>
              </li>
              <li class="item-text">
                <span>
                  IMendukung ekstensi
                  <b>PHP MCrypt, phar, mbstring, json,</b> dan
                  <b>fileinfo.</b>
                </span>
              </li>
              <li class="item-text">
                <span>Tersedia Composer dan SSH untuk menginstall packages pilihan Anda.</span>
              </li>
            </ul>
            <div class="mt-2 text-left">
              <small
                class="text-muted"
              >Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
            </div>
            <div class="mt-md-3 mt-2 button">
              <button
                class="btn btn-primary font-weight-bold rounded-pill btn-lg"
              >Pilih Hosting Anda</button>
            </div>
          </div>
        </div>
        <div class="col-md align-bottom mt-md-0 mt-3">
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
  name: "SupportingFramework"
};
</script>

<style lang="scss" scoped>
b {
  font-weight: bold;
}
.hero {
  font-family: "Montserrat", sans-serif;
  .hero-keuntungan {
    padding-left: 0;
    list-style: none;
    padding-left: 1.5em;
    margin-left: 0;

    li {
      line-height: 20px;
      font-size: 12px;
    }

    .item-text {
      &::before {
        content: "\f058";
        font-family: FontAwesome;
        color: #38c172;
        position: absolute;
        left: 0;
        text-decoration: inherit;
        margin-left: 15px;
        font-size: 1.2em !important;
      }
    }
  }

  .button {
    text-align: center;
    .btn {
      width: 100%;
    }
  }

  .hero-description,
  .hero-keuntungan {
    font-weight: 300;

    p {
      font-size: 14px;
    }
  }
}

@media (min-width: 992px) {
  .hero-description {
    font-size: 20px !important;
    line-height: 24px;
  }

  .button {
    text-align: left !important;
    .btn {
      width: 50% !important;
    }
  }

  li {
    line-height: 33px !important;
    font-size: 14px !important;
  }
}
</style>