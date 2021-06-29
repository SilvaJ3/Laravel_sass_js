@extends('layouts.index')

@section('content')
    @include("partials.header")

    @include("partials.welcome.helloCS")
    
    @include("partials.welcome.bonus")

    @include("partials.footer")
@endsection