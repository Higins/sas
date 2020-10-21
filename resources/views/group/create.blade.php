<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New group') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="post" action="{{route('group.store')}}">
                    {{ method_field('post') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Leader</label>
                        <select class="form-control select2" style="width: 100%;" name="leader">
                            <option value="leader" selected>Select One</option>

                            @foreach($students as $student)
                                <option value="{{$student->id}}">{{$student->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" type="text" placeholder="Subject"
                               value="{{old('subject')}}">
                    </div>
                    <div class="form-group">
                        <button>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
