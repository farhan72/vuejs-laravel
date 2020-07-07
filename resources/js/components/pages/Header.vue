<template>
    <nav
        class="navbar navbar-expand-lg navbar-light bg-light border-bottom top-nav"
    >
        <div class="container">
            <div class="navbar-brand top-brand">
                <span class="post-tag">
                    <i class="fa fa-tag" aria-hidden="true"></i>
                </span>
                <small
                    >Gratis Ebook 9 Cara Cerdas Menggunakan Domain[ x ]</small
                >
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
                <ul class="navbar-nav ml-auto subnav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            &nbsp;0274-5305505
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-comment" aria-hidden="true"></i>
                            &nbsp;Live Chat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i
                                class="fa fa-user rounded-circle"
                                aria-hidden="true"
                            ></i>
                            &nbsp;Member Area
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Header"
};
</script>

<style lang="scss" scoped>
.subnav .nav-item {
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

.post-tag {
    clip-path: polygon(100% 0, 100% 100%, 51% 73%, 0 100%, 0 0);
    background: #406df3;
    color: #ffffff;
    padding: 2px 7px 7px;
}

@media (min-width: 992px) {
    .top-brand {
        position: absolute;
        top: 0;
        color: #676767;
        padding: 0;
    }
}
</style>
