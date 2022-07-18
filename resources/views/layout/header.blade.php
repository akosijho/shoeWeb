<header> <nav>
        <a href="#" class="brand">Ravi ED</a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <script>
        window.onscroll = () => {
            var nav  = document.querySelector('nav');
            
            if (window.pageYOffset > 0) {
                nav.classList.add("sticky")
            } 
            else {
                nav.classList.remove("sticky");
            }
        }
    </script>
</header>