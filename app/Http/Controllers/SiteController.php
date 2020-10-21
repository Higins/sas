<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function dashboard(Request $request)
    {
        $students = Student::where([
            ['name','!=',null],
            [function($query) use ($request) {
                if ($name = $request->name) {
                    $query->orWhere('name','like','%'.$name.'%')->get();
                }
            }]
        ])->whereHas('groups', function($q) use ($request) {
            if ($groups_id = $request->groups) {
                if (is_array($groups_id)) {
                    $q->whereIn('group_id',$groups_id);
                } else {
                    $q->where('group_id',$groups_id);
                }
            }
        })->paginate(10);

        return view('dashboard', [
            'students' => $students,
            'groups' => Group::all()
        ]);
    }
}
