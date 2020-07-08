<template>
  <div>
    <Hero />
    <TechInfo />
    <Powerful />
  </div>
</template>

<script>
import Hero from "./pages/Hero";
import TechInfo from "./pages/TechInfo";
import Powerful from "./pages/Powerful";

export default {
  name: "LandingPage",
  components: { Hero, TechInfo, Powerful }
};
</script>

<style>
.jumbotron {
  margin-bottom: 0;
  font-family: "NunitoSansBold", sans-serif;
}
</style>
