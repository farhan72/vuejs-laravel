<template>
  <div>
    <div class="jumbotron jumbotron-fluid bg-light p-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left">
            <h4 class="mt-2">Bagikan jika Anda menyukai halaman ini.</h4>
          </div>
          <div class="col-md text-center text-md-left">
            <div class="socmed">
              <div>
                <i class="fa fa-facebook-square fb" aria-hidden="true"></i>
                <span>80k</span>
              </div>
              <div>
                <i class="fa fa-twitter-square twitter" aria-hidden="true"></i>
                <span>450</span>
              </div>
              <div>
                <i class="fa fa-google-plus-square google-plus" aria-hidden="true"></i>
                <span>1900</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="jumbotron jumbotron-fluid bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-10 text-center text-md-left">
            <h3>
              <span class="text-white">
                Perlu
                <b>BANTUAN?</b> Hubungi Kami :
                <b>0274-5305505</b>
              </span>
            </h3>
          </div>
          <div class="col text-center text-md-right">
            <button class="btn btn-lg btn-outline-light rounded-pill live_chat">
              <i class="fa fa-comments" aria-hidden="true"></i>
              <span class="ml-2">Live Chat</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Socmed"
};
</script>

<style lang="scss" scoped>
.socmed {
  div {
    display: inline-block;
    margin-right: 10px;
  }
  .fa {
    font-size: 2em;
    position: relative;
    top: 4px;
  }

  .fb {
    color: #23599b;
  }

  .twitter {
    color: #00aef1;
  }

  .google-plus {
    color: #fc4a35;
  }

  span {
    padding: 3px 8px 3px 8px;
    border: 1px solid #cdcdcd;
    color: #cdcdcd;
    margin-left: 8px;

    &::before {
      content: "";
      position: absolute;
      width: 10px;
      height: 10px;
      border-bottom: 1px solid #cdcdcd;
      border-left: 1px solid #cdcdcd;
      transform: rotate(45deg);
      margin-top: 13px;
      margin-left: -13px;
      background: #f8f9fa;
    }
  }
}
</style>