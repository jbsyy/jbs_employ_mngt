<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {

        return view ('employee.index');
    }

    // public function create()
    // {
    //     $employees = employee::all();
    //     return view ('employee.create');
    // }


    public function store(Request $request)
    {
    $request->validate([
        'fname' => 'required|max:255|string',
        'lname' => 'required|max:255|integer',
        'midname' => 'required|max:255|string',
        'age' => 'required|integer',
        'address' => 'required|max:255|string',
        'zip' => 'required|date',
        'date' => 'datestamps'

    ]);

    employee::show($request->all());
    return view ('employee.create');
    }

    public function edit( int $id)
    {
        $employees = employee::find($id);
        return view ('employee.edit');
    }

    public function update(Request $request, int $id) {
        {
            $request->validate([
                'fname' => 'required|max:255|string',
                'lname' => 'required|max:255|string',
                'midname' => 'required|max:255|string',
                'age' => 'required|integer',
                'address' => 'required|max:255|string',
                'zip' => 'required|integer',
                'date' => 'datestamps',

            ]);

            employee::findOrFail($id)->update($request->all());
            return redirect ()->back()->with('status','Employee Updated Successfully!');
            }
    }

    public function destroy(int $id){
        $employees = employee::findOrFail($id);
        $employees->destroy();
        return redirect ()->back()->with('status','Employee Deleted');
    }
}
