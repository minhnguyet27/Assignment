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
    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('admin.Product.edit-product');
    }
    public function updateProduct(Request $request)
    {
    }
    public function deleteProduct(Request $request)
    {
        $product = Product::where('product_id', $request->product_id)->first();
        if ($product->image_url!= null) {           
            // File::delete(public_path($product->image));  // delete image        
            File::delete(public_path($product->image_url));
        }
        $product->delete();      
        return redirect()->route('admin.products.listProduct')
            ->with(['message' => 'Xóa thành công']);

    }
}