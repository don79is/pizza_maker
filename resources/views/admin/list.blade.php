@extends('main')

@section('title', trans('Admin_list'))

@section('admin')

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
                @foreach($row as $key => $item)
                    <th>{{$item}}</th>

                @endforeach
                <th>
                    <div>
                        <button type="button" class="btn btn-info">view</button>
                        <button type="button" class="btn btn-warning">edit</button>
                        <button onclick="deleteItem('{{route($route,$row['id'])}}')">delete</button>
                    </div>
                </th>

            </tr>


        @endforeach
        </tbody>

    </table>






@endsection
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