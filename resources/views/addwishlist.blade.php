<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            display:flex;
            flex-direction:row;
            width:80%;
            margin: 0 auto;

        }
        .container{
            margin-top: 2em
        }
        .con{
            width:50%;
            border:2px solid black;
            height: 10vh; 
            margin: auto;      
        }
        ul{
            list-style-type: none;
        }

        input[type="text"]
        {
            color:black;
            border:none;
            background-color:white;
        }
       

    </style>
</head>
<body>
    <h1><a href="{{url('mywishlist')}}">go to wishlist</a></h1>
@foreach ($list as $value)
<div class="container">
    <div class="con">
        <div>
            <p>{{ $value->product_name }}</p>
            <input type="text" name="getname" value="{{ $value->product_name }}" hidden>
        </div>
        <div>
             <p>{{ $value->product_image }}</p>
             <input type="text" name="getprice" value="{{ $value->product_image }}" hidden>   
        </div>
    </div>
       
</div>
@endforeach




</body>
</html>