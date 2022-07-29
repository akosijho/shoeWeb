<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/app_logo.png" type="image/x-icon">
    
    @vite(['resources/css/style.css', 'resources/js/app.js'])

    <title>Shoe-Web</title>
</head>
<body>
<!-- <div class="loader-wrapper" id="loads">
    <span class="loader"><span class="loader-inner"></span></span>
</div> -->
<!-- <div id="loading"></div> -->

    
    <h1>Hello World</h1>
    
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
 
    @vite(['resources/js/index.js','resources/js/scrollanchor.js', 'resources/js/scrollreveal.min.js'])
 

 <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>



</body>
 
</html>