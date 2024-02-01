<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\department;

class departmentController extends Controller
{
  function list()
  {
    return department::all();

  }

function add(Request $req )
{
    $department=new Department;
    $department->name=$req->Name;
    $department->location=$req->Location;
    $result=$department->save();
    if($result)
    {
        return["Result"=>"Data has been saved"];

    }
    else{
        return["Result"=>"Data failed"];
    }
    


}
function updated(Request $req)
    {
        $department=Department::find($req->id);
        $department->name=$req->Name;
        $department->location=$req->Location;
        $result=$department->save();
        if($result)
        {
            return["Result"=>"Data has been updated"];
    
        }
        else{
            return["Result"=>"Updated failed"];
        }

        
    }
    public function index()
    {
        //
        // return department::all();
        $data['dep']=department::all();
        return view('department.index',$data);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dep=new department();
        $dep->Name=$request->input('Name');
        $dep->Location=$request->input('Location');
        $dep->save();
        return redirect('/department');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $dep=department::find($id);

        return view('department.show')->with('dep',$dep);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $dep=department::find($id);
        // return $cus;
        return view('department.Edit')->with('dep',$dep);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $dep=department::find($id);
        $dep->Name=$request->input('Name');
        $dep->Location=$request->input('Location');
        // $dep->Location=$request->input('Contact');
        $dep->save();
        return redirect('/department');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $dep=department::find($id);
        $dep->delete();
        return redirect('/department');
    }
}
