<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStundetRequest;
use App\Http\Requests\UpdateStundetRequest;
use App\Models\Group;
use App\Models\GroupStudent;
use App\Models\Student;
use App\Models\StudentGroup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function index()
    {

        return view('student.index', [
            'students' => Student::paginate(10)
        ]);
    }
    public function store(StoreStundetRequest $request)
    {
        $request->date_of_birth = Carbon::parse($request->date_of_birth)->format('Y-m-d');
        $validate = $request->validated();
        Student::create($validate);
        return redirect(route('dashboard'))->with('success','successfully created student ');
    }
    public function update(UpdateStundetRequest $request, Student $student)
    {
        $validate = $request->validated();
        $student->update($validate);
        return redirect(route('dashboard'))->with('success','successfully update student ');
    }

    public function create()
    {
        return view('student.create');
    }

    public function edit(Student $student)
    {
        return view('student.update',['student' => $student]);
    }

    public function join(Request $request)
    {
        $studentGroup = new StudentGroup();
        $studentGroup->student_id = $request->student_id;
        $studentGroup->group_id = $request->group_id;
        if ($studentGroup->saveOrFail()) {
            return redirect(route('dashboard'))->with('success','successfully join student for group ');
        }
    }

    public function remove(Request $request)
    {
        $studentGroup = GroupStudent::where([
            'student_id' => $request->student_id,
            'group_id' => $request->group_id
        ]);
        if ($studentGroup->delete()) {
            return redirect(route('dashboard'))->with('success','successfully remove student for group ');
        }
    }

    public function joinFrom()
    {
        return view('join',['students' => Student::all(),'groups' => Group::all()]);
    }
    public function destroy(Student $student)
    {
        if ($student->delete()) {
            return redirect(route('dashboard'));
        }
    }

}
