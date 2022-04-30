@extends('management.master')

@section('title')
    Dashboard
@endsection

@section('content')
<h1 class="text-2xl font-semibold text-gray-900">Bonjour, {{auth()->user()->getFullname()}} 👋</h1>
@endsection