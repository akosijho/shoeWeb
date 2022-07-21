<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/app_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    
    

    <title>Shoe-Web</title>
</head>
<body>
<!-- <div class="loader-wrapper" id="loads">
    <span class="loader"><span class="loader-inner"></span></span>
</div> -->
<!-- <div id="loading"></div> -->

    @yield('content')
    
 <!--=============== SCROLL REVEAL===============-->
 <script src="https://unpkg.com/scrollreveal"></script>
 
 <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 <script>
    $(window).scroll(function() {
        if($(window).scrollTop()){
            $(".navbar").addClass("black");
        }
        else{
            $(".navbar").removeClass("black");
        }

        
    });

 </script>      
 
 <script src ="./index.js"></script>
 <script src ="./scrollanchor.js"></script>
 <script src ="./jquery-3.6.0.min.js"></script>
 <script src ="./scrollreveal.min.js"></script>
 
 

 <script>
        // $(windows).on("load",function(){
        //   $(".loader-wrapper").fadeOut("slow");
        // });

        // $(document).ready(function(){
        // $('.loader-wrapper').fadeOut(500);
        //     });

        // var loader = getElementbyID("loads");
    </script>
 <script>
		// $(document).ready(function(){
			// 	$('div#loading').removeAttr('id');
		// });
		var preloader = document.getElementById("loading");
		// window.addEventListener('load', function(){
		// 	preloader.style.display = 'none';
		// 	})

		function myFunction(){
			preloader.style.display = 'none';
		};
	</script>
</body>
 
</html>