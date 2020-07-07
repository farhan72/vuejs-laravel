<template>
    <div class="jumbotron jumbotron-fluid bg-white border-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <clazy-load src="/assets/svg/zendguard.svg">
                        <img src="/assets/svg/zendguard.svg" />
                        <div slot="placeholder">
                            Loading....
                        </div>
                    </clazy-load>
                </div>
                <div class="col">
                    <clazy-load src="/assets/images/composer.png">
                        <img src="/assets/images/composer.png" />
                        <div slot="placeholder">
                            Loading....
                        </div>
                    </clazy-load>
                </div>
                <div class="col">
                    <clazy-load src="/assets/svg/composer.svg">
                        <img src="/assets/svg/composer.svg" />
                        <div slot="placeholder">
                            Loading....
                        </div>
                    </clazy-load>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SupportedLibrary"
};
</script>
