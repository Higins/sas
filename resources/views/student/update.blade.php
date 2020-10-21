<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Student') }}
        </h2>
    </x-slot>

    <form method="post" action="{{route('student.update')}}">
        {{method_field('post')}}
        {{csrf_field()}}
        <div class="form-group">
            <input class="form-control" name="name" type="text" placeholder="Name"
                   value="{{old('name', $student->name)}}">
        </div>
        <div class="form-group">
            <input class="form-control" name="email" type="text" placeholder="Email"
                   value="{{old('email', $student->email)}}">
        </div>
        <div class="form-group">
            <input class="form-control" name="date_of_birth" type="text" placeholder="1990-01-01"
                   value="{{old('date_of_birth', $student->date_of_birth)}}">
        </div>
        <div class="form-group">
            <input class="form-control" name="place_of_birth" type="text" placeholder="place of birth"
                   value="{{old('place_of_birth', $student->place_of_birth)}}">
        </div>
        <div class="form-group">
            <select class="form-control" name="sex">
                <option value="male" @if (old('sex') == "male") {{ 'selected' }} @endif>male</option>
                <option value="famale" @if (old('sex') == "famale") {{ 'selected' }} @endif>famale</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
</x-app-layout>
