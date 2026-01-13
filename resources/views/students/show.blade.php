@extends('components.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <x-card>
            <h4 class="fw-bold mb-4 text-primary">Student Profile</h4>
            <div class="mb-3">
                <label class="text-muted small fw-bold text-uppercase">Name</label>
                <p class="fs-5">{{ $student['name'] }}</p>
            </div>
            <div class="mb-3">
                <label class="text-muted small fw-bold text-uppercase">Email</label>
                <p class="fs-5">{{ $student['email'] }}</p>
            </div>
            <div class="row">
                <div class="col-6">
                    <label class="text-muted small fw-bold text-uppercase">Course</label>
                    <p class="fs-5">{{ $student['course'] }}</p>
                </div>
                <div class="col-6">
                    <label class="text-muted small fw-bold text-uppercase">Year</label>
                    <p class="fs-5">{{ $student['year'] }}</p>
                </div>
            </div>
            <hr>
            <a href="{{ route('students.index') }}" class="btn btn-secondary w-100">Return to Directory</a>
        </x-card>
    </div>
</div>
@endsection