<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="post" action="{{route('student.store')}}">
                    {{method_field('post')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" type="text" placeholder="Email"
                               value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="date_of_birth" type="text" placeholder="1990-01-01"
                               value="{{old('date_of_birth')}}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="place_of_birth" type="text" placeholder="place of birth"
                               value="{{old('place_of_birth')}}">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="sex">
                            <option value="male">male</option>
                            <option value="famale">famale</option>
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
