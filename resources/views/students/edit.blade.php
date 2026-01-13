@extends('components.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <x-card>
            <h4 class="fw-bold mb-4 text-warning">Update Records</h4>
            <form>
                <div class="mb-3">
                    <label class="form-label fw-bold">Full Name</label>
                    <input type="text" class="form-control" value="{{ $student['name'] }}">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" value="{{ $student['email'] }}">
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold">Course</label>
                    <input type="text" class="form-control" value="{{ $student['course'] }}">
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-warning w-100 fw-bold">Save Changes</button>
                    <a href="{{ route('students.index') }}" class="btn btn-light border w-100">Cancel</a>
                </div>
            </form>
        </x-card>
    </div>
</div>
@endsection