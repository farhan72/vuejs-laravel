<template>
  <div>
    <Navbar />
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="/assets/svg/niagahoster-logo.svg"
            class="d-inline-block align-top"
            alt
            loading="lazy"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="#">Hosting</a>
            <a class="nav-item nav-link" href="#">Domain</a>
            <a class="nav-item nav-link" href="#">Server</a>
            <a class="nav-item nav-link" href="#">Website</a>
            <a class="nav-item nav-link" href="#">Afiliasi</a>
            <a class="nav-item nav-link" href="#">Promo</a>
            <a class="nav-item nav-link" href="#">Pembayaran</a>
            <a class="nav-item nav-link" href="#">Review</a>
            <a class="nav-item nav-link" href="#">Kontak</a>
            <a class="nav-item nav-link" href="#">Blog</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import Navbar from "../elements/Navbar";
export default {
  name: "Header",
  components: { Navbar }
};
</script>

<style lang="scss" scoped>
img {
  width: 150px;
}

@media (min-width: 992px) {
  img {
    width: 40%;
  }
}
</style>
