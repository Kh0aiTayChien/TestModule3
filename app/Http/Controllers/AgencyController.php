<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{

    public function index()
    {
        $agencies = Agency::all();
        return view('list',compact('agencies'));
    }

    public function create()
    {
        return view('create');
    }


    public function store(CreateRequest $request)
    {
        $agency = new Agency();
        $agency-> id =$request->id;
        $agency-> name =$request->name;
        $agency-> phone =$request->phone;
        $agency-> email=$request->email;
        $agency-> address =$request->address;
        $agency-> manager_name =$request->manager_name;
        if( $request->status == "Hoạt Động")
        $agency-> status ="1";
        if( $request->status == "Không Hoạt Động")
            $agency-> status ="0";
        $agency->save();
        return redirect()->route('agency.index');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $agency = Agency::findOrFail($id);
        return view('update', compact('agency'));
    }

    public function update(UpdateRequest $request, $id){

        $agency = Agency::findOrFail($id);

        $agency->name = $request->name;
        $agency->phone = $request->phone;
        $agency->email = $request->email;
        $agency->address = $request->address;
        $agency->manager_name = $request->manager_name;
        $agency->status = $request->status;
        if( $request->status == "Hoạt Động")
            $agency-> status ="1";
        if( $request->status == "Không Hoạt Động")
            $agency-> status ="0";

        $agency->save();
        return redirect()->route('agency.index');
    }

    public function delete($id)
    {
        $agency =Agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('agency.index');

    }
    public function search(Request $request)
    {
        $agencySearch = $request->search;
        $agencies = Agency::where('name', 'LIKE', "%" . $agencySearch . "%")->get();
        return view('list', compact('agencies'));
    }
}
