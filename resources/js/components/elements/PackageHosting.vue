<template>
  <div class="jumbotron jumbotron-fluid bg-white">
    <div class="container text-center">
      <h3 class="text-dark">Semua Paket Hosting Sudah Termasuk</h3>
      <div class="content">
        <div class="row mt-4 text-center">
          <div class="col-lg-4 col-md-5 mt-4" v-for="(package_, index) in packages" :key="index">
            <div class="col">
              <clazy-load :src="package_.image">
                <img :src="package_.image" class="img-fluid" />
                <div slot="placeholder">Loading....</div>
              </clazy-load>
              <div class="mt-3">
                <h4 class="font-weight-bold text-dark">{{package_.title}}</h4>
                <p class="text-center text-dark">{{package_.description}}</p>
              </div>
            </div>
            <div class="col">
              <h4></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PackageHosting",
  data: () => ({
    packages: [
      {
        image: "/assets/svg/php_all_version.svg",
        title: "PHP Semua Versi",
        description:
          "Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah Sesuka Anda!"
      },
      {
        image: "/assets/svg/mysql_v5.svg",
        title: "MySQL Versi 5.6",
        description:
          "Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur."
      },
      {
        image: "/assets/svg/cpanel.svg",
        title: "Panel Hosting cPanel",
        description:
          "Kelola website dengan panel canggih yang familiar di hati Anda."
      },
      {
        image: "/assets/svg/uptime.svg",
        title: "Garansi Uptime 99.9%",
        description:
          "Data center yang mendukung kelangsungan website Anda 24/7."
      },
      {
        image: "/assets/svg/innoDB.svg",
        title: "Database InnoDB Unlimited",
        description:
          "Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda."
      },
      {
        image: "/assets/svg/wildcard.svg",
        title: "Wildcard Remote MySQL",
        description:
          "Mendukung s/d 25 max_user_connections dan 100 max_connections."
      }
    ]
  })
};
</script>

<style lang="scss" scoped>
img {
  width: 40%;
}
</style>