<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student list') }}
        </h2>
    </x-slot>

    <div class="container">
        <a class="btn btn-info" href="{{route('group.create')}}">New group</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Leader</th>
                <th scope="col">Subject</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($groups as $group)
                <tr>
                    <th scope="row">{{$group->id}}</th>
                    <td>{{$group->name}}</td>
                    <td>{{$group->leader}}</td>
                    <td>{{ $group->subject }}</td>
                    <td>
                        <form method="post" action="{{route('group.destroy', $group)}}">
                            {{ csrf_field() }}
                            {{ method_field('post') }}
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $groups->links() }}
    </div>
</x-app-layout>
