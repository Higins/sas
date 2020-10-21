<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div>
            <div class="mx-auto pull-right">
                <div class="">
                    <form action="{{ route('dashboard') }}" method="GET" role="search">

                        <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit">
                               Search
                            </button>
                        </span>
                            <div class="form-group">
                                <select class="selectpicker" multiple data-live-search="true" name="groups[]">
                                    @foreach($groups as $group)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" class="form-control mr-2" name="name" placeholder="Search by name" id="name">
                        </div>
                    </form>
                </div>
            </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Sex</th>
                <th scope="col">Place and Date</th>
                <th scope="col">Groups</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->sex}}</td>
                    <td>{{$student->getPlaceAndDateAttribute() }}</td>
                    <td>@foreach($student->groups as $group) {{$group->name . ', '}} @endforeach<td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $students->links() }}
    </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('select').selectpicker();
            });
        </script>
</x-app-layout>
