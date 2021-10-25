<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Spatie\Translatable\HasTranslations;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('dashboard/products.index', compact('products'));

    }
    
    public function MainProducts()
    {
        //
        $products = Product::all();

        return view('main.products', compact('products'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        // dd($categories);
       return view('dashboard/products.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // $request->validate([
        //     'name_en' => 'required',
        //     'name_ar' => 'required',
        //     'price' => 'required',
        // ]);
        // dd($request);
        $product = new Product([
            'name' => $request->get('name[]'),
            'price' => $request->get('price'),
            'active' => $request->get('active')  ? $request->get('active') : 0,
            'image' => $request->get('image'),
            'category_id' => $request->get('category_id')
        ]);

        // dd($request->file('image'));


        $product->name = ['en' => $request->get('name_en'), 'ar' => $request->get('name_ar')];
  
        if ($image = $request->file('image')) {
            
            $destinationPath = 'db-assets/img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // dd($profileImage);
            $image->move($destinationPath, $profileImage);
            $product['image'] = "$profileImage";
        }

        $product->save();



        return redirect()->route('products.index')->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
        $category = Category::find($product->category_id);
        // dd($category);
        $data = $product->getTranslations();
        // dd($data);
        return view('dashboard/products.show',compact('product' , 'data', 'category'));
    }

    public function ProductShow(product $product)
    {
        //
        $category = Category::find($product->category_id);
        // dd($category);
        $data = $product->getTranslations();
        // dd($data);
        return view('main.showProduct',compact('product' , 'data', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        // dd($product);
       $data = $product->getTranslations();
       $categories = Category::all();
         return view('dashboard/products.edit',compact('product' , 'data' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::findOrFail($id);
        $product->name =  $request->get('name[]');
        $product->image = $request->get('image');
        $product->price = $request->get('price');
        $product->active = $request->get('active')  ? $request->get('active') : 0;
        $product->category_id = $request->get('category_id');

        $product->name = ['en' => $request->get('name_en'), 'ar' => $request->get('name_ar')];


        $product->save();

        return redirect()->route('products.index')->with('success','product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('products.index')
                       ->with('success','post deleted successfully');
    }
}
