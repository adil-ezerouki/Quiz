@extends('layouts.app')

@section('title','dashboard')

@section('content')
<div>
    welcome here in dashboard
</div>

<a href="{{route('logout')}}">logout</a>

<x-alert-error>
    hhhhhh
</x-alert-error>

@endsection
