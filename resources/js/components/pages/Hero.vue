<template>
  <div class="jumbotron jumbotron-fluid bg-white border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="hero">
            <h1 class="hero-title text-dark">PHP HOSTING</h1>
            <h2 class="hero-description mt-3 text-left">
              <p>
                Cepat, handal, penuh, dengan modul PHP yang Anda
                butuhkan
              </p>
            </h2>
            <ul class="hero-keuntungan mt-3 text-left">
              <li v-for="(name, index) in daftarKelebihan" :key="index" class="item-text">
                <span class="ml-1">{{ name }}</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-5">
          <clazy-load src="/assets/svg/banner_PHP.svg">
            <img src="/assets/svg/banner_PHP.svg" />
            <div slot="placeholder">Loading....</div>
          </clazy-load>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Hero",
  data: () => ({
    daftarKelebihan: [
      "Solusi PHP untuk performa query yang lebih cepat",
      "Konsumsi memori yang lebih rendah",
      "Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7",
      "Fitur enkripsi IonCube dan Zend Guard Loaders"
    ]
  })
};
</script>

<style lang="scss" scoped>
.hero-title {
  font-weight: 700;
}
.hero-keuntungan {
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
      left: 1rem;
      text-decoration: inherit;
      margin-right: 15px;
      font-size: 1.2em !important;
    }
  }
}
.hero-description,
.hero-keuntungan {
  font-weight: 300;

  p {
    font-size: 18px;
  }
}
.hero {
  text-align: center;
}
@media (min-width: 992px) {
  .hero {
    font-family: "Montserrat", sans-serif;
    color: #4c4c4c;
    position: absolute;
    bottom: 0;
    margin: 0;
    padding: 0;
  }
  .hero-keuntungan {
    li {
      margin-bottom: 10px;
      .fa {
        font-size: 18px;
      }
    }

    .item-text {
      &::before {
        left: 0;
        margin-right: 15px;
      }
    }

    p {
      font-size: 1em;
    }
  }
  .col-md {
    margin-top: 20px;
  }
}
</style>
