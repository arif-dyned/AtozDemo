<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>
        <a href="{{ url('#') }}">Home</a>
        @auth
            <a href="{{ url('/') }}">Home</a>
        @else
            <a href="{{ url('register') }}">Register</a>
        @endauth
    </div>
</div>