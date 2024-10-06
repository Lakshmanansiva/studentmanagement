<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Validation\Rules\Unique;

class Studentmanagecontroller extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
   public function indexx(){
    $students = student::orderBy('id','desc')->paginate(5);
    return view('index',compact('students'));
   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students,email|email',
            'address' => 'required',
            'phone' => 'required|numeric|Unique:students,phone',
            'department' => 'required',
            'joining_date' => 'required'
        ],[
            'phone.unique' => 'phone number already exist'
        ]);
        $data = $request->except('_token');
        student::create($data);
        return redirect()->route('student.index')->withMessage('Student has been created successfully!');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view('show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view('edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:students,email,'.$student->id.'|email',
            'address' => 'required',
            'phone' => 'required|numeric|Unique:students,phone,'.$student->id,
            'department' => 'required',
            'joining_date' => 'required'
        ],[
            'phone.unique' => 'phone number already exist'
        ]);
        $data = $request->all();
        $student->update($data);
        return redirect()->route('student.edit',$student->id)->withMsg('Student details updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->withMessage('Student deleted successfully!');
    }
}
  















































































































































































































































































































































































































































































































