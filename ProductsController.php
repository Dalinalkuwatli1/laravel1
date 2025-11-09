<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\categarey;
use App\Models\Product;
use App\Models\subcategarey;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return view('dashboard.product.index', compact('products'));
    }

    public function create()
    {
        $categories = categarey::all();
        $subcategories = subcategarey::all();
        $brands = brand::all();
        return view('dashboard.product.create', compact('categories', 'subcategories', 'brands'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'string|required',
            'slug' => 'string|required|unique:products',
            'description' => 'required|string',
            'short_desc' => 'required|string',
            'related_product' => 'required|string',
            'price' => 'required|string',
            'image' => 'nullable',
            'compare_price' => 'nullable|numeric',
            'category_id' => 'required|exists:categareys,id',
            'subcategory_id' => 'nullable|exists:subcategareys,id',
            'brand_id' => 'nullable|exists:brands,id',
            'qty' => 'required|string',
            'track_qty' => 'required|string',
            'status' => 'nullable',
              'size' => 'nullable',

            'is_featured' => 'nullable|boolean',
            'showonhome' => 'nullable|boolean',
        ]);


        if ($request->hasFile('image')) {
            $validatedData['image'] = 'imgs/' . $request->file('image')->store('Products', 'imgs');
        }

        Product::create($validatedData);


        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = categarey::all();
        $subcategories = subcategarey::all();
        $brands = brand::all();
        return view('dashboard.product.edit', compact('product', 'categories', 'subcategories', 'brands'));
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'title' => 'string|required',
            'slug' => 'string|required|unique:products,slug,' . $id,
            'description' => 'nullable|string',
            'short_desc' => 'nullable|string',
            'related_product' => 'nullable|string',
            'price' => 'nullable|string',
            'size' => 'nullable',
            'compare_price' => 'nullable|numeric',
            'category_id' => 'nullable|exists:categareys,id',
            'subcategory_id' => 'nullable|exists:subcategareys,id',
            'brand_id' => 'nullable|exists:brands,id',
            'qty' => 'nullable|string',
            'image' => 'nullable',
            'track_qty' => 'nullable|string',
            'status' => 'nullable',
            'is_featured' => 'nullable|boolean',
            'showonhome' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = 'imgs/' . $request->file('image')->store('Products', 'imgs');
        }
        $product = Product::findOrFail($id);


        $product->update($validatedData);


        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}
