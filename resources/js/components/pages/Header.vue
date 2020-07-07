<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light border-bottom top-nav">
            <div class="container">
                <div class="navbar-brand top-brand pt-md-0">
                    <div class="row">
                        <div class="col-md-1 post-tag">
                            <i class="fa fa-tag" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-3 mt-3 caption">
                            <p class="text-sm-wrap text-sm-wrap">
                                Gratis Ebook 9 Cara Cerdas Menggunakan Domain[x]
                            </p>
                        </div>
                    </div>
                </div>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="navbar-nav ml-auto subnav">
                        <a class="nav-item nav-link" href="#">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            &nbsp;0274-5305505
                        </a>
                        <a class="nav-item nav-link" href="#">
                            <i class="fa fa-comment" aria-hidden="true"></i>
                            &nbsp;Live Chat
                        </a>
                        <a class="nav-item nav-link" href="#">
                            <i
                                class="fa fa-user rounded-circle"
                                aria-hidden="true"
                            ></i>
                            &nbsp;Member Area
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light border-bottom">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img
                        src="/assets/svg/niagahoster-logo.svg"
                        class="d-inline-block align-top"
                        alt=""
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
export default {
    name: "Header"
};
</script>

<style lang="scss" scoped>
.subnav {
    .nav-link {
        font-family: "Roboto-Light", sans-serif;
        color: #676767;
        .fa-user {
            background: #4d4d4d;
            padding: 0.3em 0.4em;
            color: #ffffff;
        }
    }
}

.caption {
    overflow-wrap: break-word;
}

.top-nav .container {
    justify-content: center;
}

.top-brand {
    .row {
        justify-content: center;
        align-items: center;
        .post-tag {
            width: 10%;
            clip-path: polygon(100% 0, 100% 100%, 51% 73%, 0 100%, 0 0);
            background: #406df3;
            color: #ffffff;
            text-align: center;
            padding: 2px 7px 10px;
        }
        .caption {
            color: #676767;
            font-size: 12px;
            text-align: center;
        }
    }
}

img {
    width: 150px;
}

@media (min-width: 992px) {
    img {
        width: 40%;
    }
    .top-nav .container {
        justify-content: space-between;
    }
    .top-brand {
        position: absolute;
        top: 0;
        .row {
            justify-content: end;
        }
        .caption {
            font-size: 14px !important;
        }
    }
}
</style>
