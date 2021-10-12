<?php
 
namespace App\Http\Controllers;
use App\Models\branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $branches = Branch::all();

        return view('dashboard/branches.index', compact('branches'));
    }


    public function MainBranches()
    {
        //
        $branches = Branch::all();

        return view('main.branches', compact('branches'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('dashboard/branches.create');

    
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
            'address_en' => 'required',
            'address_ar' => 'required',
            'lat' => 'required',
            'long' => 'required'
        ]);

        $branch = new Branch([
            'name' => $request->get('name[]'),
            'address' => $request->get('address[]'),
            'lat' => $request->get('lat'),
            'long' => $request->get('long')
        ]);

        $branch->name = ['en' => $request->get('name_en'), 'ar' => $request->get('name_ar')];

        $branch->address = ['en' => $request->get('address_en'), 'ar' => $request->get('address_ar')];

        $branch->save();


        return redirect()->route('branches.index')->with('success','branch created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $branch = Branch::find($id);
        $data = $branch->getTranslations();

        return view('dashboard/branches.show',compact('branch' , 'data'));
    }

    

    public function BranchShow($id)
    {
        //
        $branch = Branch::find($id);
        $data = $branch->getTranslations();

        return view('main/showBranch',compact('branch' , 'data'));
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

        $branch = Branch::find($id);
        $data = $branch->getTranslations();
         return view('dashboard/branches.edit',compact('branch' , 'data'));
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

        $branch = Branch::findOrFail($id);
        $branch->name =  $request->get('name[]');
        $branch->address =  $request->get('address[]');
        $branch->lat =  $request->get('lat');
        $branch->long =  $request->get('long');

        $branch->name = ['en' => $request->get('name_en'), 'ar' => $request->get('name_ar')];

        $branch->address = ['en' => $request->get('address_en'), 'ar' => $request->get('address_ar')];


        $branch->save();

        return redirect()->route('branches.index')->with('success','branch updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        //
        $branch->delete();

       return redirect()->route('branches.index')
                       ->with('success','branche deleted successfully');
    }
}
