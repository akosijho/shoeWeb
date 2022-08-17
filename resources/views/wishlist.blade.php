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
    
    <h1><a href="{{ url('/mywishlist') }}">go to wishlist</a></h1>
    <h1>User no. 1</h1>
@foreach ($list as $value)
<form action="{{ route('wishlist.save') }}" method="post">
    @csrf
    <input type="text" value="1" name="wishlist_id" hidden>
<div class="container">
    <div class="con">
        <div>
            <p>{{ $value->name }}</p>
            <input type="text" name="getname" value="{{ $value->name }}" hidden>
        </div>
        <div>
             <p>{{ $value->price }}</p>
             <input type="text" name="getprice" value="{{ $value->price }}" hidden>   
        </div>
        <div>
              <button type="submit">add to wishlist</button>
        </div>
    </div>
       
</div>
</form>
@endforeach




</body>
</html>