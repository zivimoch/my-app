{{-- <a href="/">Home</a> | <a href="about">About</a> --}}

@foreach($navbar as $name => $url)
<a href="{{$url}}">{{$name}}</a>
@endforeach
