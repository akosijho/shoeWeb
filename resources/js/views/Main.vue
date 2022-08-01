<template>
  <Header/>
  <NavBar/>
  <Discount/>
  <Banner/>
  <BannerDetails/>
  <Slide/>
</template>

<script>
import Header from "../components/Header.vue";
import NavBar from "../components/NavBar.vue";
import Discount from "../components/Discount.vue";
import Banner from "../components/Banner.vue";
import BannerDetails from "../components/BannerDetails.vue";
import Slide from "../components/Slide.vue";
export default{
  name: 'Main',
  components: {
    Header,
    NavBar,
    Discount,
    Banner,
    BannerDetails,
    Slide
    
  }
}
</script>


<style>

</style>