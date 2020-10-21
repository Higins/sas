<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student list') }}
        </h2>
    </x-slot>
    <div class="container">
        <a class="btn btn-info" href="{{route('student.create')}}">New student</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Sex</th>
                <th scope="col">Place and date of birth</th>
                <th scope="col">Groups</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->sex}}</td>
                    <td>{{ $student->placeAndDate }}</td>
                    <td>@foreach($student->groups as $group) {{$group->name . ', '}} @endforeach<td>
                    <td>
                        <form method="post" action="{{route('student.destroy', $student)}}">
                            {{ csrf_field() }}
                            {{ method_field('post') }}
                           <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $students->links() }}
    </div>
</x-app-layout>
