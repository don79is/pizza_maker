@extends('admin.main')

@section('title', trans('Single view'))

@section('content')
    <body style='background-color:yellowgreen'>

    <table class="table">
        <thead>
        <tr>
            <th class="col-md-2">Value</th>
            <th class="col-md-2">Info</th>
        </tr>
        </thead>
        <tbody>

        @foreach($list as $key => $value)
            <tr>
                <td class="col-md-2">{{$key}}</td>
                <td class="col-md-2">{{$value}}</td>
            </tr>
        @endforeach

        </tbody>
        <th>
            <div>
                <a href="{{ route( $delete,$value['id']) }}" class="btn btn-primary">List</a>
                <a href="{{ route( $edit,$value['id']) }}" class="btn btn-default">edit</a>
                <button onclick="deleteItem('{{route($delete,$value['id'])}}')" class="btn btn-danger">delete</button>
            </div>
        </th>

        </tr>
    </table>






@endsection
