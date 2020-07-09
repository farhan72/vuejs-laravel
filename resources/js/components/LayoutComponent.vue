<template>
    <div class="bg-white main">
        <Header />
        <LandingPage />
        <Footer />
    </div>
</template>

<script>
import Header from "./pages/Header";
import Footer from "./pages/Footer";
import LandingPage from "./LandingPage";
export default { components: { Header, Footer, LandingPage } };
</script>

<style lang="scss">
@import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap");
body {
    overflow-x: hidden;
}
.main {
    display: flex;
    min-height: 100vh;
    flex-direction: column;

    .footer {
        margin-top: auto;
    }
}
</style>
