<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    // display data
    function index()
    {
        return response()->json(Product::all(), 200);
    }
    





    // search data
    function searchByid(Request $request)
    {   
        $search = $request->input('search');
        $filterData = Product::where('name','LIKE','%'.$search.'%')->get();
        return response($filterData, 200);
        
    }





    // insert data
    function saves(Request $request)
    {

            $product = new Product;
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->sizes = $request->input('sizes');

            $image_64 = $request->input('image'); 
           
            
            foreach($image_64 as $images)
            {
            $extension = explode('/', explode(':', substr($images, 0, strpos($images, ';')))[1])[1]; 
            $replace = substr($images, 0, strpos($images, ',')+1); 
            $image = str_replace($replace, '', $images); 
            $image = str_replace(' ', '+', $image); 
            $imageName = Str::random(10).'.'.$extension;
            Storage::disk('public')->put($imageName, base64_decode($image));
            }
            $product->images = $imageName;

            $product->save();
            return response($product, 200);
        

            
    

    }








    // update data
     function update(Request $request, $id)
    {

        $products = Product::find($id);

        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price; 
        $products->sizes = $request->sizes;

        if($request->hasfile('image'))
        {
             $destination1 = 'storage/products_image/'.$products -> images;
              if(File::exists($destination1))
             {
                   File::delete($destination1);
             }
            
            $file = $request->file('image');
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("storage/products_image/"),$imageName);
            $products->images = $imageName;

        }

        $products->update();
        return response()->json($products, 200);
        
    }
     





    // delete data
    function delete(Request $request, $id)
    {
         $product = Product::find($id);
        if(is_null($product)) 
        { 
            return response()->json(['message' => 'Product Not Found', 404]);
        }

        $product = $product->delete();
        return response(null, 204);
    }
    

    function category()
    {
        return response()->json(Product::select('category')->distinct()->get(), 200);
    }


    function searchByCategory($category)
    {
        if($category == "All"){
            return response()->json(Product::all(), 200);
        } else{
        return response()->json(Product::where('category', '=',$category)->get(), 200);
        }
    }


    function sampleimage(Request $request)
    {
        $product = new Product;
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->sizes=$request->input('sizes');
        $image = $request->input('images');  


        foreach($image as $images)
        {
         $images = str_replace('data:image/png;base64,', '', $images);
         $images = str_replace(' ', '+', $images);
         $imageName = Str::random(10).'.'.'png';
         Storage::disk('public')->put($imageName, base64_decode($images));
        //  $var1 = $image;
        //  
        $product->images=$image;
        }
        
        $product->save();
        return response()->json($product, 200);



    
    }
}




// $products = new Product;
//         $products->name = $request->name;
//         $products->description = $request->description;
//         $products->price = $request->price;


//         $images = $request->file('images');
//         $imageName='';
//         foreach($images as $image)
//         {
//             $new_name = rand().'.'.$image->getClientOriginalExtension();
//             $image->move(public_path('storage/products_image'),$new_name);
//             $imageName=$imageName.'storage/products_image/'.$new_name.",";
//         }
//         $imagedb=$imageName;
//         $products->images = [$imagedb];


//         // $products->images=$images;
//         $products->sizes = $request->sizes;
//         $products = $products->save();
//         return response()->json($products, 201);