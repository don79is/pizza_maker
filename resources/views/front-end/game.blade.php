@extends('front-end.core')

@section('game')


    @if (Auth::check())
        {!! Form::open( array(
                'route' => 'app.front-end.game.index',
                'class' => 'form',
                'novalidate' => 'novalidate',
                'files' => true)) !!}

        <div class="form-group">
            {!! Form::label('Product image') !!}
            {!! Form::file('name', null) !!}
        </div>
        <div class="form-group">
           {!! Form::submit('Create Product!') !!}
        </div>
    @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>


    @endif
@endsection