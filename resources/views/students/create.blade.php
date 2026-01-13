@extends('components.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <x-card>
            <h4 class="fw-bold mb-4 text-success">Register New Student</h4>
            <form>
                <div class="mb-3">
                    <label class="form-label fw-bold">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter name">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Email Address</label>
                    <input type="email" class="form-control" placeholder="email@example.com">
                </div>
                <div class="row mb-4">
                    <div class="col-8">
                        <label class="form-label fw-bold">Course</label>
                        <input type="text" class="form-control" placeholder="e.g. BSCS">
                    </div>
                    <div class="col-4">
                        <label class="form-label fw-bold">Year</label>
                        <input type="number" class="form-control" placeholder="1-4">
                    </div>
                </div>
                <button type="submit" class="btn btn-success w-100 fw-bold">Register Student</button>
            </form>
        </x-card>
    </div>
</div>
@endsection