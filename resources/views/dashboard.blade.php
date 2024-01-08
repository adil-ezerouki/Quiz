@extends('layouts.app')

@section('title', 'dashboard')

@section('content')
    <div>
        welcome here in dashboard
    </div>

    @if (session('welcoming_message'))
        <x-alert-error>

            {{ session('welcoming_message') }}

        </x-alert-error>
    @endif

@endsection
