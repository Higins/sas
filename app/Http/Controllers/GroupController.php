<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return view('group.index', ['groups' => Group::paginate(10)]);
    }
    public function store(StoreGroupRequest $request)
    {
        $validate = $request->validated();
        Group::create($validate);
        return redirect(route('dashboard'))->with('success','successfully created student ');
    }
    public function update(UpdateGroupRequest $request, Group $group)
    {
        $validate = $request->validated();
        $group->update($validate);
        return redirect(route('dashboard'))->with('success','successfully update student ');
    }

    public function create()
    {
        return view('group.create',['students' => Student::all()]);
    }

    public function edit(Group $group)
    {
        return view('group.update',['group' => $group,'students' => Student::all()]);
    }

    public function destroy(Group $group)
    {
        if ($group->delete()) {
            return redirect(route('dashboard'));
        }
    }
}
