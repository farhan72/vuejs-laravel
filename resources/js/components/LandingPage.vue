<template>
  <div>
    <Hero />
    <TechInfo />
    <Socmed />
  </div>
</template>

<script>
import Hero from "./pages/Hero";
import TechInfo from "./pages/TechInfo";
import Socmed from "./pages/Socmed";

export default {
  name: "LandingPage",
  components: { Hero, TechInfo, Socmed }
};
</script>

<style>
.jumbotron {
  margin-bottom: 0;
  font-family: "NunitoSansBold", sans-serif;
}
</style>
