<template>
  
   
  <SignIn/>
  <Footer/>
  <Router-view/>
  
  
  
  
</template>

<script>

import SignIn from "../components/SignIn.vue";
import Footer from "../components/Footer.vue";
export default {
    name:'JoinusPage',
    components:{
        SignIn,
        Footer
       
    }
    

}
</script>

<style>

</style>