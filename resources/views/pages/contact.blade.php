{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page_name}}</title>
</head>
<body>
    <h1>{!!$page_name!!}</h1>
    <h1>{{$page_name}}</h1>
    <p>{{$page_desription}}</p>
</body>
</html>  --}}


{{--  @extends('layout.master')

@section('title','Contact Us')

@section('content')
    <div class="container">
        This Is Text from Contact Me Page
    </div>
@endsection  --}}


@extends('layout.master')
@section('title','Contact Us')
@section('content')
    <div class="container">
        <h1>{!!$page_name!!}</h1>
        <p>{{$page_desription}}</p>
    </div>
@endsection

@section('sidebar')
    <div class="container">
        @parent
    </div>
    This Sidebar from Contact Me Page
@endsection
