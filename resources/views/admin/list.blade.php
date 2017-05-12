@extends('admin.main')

@section('title', trans('List'))

@section('content')

    <body style='background-color:lightseagreen'>

    <table class="table">
        <thead>
        <tr>
            @foreach($list[0] as $key => $value)
                <th>{{$key}}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($list as $key => $row)
            <tr>
                @foreach($row as  $item)
                    <th>{{$item}}</th>

                @endforeach
                <th>
                    <div>
                        <a href="{{ route( $delete,$row['id']) }}" class="btn btn-primary">view</a>
                        <a href="{{ route( $edit,$row['id']) }}" class="btn btn-default">edit</a>
                        <button onclick="deleteItem('{{route($delete,$row['id'])}}')"class="btn btn-danger">delete</button>
                    </div>
                </th>

            </tr>


        @endforeach
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
                                 // <---update this
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