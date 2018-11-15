<div class="flex-center position-ref full-height">
    @auth
        <a href="{{ url('/home') }}">Home</a>
    @else
        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>
            @if(Route::has('register'))
                <a href="{{ url('/') }}">Home</a>
            @endif
            <div class="links">
                {!! Form::open(['url' => '/register/create', 'method' => 'POST']) !!}
                {!! Form::label('email', 'E-Mail Address') !!}
                {!! Form::email('email', old('email'), $attributes = ["required"=>""]) !!}
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', old('name'), $attributes = []) !!}
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', $value = null, $attribute = ["required"=>""]) !!}
                {!! Form::label('password_confirmation', 'Confirm Password') !!}
                {!! Form::password('password_confirmation', $value = null, $attribute = ["required"=>""]) !!}
                {!! Form::submit('Click Me!') !!}
                @if ($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
                @if ($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
                @if ($errors->has('password'))
                    <div class="error">{{ $errors->first('password') }}</div>
                @endif
                {!! Form::close() !!}
            </div>
        </div>
    @endauth
</div>