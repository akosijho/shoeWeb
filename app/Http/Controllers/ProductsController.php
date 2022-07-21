<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;

class ProductsController extends Controller
{
    // display data
    function index()
    {
        return response()->json(Products::all(), 200);
    }






    // search data
    function searchByid($id)
    {
        $products = Products::find($id);
        if(is_null($products)) {
            return response()->json(['message' => 'Products Not Found', 404]);
        }
        return response()->json($products::find($id), 200);
    }





    // insert data
    function save(Request $request)
    {
        
        $products = new Products;
        $products->name = $request->name;
        $products->description = $request->description;
        $products->price = $request->price;
         if($request->hasfile('file'))
        {
            $file = $request->file('file');
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("storage/products_image"),$imageName);
            $products->images = 'storage/products_image/'.$imageName;
        }
        $products->sizes = $request->sizes;

        
        $products = $products->save();
        return response($products, 201);

    }






    // update data
     function update(Request $request, $id)
    {

        $products = Products::find($id);

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

         $product = Products::find($id);
        if(is_null($product)) 
        {
            return response()->json(['message' => 'Product Not Found', 404]);
        }

        $product = $product->delete();
        return response(null, 204);
    }

}
