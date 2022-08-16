<template>
  <div class="signin">
    <div class="nikelogo">
        <svg class="pre-logo-svg" height="17px" width="324px" fill="#111" viewBox="0 0 69 32"><path d="M68.56 4L18.4 25.36Q12.16 28 7.92 28q-4.8 0-6.96-3.36-1.36-2.16-.8-5.48t2.96-7.08q2-3.04 6.56-8-1.6 2.56-2.24 5.28-1.2 5.12 2.16 7.52Q11.2 18 14 18q2.24 0 5.04-.72z"></path></svg>
    </div>
    <h2>YOUR ACCOUNT FOR EVERYTHING NIKE</h2>
    <form action="/api/signin" method="post" @submit.prevent="addSignIn()">
        <div class="email">
            <input type="text" name="" id="email" v-model="email" placeholder="Username" required>
        </div>
        <div class="pass">
            <input type="password" name="" id="pass" v-model="pass" placeholder="Password" required>
        </div>

        <div class="col3">
            <div class="checkbox">
                
                <label><input type="checkbox" name="checkbox" id="" value="Keep me signed in"> Keep me signed in</label>
            
            </div>
            <div class="forgotten">
                <a href="http://">Forgotten your password?</a>
            </div>
        </div>

        <div class="terms">
            <p>By logging in, you agree to Nike's <a href="http://">Privacy Policy</a> and <a href="">Terms of Use.</a> </p>
        </div>

        <div class="button_signin">
            <input type="submit" value="SIGN IN">
        </div>
        <div class="joinus">
            <p>Not a Member? <router-link to="/joinuspage">Join Us.</router-link></p>
        </div>
    </form>
   
  </div>
  <router-view></router-view>
</template>

<script>
import axios from 'axios'

export default {
    name: 'SignIn',

    data(){
        return{
            email:'',
            pass:''

        }
    },
    mounted(){
        console.log('Component mounted.')   
    },
  methods:{
        addSignIn(){
            axios.get('/api/signin',{
                email:this.email,
                pass:this.pas
                })
            .then((res) => console.log('Pwede'))
            .catch((err) => console.log('Di Pwede na!'));
        }
        
    }
}
</script>

<style>

</style>