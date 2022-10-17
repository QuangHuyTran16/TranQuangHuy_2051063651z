<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        return view('student.list', ['students' => $students]);
    }
    public function create()
    {
        return view('student.add');
    }
    public function store(Request $request)
    {
        $students = Student::create([
            'fullname' => $request->txtFulname,
            'birthday' => $request->txtBirthday,
            'address' => $request->txtAdress
        ]);
        return redirect('/students');
    }
    public function get_student_by_id($id)
    {
        $students = Student::find($id);
        return view('student.edit', ['students' => $students]);
    }
    public function update(Request $request, $id)
    {
        Student::where('id', $id)->update([
            'fullname' => $request->txtFulname,
            'birthday' => $request->txtBirthday,
            'address' => $request->txtAdress
        ]);
        return redirect('students/');
    }
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('students/');
    }
}
