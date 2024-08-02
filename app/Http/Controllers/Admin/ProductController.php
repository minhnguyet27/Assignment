<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function listProduct()
    {
        $listProducts = Product::paginate(7);
        return view('admin.Product.list-product')->with([
            'listProducts' => $listProducts,
        ]);
    }
    public function addProduct()
    {
        return view('admin.Product.add-product');
    }
    public function postProduct(Request $request)
    {
        $linkImage = NULL;
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imgName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('imageProduct/'), $imgName);
            $linkImage = 'imageProduct/' . $imgName;
        }
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image_url' => $linkImage,
            'quantity' => $request->quantity,
            'view' => 0,
        ];

        Product::create($data);
        return redirect()->route('admin.products.listProduct')
            ->with(['message' => 'Thêm mới thành công']);
    }
    //
    public function editProduct(string $product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('admin.Product.edit-product',compact('product'));
    }
    public function updateProduct(Request $request, string $product_id)
    {
        $product = Product::findOrFail($product_id);
        $linkImage = NULL;
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imgName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('imageProduct/'), $imgName);
            $linkImage = 'imageProduct/' .$imgName;
        }
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image_url' => $linkImage,
            'quantity' => $request->quantity,
            'view' => $request->view,
        ];
  
        $product->update($data);
        return redirect()->route('admin.products.listProduct')
        ->with('message', 'Product Updated Successfully');
        
    //     $product = Product::find($product_id);
    //     $product ->update($data);
    //     return redirect()->route("admin.products.listProduct")->with([
    //         'message' => 'Sửa thành công'
    //     ]);
        
    }
    public function deleteProduct($productid)
    {
        $product = Product::findOrFail($productid);        
        //  dd($product);  
        if ($product->image_url && File::exists(public_path('imageProduct/'. $product->image_url))) { //File::exists Tra ve true or false
            File::delete(public_path('imageProduct/'. $product->image_url));
        }
        $product->delete();      
        return redirect()->route('admin.products.listProduct')
            ->with(['message' => 'Xóa thành công']);
    }
    
}