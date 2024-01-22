@extends('layouts.app')

@section('content')
<h1>Film</h1>
<ul>
@foreach ($movies as $film)
    <li>
        <h3>{{$film->title}}</h3>
    </li>
@endforeach
</ul>
@endsection