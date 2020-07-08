<template>
  <div>
    <Hero />
    <TechInfo />
  </div>
</template>

<script>
import Hero from "./pages/Hero";
import TechInfo from "./pages/TechInfo";

export default {
  name: "LandingPage",
  components: { Hero, TechInfo }
};
</script>

<style>
.jumbotron {
  margin-bottom: 0;
  font-family: "NunitoSansBold", sans-serif;
}
</style>
