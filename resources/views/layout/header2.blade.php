<header id="header">
     <div class="navbar">
        <a href="#" class="brand"><img src="Images/app_logo.png" class="logo"></a>
        <ul>
                <li> <a href="/home">Home</a></li>
				<li><a href="#features">Features</a></li>
				<li><a href="#howitworks">How it Works</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="#contact">Contact us</a></li>
        </ul>
</div>
    <script>
        window.onscroll = () => {
            var nav  = document.querySelector('.navbar');
            
            if (window.pageYOffset > 0) {
                nav.classList.add("sticky")
            } 
            else {
                nav.classList.remove("sticky");
            }
        }
    </script>
    
</header>