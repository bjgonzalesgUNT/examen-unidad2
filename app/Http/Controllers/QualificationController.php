<?php

namespace App\Http\Controllers;

use App\Http\Requests\QualificationRequest;
use App\Models\Course;
use App\Models\Courses;
use App\Models\Qualification;
use App\Models\Student;
use App\Models\StudentCourseQualifications;
use App\Models\StudentCourses;
use Illuminate\Http\Request;

class QualificationController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('qualifications.index', compact('students'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('qualifications.create', compact('students', 'courses'));
    }

    public function store(QualificationRequest $request)
    {
        StudentCourses::create([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'unit_1' => $request->unit_1,
            'unit_2' => $request->unit_2
        ]);
        
        return redirect()->route('qualifications.index');
    }

    public function show($id)
    {
        $student = Student::find($id);
        $studentCourses = StudentCourses::where('student_id', $id)->get();
        return view('qualifications.show', compact('student', 'studentCourses'));
    }
}
