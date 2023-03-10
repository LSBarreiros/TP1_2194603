<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\City;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

                // $students = Student::select('id','name','email','phone','city' )->get();
        //$students = Student::all();
        $students = Student::with('city')->orderby('name')->paginate(25);

        //return $students;

        return view('students.index', ['students' => $students]);
        //The compact() function creates an array from variables and their values:
                // return view('students.index')->with([
                //     'students' => $students]);  ===
                // return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('students.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'city_id' => 'required|exists:cities,id,name,city_id'
        // ]);
    
        $student = Student::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'city_id' => $request->input('city_id'),
            'id' => 1
        ]);
    
        return redirect()->route('students.index', $student->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Student $student) 
    {
        $student->load('city');
        $students = Student::select('id','name','email','phone','city.name')->paginate(20);
        return redirect(route('students.index', compact('student')));
        // return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function edit(Student $student)
    {
        $cities = City::all();
        // $student =  Student::whereId($id)->first();
        // if(!$student){
        //     return back()->with('error', 'Student Not Found');
        // }

        return view('students.edit', compact('student', 'cities'));
        // return view('students.edit')->with([
        //     'student' => $student
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student) {
   	//  $request->validate([
    //    	 	'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //     	'city_id' => 'required|exists:cities,id',
   	//  ]);

    	$student->update([
        		'name' => $request->input('name'),
                'email' => $request->input('email'),
        		'city_id' => $request->input('city_id'),
    	]);

   	 return redirect(route('students.index', $student->id))->withSuccess('Information successfully updated');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function destroy(Student $student)
    {
        $student->delete();
        return redirect(route('students.index'));
    }

    // public function destroy($id)
    // {
    //     //
    // }


    public function home(){
      
        return redirect(route('welcome'));
    }

    // public function studentList(){
    //     $students = Student::select('name','email','city_id')->paginate(5);
    //     redirect(route('students.index', ['students' => $student]));
    // }

}
