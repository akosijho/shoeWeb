<template>
  <Header/>
  <Nav/>
  <Discount/>
  <Banner/>
  <BannerDetails/>
  <Slide/>
  <Banner2/>
  <Slide2/>
  
</template>

<script>
import Header from "../components/Header.vue";
import Nav from "../components/Nav.vue";
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
    Nav,
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