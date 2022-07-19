<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Document</title>
</head>
<body>
    @yield('content')
    
 <!--=============== SCROLL REVEAL===============-->
 
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

</body>
 
</html>