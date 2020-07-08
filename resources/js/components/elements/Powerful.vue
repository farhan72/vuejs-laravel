<template>
  <div class="jumbotron jumbotron-fluid bg-white">
    <div class="container text-center">
      <h3 class="text-dark">Powerful dengan Limit PHP yang Lebih Besar</h3>
      <div class="content">
        <div class="row mt-4">
          <div class="col-md">
            <ul class="list-group">
              <li
                v-for="(itemLeft, index) in dataLeft"
                :key="index"
                :class="'list-group-item ' + (index == 1 && 'item-secondary')"
              >
                <div class="row">
                  <div class="col-1">
                    <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                  </div>
                  <div class="col">{{itemLeft}}</div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md">
            <ul class="list-group">
              <li
                v-for="(itemRight, index) in dataRight"
                :key="index"
                :class="'list-group-item ' + (index == 1 && 'item-secondary')"
              >
                <div class="row">
                  <div class="col-1">
                    <i class="fa fa-check-circle text-success" aria-hidden="true"></i>
                  </div>
                  <div class="col">{{itemRight}}</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Powerful",
  data: () => ({
    dataLeft: [
      "max execution time 300s",
      "max execution time 300s",
      "php memory limit 1024 MB"
    ],
    dataRight: [
      "post max size 128 MB",
      "upload max file size 128 MB",
      "max input vars 2500"
    ]
  })
};
</script>

<style scoped>
.list-group-item {
  font-family: "NunitoSansRegular", sans-serif;
  font-size: 16px;
  line-height: 24px;
  color: #3a4166;
  align-items: center;
}
.item-secondary {
  content: "";
  background-color: #f7f7f7;
}
.col-md {
  margin-top: 20px;
}

@media (min-width: 992px) {
  .fa-check-circle {
    font-size: 20px;
  }
}
</style>