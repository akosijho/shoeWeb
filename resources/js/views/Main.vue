<template>

<Header/>
<Navbar/>
<Men/>


  
</template>

<script>

import Header from "../components/Header.vue";
import Navbar from "../components/Navbar.vue";
import Men from "../components/Men.vue";


export default {
  name:'Main',
  components:{
    Header,
    Navbar,
    Men
  }

}
</script>


<style>

</style>