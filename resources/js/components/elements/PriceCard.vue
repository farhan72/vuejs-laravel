<template>
  <div class="d-flex justify-content-center">
    <div class="row mt-md-2">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="label-price">
            <span>BEST PRICE</span>
          </div>
          <div class="card-header">
            <h5>Featured</h5>
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p
              class="card-text"
            >With supporting text below as a natural lead-in to additional content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
          </ul>
          <div class="card-body">
            <ul class="card-text text-center list-unstyled">
              <li class="list-title">0.5x resource power</li>
              <li>500MB</li>
              <li>Unlimited Bandwidth</li>
            </ul>
            <button type="submit" class="btn btn-outline-dark rounded-pill mt-3">Pilih Sekarang</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PriceCard"
};
</script>

<style lang="scss" scoped>
.row {
  margin-top: 4rem;
  line-height: 21px;
  color: #3a4166;

  .card {
    font-family: NunitoSansBold, sans-serif;
    position: relative;

    .label-price {
      width: 120px;
      height: 120px;
      overflow: hidden;
      position: absolute;
      left: -10px;
      top: -10px;
      overflow: hidden;

      &::after,
      &::before {
        content: "";
        border-top: 5px solid transparent;
        border-right: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid transparent;
        position: absolute;
      }

      &::before {
        bottom: 0;
        right: 0;
      }

      &::after {
        top: 0;
        left: 0;
      }

      span {
        width: 225px;
        padding: 15px 0;
        background: #00b359;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        color: #fff;
        display: block;
        position: absolute;
        top: 17px;
        right: -34px;
        transform: rotate(-45deg);
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
      }
    }

    .card-header {
      background-color: #fff;
      font-family: NunitoSansBold, sans-serif;
      h5 {
        font-weight: bold;
        font-size: 30px;
      }
    }
    .btn {
      font-family: NunitoSansBold, sans-serif;
      border-width: 2px;
      font-weight: bold;
    }
  }

  .list-title {
    text-transform: uppercase;
    font-weight: bold;
  }

  li {
    line-height: 26px;
  }
}
</style>