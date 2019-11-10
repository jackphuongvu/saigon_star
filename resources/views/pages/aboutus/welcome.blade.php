@extends('layouts.master')


@section('title', 'Page Title')

<div class="alert alert-danger">
    <div class="alert-title">{{ $title }}</div>

    {{ $slot }}
</div>

@section('content')
    <p>This is my body content.</p>
@endsection
