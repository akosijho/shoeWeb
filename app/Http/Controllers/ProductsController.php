<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    // display data
    function index()
    {
        return response()->json(Product::all(), 200);
    }
    





    // search data
    function searchByid($id)
    {
        $products = Product::find($id);
        if(is_null($products)) {
            return response()->json(['message' => 'Products Not Found', 404]);
        }
        return response()->json($products::find($id), 200);
    }





    // insert data
    function save(Request $request)
    {

        $validated = $request->validate([
         'images' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        if($validated->fails())
        {
             return response()->json([
                        'status' => false,
                        'message' => 'Validation error',
                        'errors' => $validated->errors()
                    ], 401);
        }
        


        
        $products = new Product;
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;


        $images = $request->file('images');
        $imageName='';
        foreach($images as $image)
        {
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('storage/products_image'),$new_name);
            $imageName=$imageName.'storage/products_image/'.$new_name.",";
        }
        $imagedb=$imageName;
        $products->images = $imagedb;

        $products->sizes = $request->sizes;
        $products = $products->save();
        return response($products, 201);
    

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


    
}
