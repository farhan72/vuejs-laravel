<template>
  <div class="jumbotron jumbotron-fluid bg-white">
    <div class="container text-center">
      <h3 class="text-dark">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h3>
      <div class="row mt-md-5">
        <div class="col-md col-6">
          <ul>
            <li v-for="(item, index) in dataOne" :key="index">{{item}}</li>
          </ul>
        </div>
        <div class="col-md col-6">
          <ul>
            <li v-for="(item, index) in dataTwo" :key="index">{{item}}</li>
          </ul>
        </div>
        <div class="col-md col-6">
          <ul>
            <li v-for="(item, index) in dataThird" :key="index">{{item}}</li>
          </ul>
        </div>
        <div class="col-md col-6">
          <ul>
            <li v-for="(item, index) in dataSecond" :key="index">{{item}}</li>
          </ul>
        </div>
      </div>
      <div class="col mt-md-4">
        <button class="btn btn-lg btn-outline-secondary rounded-pill">Selengkapnya</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ModulAvailable",
  data: () => ({
    dataOne: [
      "IcePHP",
      "apc",
      "apcu",
      "apm",
      "ares",
      "bcmath",
      "bcompiler",
      "big_int",
      "bitset",
      "bloomy",
      "bz2_filter",
      "clamav",
      "coin_acceptor",
      "crack",
      "db"
    ],
    dataTwo: [
      "http",
      "huffman",
      "idn",
      "igbinary",
      "imagick",
      "imap",
      "inclued",
      "inotify",
      "interbase",
      "intl",
      "ioncube_loader",
      "ioncube_loader_4",
      "jsmin",
      "json",
      "Idap"
    ],
    dataThird: [
      "nd_pdo_mysql",
      "oauth",
      "aci8",
      "odbc",
      "opcache",
      "pdf",
      "pdo",
      "pdo_dblib",
      "pdo_firebird",
      "pdo_mysql",
      "pdo_odbc",
      "pdo_pgsql",
      "pdo_sqlite",
      "pgsql",
      "phalcon"
    ],
    dataSecond: [
      "stats",
      "stem",
      "stomp",
      "suhosin",
      "sybase_ct",
      "sysvmsg",
      "sysvsem",
      "sysvshm",
      "tidy",
      "timezonedb",
      "trader",
      "translit",
      "uploadprogress",
      "uri_template",
      "uuid"
    ]
  })
};
</script>

<style lang="scss" scoped>
.row {
  text-align: center;
}
ul {
  list-style: none;
  padding-left: 0;
  text-align: left;
}

.btn {
  border: 2px solid #343a40;
  color: #343a40;
}

@media (min-width: 992px) {
  .row {
    text-align: left !important;
  }
  li {
    line-height: 20px;
  }
}
</style>