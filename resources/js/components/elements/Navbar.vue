<template>
  <div class="jumbotron jumbotron-fluid p-3 bg-white border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md text-md-left col-tag">
          <ul>
            <li>
              <span class="post-tag">
                <i class="fa fa-tag" aria-hidden="true"></i>
              </span>
            </li>
            <li class="description-tag">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]</li>
          </ul>
        </div>
        <div class="col-md ml-md-auto">
          <div class="subnav text-md-right text-center">
            <a class="nav-item nav-link" href="#">
              <i class="fa fa-phone" aria-hidden="true"></i>
              &nbsp;0274-5305505
            </a>
            <a class="nav-item nav-link" href="#">
              <i class="fa fa-comment" aria-hidden="true"></i>
              &nbsp;Live Chat
            </a>
            <a class="nav-item nav-link" href="#">
              <i class="fa fa-user rounded-circle" aria-hidden="true"></i>
              &nbsp;Member Area
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Navbar"
};
</script>

<style lang="scss" scoped>
.subnav {
  .nav-link {
    font-family: "Roboto-Light", sans-serif;
    color: #676767;
    display: inline-block;
    .fa-user {
      background: #4d4d4d;
      padding: 0.3em 0.4em;
      color: #ffffff;
    }
  }
}
.col-tag {
  position: absolute;
  top: 0;
}

ul {
  text-align: center;
  list-style: none;

  li {
    margin-top: 10px;
  }
}

.post-tag {
  clip-path: polygon(100% 0, 100% 100%, 51% 73%, 0 100%, 0 0);
  background: #0090ef !important;
  color: #ffffff;
  text-align: center;
  padding: 2px 7px 10px;
  width: 2rem;
}
@media (min-width: 992px) {
  ul {
    text-align: left;
    padding-left: 10px;
    padding-top: 0 !important;
    li {
      display: inline-block;
    }
  }

  .description-tag {
    overflow-wrap: break-word;
  }

  .post-tag {
    padding: 2px 7px 10px;
    width: 2rem;
  }
}
</style>