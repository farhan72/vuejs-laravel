<template>
  <div class="jumbotron footer mb-0 bg-dark rounded-0 d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3 footer-content">
          <h5>hubungi kami</h5>
          <ul class="text-white">
            <li>
              Telp:
              <a href="#">0274-5305505</a>
            </li>
            <li>Senin - Minggu</li>
            <li>24 Jam Nonstop</li>
            <li class="mt-3">Jl. Selokan Mataram Monjali</li>
            <li>Karangjati</li>
            <li>Sinduadi, Mlati, Sleman</li>
            <li>Yogyakarta 55284</li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 footer-content">
          <h5>Layanan</h5>
          <ul>
            <li>
              <a href="https://www.niagahoster.co.id/domain-murah">Domain</a>
            </li>
            <li>
              <a href="https://www.niagahoster.co.id/hosting-indonesia">Shared Hosting</a>
            </li>
            <li>
              <a href="https://www.niagahoster.co.id/cloud-vps-hosting">Cloud VPS Hosting</a>
            </li>
            <li>
              <a href="https://www.niagahoster.co.id/cloud-vps-hosting">Managed VPS Hosting</a>
            </li>
            <li>
              <a href="https://www.niagahoster.co.id/membuat-blog-weebly">Web Builder</a>
            </li>
            <li>
              <a href="https://www.niagahoster.co.id/ssl-murah">Keamanan SSL/HTTPS</a>
            </li>
            <li>
              <a href="https://www.niagaweb.co.id/">Jasa Pembuatan Website</a>
            </li>
            <li>
              <a href="https://www.niagahoster.co.id/afiliasi">Program Afiliasi</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 footer-content">
          <h5>Service Hosting</h5>
          <ul>
            <li>
              <a href="https://www.niagahoster.co.id/hosting-murah">Hosting Murah</a>
            </li>
            <li>
              <a href="https://www.niagahoster.co.id/hosting-indonesia">Hosting Indonesia</a>
            </li>
            <li>
              <a href="https://www.niagahoster.co.id/hosting-singapore">Hosting Singapore SG</a>
            </li>
            <li>
              <a href="https://www.niagahoster.co.id/wordpress-hosting">Hosting Wordpress</a>
            </li>
            <li>
              <a href="#">Hosting PHP</a>
            </li>
            <li>
              <a href="https://www.niagahoster.co.id/wordpress-hosting">Hosting Wordpress</a>
            </li>
            <li>
              <a href="#">Hosting Laravel</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 footer-content">
          <h5>Tutorial</h5>
          <ul>
            <li>
              <a href="#">Knowledbase</a>
            </li>
            <li>
              <a href="#">Blog</a>
            </li>
            <li>
              <a href="#">Cara Pembayaran</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- bottom -->
      <div class="row mt-5">
        <div class="col-12 col-sm-6 col-lg-3 footer-content">
          <h5>tentang kami</h5>
          <ul>
            <li>
              <a href="#">Tim Niagahoster</a>
            </li>
            <li>
              <a href="#">Karir</a>
            </li>
            <li>
              <a href="#">Events</a>
            </li>
            <li>
              <a href="#">Penawaran & Promo Spesial</a>
            </li>
            <li>
              <a href="#">Kontak Kami</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 footer-content">
          <h5>Kenapa Pilih Niagahoster?</h5>
          <ul>
            <li>
              <a href="#">Support Terbaik</a>
            </li>
            <li>
              <a href="#">Garansi Harga Termurah</a>
            </li>
            <li>
              <a href="#">Domain Gratis Selamanya</a>
            </li>
            <li>
              <a href="#">Datacenter Hosting Terbaik</a>
            </li>
            <li>
              <a href="#">Review Pelanggan</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 footer-content">
          <h5>newsletter</h5>
          <ul class="mt-md-3">
            <li class="form-newsletter">
              <input type="text" placeholder="Email" class="form-control rounded-pill col-md-12" />
              <button class="btn btn-primary rounded-pill">Berlangganan</button>
            </li>
            <li class="text-muted mt-1">
              Dapatkan promo dan konten menarik dari penyedia
              hosting terbaik anda
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 footer-social-media">
          <ul>
            <li>
              <button class="btn btn-lg rounded-circle">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </button>
            </li>
            <li>
              <button class="btn btn-lg rounded-circle">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </button>
            </li>
            <li>
              <button class="btn btn-lg rounded-circle">
                <i class="fa fa-google-plus" aria-hidden="true"></i>
              </button>
            </li>
          </ul>
        </div>
      </div>
      <!-- payment -->
      <div class="row mt-5">
        <div class="col-12 payment">
          <h5>pembayaran</h5>
          <ul class="d-md-flex">
            <li v-for="(payment, index) in paymentLogo" :key="index">
              <button class="btn" id="i">
                <clazy-load :src="payment">
                  <img :src="payment" />
                  <div slot="placeholder">Loading....</div>
                </clazy-load>
              </button>
            </li>
          </ul>
          <div class="text-muted mt-3">
            Aktivasi instan dengan e-Payment. Hosting dan domain
            langsung aktif!
          </div>
        </div>
      </div>
      <!-- end payment -->
      <hr size="2" width="100%" class="mt-3 bg-dark" />
      <div class="row mt-2 text-white copyright">
        <div class="col-12 col-md-7">
          <p class="text-center text-md-left">
            Copyright ©2020 Niagahoster | Hosting powered by PHP7,
            CloudLinux, CloudFlare, BitNinja and DC DCI-Indonesia.
            Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD
            and cloud computing technology
          </p>
        </div>
        <div class="col-12 col-md-5 mt-5 mt-md-0">
          <div class="text-center text-md-right text-white">
            <a
              href="https://www.niagahoster.co.id/syarat-dan-ketentuan"
              class="text-white"
            >Syarat dan Ketentuan</a>
            <span>|</span>
            <a
              href="https://www.niagahoster.co.id/kebijakan-privasi"
              class="text-white"
            >Kebijakan Privasi</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Footer",
  data: () => ({
    paymentLogo: [
      "/assets/svg/payment/bca.svg",
      "/assets/svg/payment/mandiri.svg",
      "/assets/svg/payment/bni.svg",
      "/assets/svg/payment/visa.svg",
      "/assets/svg/payment/master-card.svg",
      "/assets/svg/payment/atm-bersama.svg",
      "/assets/svg/payment/permata.svg",
      "/assets/svg/payment/prima.svg",
      "/assets/svg/payment/alto.svg"
    ]
  }),
  created() {
    let img = new Image();
  }
};
</script>

<style lang="scss" scoped>
h5 {
  color: #c4c4c4;
  font-size: 20px;
  font-weight: 700;
  line-height: 24px;
  text-transform: uppercase;
  font-family: "NunitoSansBold", sans-serif;
}
ul {
  margin-top: 30px;
  list-style: none;
  padding: 0;
  li,
  a {
    color: #ffffff;
    text-decoration: none;
    font-family: "NunitoSansRegular", sans-serif;
    line-height: 23px;
    &:hover {
      color: #c4c4c4;
      transition: 0.5s;
      cursor: pointer;
    }
  }

  .form-newsletter {
    position: relative;
    .btn {
      position: absolute;
      bottom: 50%;
      transform: translateY(50%);
      right: 0.5rem;
    }
    .form-control {
      padding-bottom: 1.5rem;
      padding-top: 1.5rem;
      &::placeholder {
        position: absolute;
        padding: 0 10px;
        color: #a7aaab;
        font-weight: 500;
      }
    }
  }
}

.footer-social-media ul {
  display: flex;
  justify-content: center;
  align-items: center;
  li {
    margin-right: 20px;
    .btn {
      border: 2px solid #ffffff;
      color: #ffffff;
      &:hover {
        border-color: #949494;
        background-color: #949494;
        transition: 0.5s;
      }
    }
  }
}

.payment {
  text-align: center;
  ul {
    margin-top: 20px !important;
    li {
      margin-top: 10px !important;
      .btn {
        border: 2px solid #ffffff;
        color: #ffffff;
        &:hover {
          border-color: #949494;
          background-color: #949494;
          transition: 0.5s;
        }
      }
    }
  }
}

.footer {
  padding-left: 0;
  padding-right: 0;
  font-family: "NunitoSansBold", sans-serif;
}

.footer-content {
  text-align: center;
}

.btn {
  img {
    max-width: 30%;
    filter: grayscale(100%);

    &:hover {
      filter: none;
    }
  }
}

@media (min-width: 992px) {
  .footer-content {
    text-align: left;
  }
  .footer-social-media ul {
    transform: translateY(50%);
  }
  .payment {
    text-align: left;
    ul {
      li {
        margin-right: 10px !important;
      }
    }
  }
  .btn img {
    max-width: 50px !important;
    max-height: 20px !important;
  }
  .copyright {
    font-size: 12px;
  }
}
</style>
