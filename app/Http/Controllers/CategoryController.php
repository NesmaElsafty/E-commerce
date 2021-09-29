<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Facades\DB;




class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        
            return view('dashboard/categories.index', compact('categories'));    
        
    }


    public function MainCategories()
    {
        //
        $categories = Category::all();
        
        return view('main.categories', compact('categories'));    
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('dashboard/categories.create');

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
        $request->validate([
            'name_en' => 'required',
            'name_ar' => 'required',
            // 'image' => 'required'
        ]);
        // dd($request);
        $category = new Category([
            'name' => $request->get('name[]'),
            'active' => $request->get('active')  ? $request->get('active') : 0,
            'image' => $request->get('image')
        ]);

        $category->name = ['en' => $request->get('name_en'), 'ar' => $request->get('name_ar')];


        // dd($request);
        $category->save();

        // Category::create($request->all());

        return redirect()->route('categories.index')->with('success','Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        $products = DB::table('products')->where('category_id', $category->id)->get();
        // dd($products);
        $data = $category->getTranslations();
        return view('dashboard/categories.show',compact('category' , 'data', 'products'));
    }

    public function CategoryShow(Category $category)
    {
        //
        // dd($category);
        $products = DB::table('products')->where('category_id', $category->id)->get();

        $data = $category->getTranslations();
        return view('main.showCategory',compact('category' , 'data', 'products'));
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

        $category = category::find($id);
        // dd($category);
       $data = $category->getTranslations();
         return view('dashboard/categories.edit',compact('category' , 'data'));
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
        
        $category = Category::findOrFail($id);
        $category->name =  $request->get('name[]');
        $category->image = $request->get('image');
        $category->active = $request->get('active');

        $category->name = ['en' => $request->get('name_en'), 'ar' => $request->get('name_ar')];


        $category->save();

        return redirect()->route('categories.index')->with('success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();

       return redirect()->route('categories.index')
                       ->with('success','categories deleted successfully');
    }
}
