<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Login') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="post" action="{{route('login')}}">
                    {{method_field('post')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <input class="form-control" name="email" type="text" placeholder="E-mail" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="password" type="password" placeholder="Password"
                               value="{{old('password')}}">
                    </div>
                    <div class="form-group">
                        <button>Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
