<template>
    <div>
        <Hero />
        <SupportedLibrary />
    </div>
</template>

<script>
import Hero from "./pages/Hero";
import SupportedLibrary from "./pages/SupportedLibrary";
export default {
    name: "LandingPage",
    components: { Hero, SupportedLibrary }
};
</script>

<style>
.jumbotron {
    margin-bottom: 0;
}
</style>
