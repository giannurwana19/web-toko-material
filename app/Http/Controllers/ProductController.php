<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['products'] = Product::orderBy('created_at', 'desc')->paginate(6);

        return view('products.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['categories'] = Category::orderBy('name', 'asc')->get();
        $this->data['brands'] = Brand::orderBy('name', 'asc')->get();
        $this->data['product'] = new Product();

        return view('products.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->name);

        $image = $request->file('image');
        $imageName = $data['slug'] . '-' . time() . '.' . $image->getClientOriginalExtension();

        $data['image'] = $imageName;

        // store image
        $image->storeAs('images', $imageName);

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $this->data['product'] = $product;
        $this->data['categories'] = Category::orderBy('name', 'asc')->get();
        $this->data['brands'] = Brand::orderBy('name', 'asc')->get();

        return view('products.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();

        $data['slug'] = $product->slug;

        $image = $request->file('image');

        if ($image) {
            Storage::delete('images/' . $product->image);

            $imageName = $data['slug'] . '-' . time() . '.' . $image->getClientOriginalExtension();
            $data['image'] = $imageName;

            // store image
            $image->storeAs('images', $imageName);
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::delete('images/' . $product->image);

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
