<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addStudent()
    {
        // $student = new student();
        // $student->name = 'anhnk';
        // $student->email = 'anhnk012@gmail.com';
        // $student->phone = '00386';
        // $student->save();
        DB::insert('insert into students ( fullname, birthday, address) values (?, ?, ?)', ['nguyenvana', '2022-10-15', "Ha Noi"]);
        DB::insert('insert into students ( fullname, birthday, address) values (?, ?, ?)', ['nguyenvanb', '2022-10-16', "Ha Noi"]);

    }
    //
    public function get_all_student(){
        $students= Student::all(); // nhận tất cả dữ liệu từ bảng Student
        return view('student_manage', ['students' => $students]);
    }
    public function get_student_by_id($id){

       
        
        $single_student = DB::table('students')->where('id', $id)->get();
        return view('student.edit', compact('single_student'));
    }

    public function edit($id) {
        
        // Tìm đến đối tượng muốn update
        $students = Student::find($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('student_edit', ['students' => $students]);
    }

    public function update(Request $request, $id) {
        $student = Student::find($id);
        $request->validate([
            'fullname'=>'required',
            'address'=>'required',
            'birthday'=>'required'
        ]); 

        // dd($data);
        $student -> fullname = $request->fullname;
        $student -> birthday = $request->birthday;
        $student -> address = $request->address;
        $student->update();
        // Update user
        return redirect('student/getall');
        
    }
}
