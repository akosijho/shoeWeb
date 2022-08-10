<template>
  <Header/>
  <NavBar/>
  <Discount/>
  <Banner/>
  <BannerDetails/>
  <Slide/>
  <Banner2/>
  <Slide2/>
</template>

<script>
import Header from "../components/Header.vue";
import NavBar from "../components/NavBar.vue";
import Discount from "../components/Discount.vue";
import Banner from "../components/Banner.vue";
import BannerDetails from "../components/BannerDetails.vue";
import Slide from "../components/Slide.vue";
import Banner2 from "../components/Banner2.vue";
import Slide2 from "../components/Slide2.vue";
export default{
  name: 'Main',
  components: {
    Header,
    NavBar,
    Discount,
    Banner,
    BannerDetails,
    Slide,
    Banner2,
    Slide2
    
  },
}
</script>

<style>

</style>