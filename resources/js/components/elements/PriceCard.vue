<template>
    <div class="d-flex justify-content-center mt-2">
        <div class="container">
            <div class="row">
                <div
                    class="col-md mt-3 mt-md-0 p-0"
                    v-for="item in priceList"
                    :key="item.priceId"
                >
                    <div
                        :class="
                            'card' + (item.isBestSeller ? ' active-card' : '')
                        "
                    >
                        <div class="label-price" v-show="item.isBestSeller">
                            <span>BEST SELLER!</span>
                        </div>
                        <div class="card-header">
                            <h5>{{ titleCase(item.label) }}</h5>
                        </div>
                        <div class="card-body discount">
                            <s>Rp {{ formatNumber(item.price) }}</s>
                            <h3 class="card-title">
                                <small class="currency">Rp</small>
                                <b>{{
                                    discount(item.discountPrice).priceBig
                                }}</b>
                                <small class="price-small">
                                    <b
                                        >.{{
                                            discount(item.discountPrice)
                                                .priceSmall
                                        }}</b
                                    >/ bln
                                </small>
                            </h3>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <b>{{ formatNumber(item.totalUsers) }}</b>
                                Pengguna Terdaftar
                            </li>
                        </ul>
                        <div class="card-body">
                            <ul class="card-text text-center list-unstyled">
                                <li
                                    v-for="(feature, index) in item.features"
                                    :key="index"
                                    v-html="feature"
                                ></li>
                            </ul>
                            <button
                                type="submit"
                                class="btn btn-outline-dark rounded-pill mt-3"
                            >
                                {{
                                    item.label == "bisnis"
                                        ? "Diskon 40%"
                                        : "Pilih Sekarang"
                                }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PriceCard",
    data: () => ({
        priceList: []
    }),
    methods: {
        async fetchAllData() {
            await axios
                .get(`${process.env.MIX_API_URL}api/price`)
                .then(result => (this.priceList = result.data.items))
                .catch(e => console.log(e));
        },
        titleCase(value) {
            return value.replace(/(?:^|\s|-)\S/g, x => x.toUpperCase());
        },
        formatNumber(num) {
            let number = null;
            if (num >= 0) {
                number = num
                    .toString()
                    .replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
            }
            return number;
        },
        discount(number) {
            const value = String(number);
            return {
                priceBig: value.slice(0, 2),
                priceSmall: value.slice(value.length - 3)
            };
        }
    },
    created() {
        this.fetchAllData();
    }
};
</script>

<style lang="scss" scoped>
.row {
    @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap");
    margin-top: 4rem;
    line-height: 21px;
    color: #3a4166;

    .card {
        font-family: "NunitoSansBold", sans-serif;
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

    .card-title {
        font-size: 3em;

        small {
            font-size: 1rem;
            position: relative;
            top: -15px;
        }

        .currency {
            left: 6px;
        }

        .price-small {
            right: 10px;
        }
    }
}

.active-card {
    border: 1px solid #008fee;
    z-index: 10000;
    .card-header,
    .list-group-item,
    .discount {
        background-color: #008fee !important;
        color: #fff;
    }

    .list-group-item {
        background-color: #007fde !important;
    }
}
</style>
