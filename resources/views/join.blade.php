<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student remove and add groups') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h3>Add student for group</h3>
                    <form method="post" action="{{route('join.store')}}">
                        {{ method_field('post') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Student</label>
                            <select class="form-control select2" style="width: 100%;" name="student_id">
                                <option value="student_id" selected>Select One</option>

                                @foreach($students as $student)
                                    <option value="{{$student->id}}">{{$student->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Group</label>
                            <select class="form-control select2" style="width: 100%;" name="group_id">
                                <option value="group_id" selected>Select One</option>

                                @foreach($groups as $group)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <button>Save</button>
                        </div>
                    </form>
                    <h3>Remove student for group</h3>
                    <form method="post" action="{{route('join.remove')}}">
                        {{ method_field('post') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Student</label>
                            <select class="form-control select2" style="width: 100%;" name="student_id">
                                <option value="student_id" selected>Select One</option>

                                @foreach($students as $student)
                                    <option value="{{$student->id}}">{{$student->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Group</label>
                            <select class="form-control select2" style="width: 100%;" name="group_id">
                                <option value="group_id" selected>Select One</option>

                                @foreach($groups as $group)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <button>Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</x-app-layout>
