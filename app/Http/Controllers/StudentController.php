<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.add_student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $val = $request->validate([
           'name'=>'required|string|min:5',
           'surname'=>'required|string|min:5'
//           'image'=>'required|image'
        ]);



        $student = new Student;
        $student->name = $request->name;
        $student->surname = $request->surname;
        if ($request->hasFile('image')){

           $image = $request->file('image')->store("img/");
          $student->image = $image;
        }

        $student->save();

             return view("index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);


            $name = $student['name'];
            $surname= $student['surname'];
            $id = $student['id'];


        return view('form.edit_student',['name'=>$name,'surname'=>$surname,'id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update =  Student::where('id', $id)
            ->update(['name' => $request->name,'surname'=>$request->surname]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {

    }
}
