
<section class ="home">
      

  <div class="container">
  <div class="navbar">
    <img src="Images/app_logo.png" class="logo">
                  <nav>
                  <ul id="menuList" >
				<li><a href="index.html">Home</a></li>
				<li><a href="#features">Feature</a></li>
				<li><a href="#howitworks">How it Works</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact us</a></li>
			</ul>
                  </nav>
                  
      <img src="Images/menu.png" alt="" class="menu-icon" onclick="togglemenu()">
  </div>
  
  
  <div class ="row">
      <div class ="col-1">
      <h2>Shop shoes anywhere anytime</h2> 
      <p>Choose from a range of categories and prices</p>
      <div class="store">
      <a href="https://apps.apple.com/us/app/facebook/id284882215?itsct=apps_box_badge&amp;itscg=30200" ><img src="Images/astore.png" alt="Download on the App Store" ></a>
      <a href='https://play.google.com/store/apps/details?id=com.rovio.abcasual&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='Images/gplay.png' class="googleplay"/></a>
      </div>
      </div>



      <div class ="col-2">
      <img src="Images/Object.png" class="cp1" >

      </div>

      
  </div>
  <script>
      var menuList = document.getElementById("menuList")
      menuList.style.maxHeight = "0px";

      function togglemenu() {

            if (menuList.style.maxHeight == "0px") {
                  menuList.style.maxHeight = "130px";
            } 
            else {
                  menuList.style.maxHeight = "0px";
            }
            
      }
  </script>




<!-- <div class="textbottom">
      <h2>How it Works</h2> 

</div>
<img src="Images/rectangle.png" class="rectangle" > -->

</section>

