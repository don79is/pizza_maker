@extends('admin.main')

@section('title', trans('Single view'))

@section('content')
    <body style='background-color:lightseagreen'>
    <table class="table">
        <thead>
        <tr>
            @foreach($list as $key => $value)
                <th>{{$key}}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($list as $key => $record)
                <th>{{$record}}</th>
            @endforeach
            <th>
                <div>
                    <button href="{{route($delete,$record['id'])}}">view</button>
                    <button href="{{route($edit,$record['id'])}} ">edit</button>
                    <button onclick="deleteItem('{{route($delete,$record['id'])}}')">delete</button>
                </div>
            </th>
        </tr>
        </tbody>
    </table>




@endsection
@section('html_script')
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteItem(route) {

            $.ajax({
                url: route,
                type: 'DELETE',
                dataType: 'jason',                // <---update this
                success: function () {
                    alert('DELETE');
                },
                error: function () {
                    alert('ERROR');
                }
            });
        }
    </script>
@endsection