@extends('components.layout')

@section('content')
<div class="text-center py-5">
    <h1 class="display-4 fw-bold">Student Administration</h1>
    <p class="lead text-muted">A modular Laravel portal using Blade components.</p>
    <div class="mt-4">
        <a href="{{ route('students.index') }}" class="btn btn-dark btn-lg px-5">Enter Portal</a>
    </div>
</div>
@endsection