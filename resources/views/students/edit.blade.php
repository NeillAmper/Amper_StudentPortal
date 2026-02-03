@extends('components.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-dark">Update Student Profile</h3>
            <p class="text-muted">Modify the details for <strong>{{ $student->name }}</strong></p>
        </div>
        
        <div class="card p-5 shadow-sm">
            {{-- 1. Action points to the update route, Method must be POST --}}
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                {{-- 2. Security Token --}}
                @csrf
                {{-- 3. Method Spoofing: Browsers don't support PUT, so Laravel handles it here --}}
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted text-uppercase">Full Name</label>
                    <input type="text" name="name" class="form-control form-control-lg border-0 bg-light" value="{{ $student->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted text-uppercase">Email Address</label>
                    <input type="email" name="email" class="form-control form-control-lg border-0 bg-light" value="{{ $student->email }}" required>
                </div>

                <div class="row">
                    <div class="col-md-8 mb-4">
                        <label class="form-label small fw-bold text-muted text-uppercase">Course</label>
                        <select name="course" class="form-select form-control-lg border-0 bg-light" required>
                            <option value="BS Information Technology" {{ $student->course == 'BS Information Technology' ? 'selected' : '' }}>BS Information Technology</option>
                            <option value="BS Nursing" {{ $student->course == 'BS Nursing' ? 'selected' : '' }}>BS Nursing</option>
                            <option value="BS Pharmacy" {{ $student->course == 'BS Pharmacy' ? 'selected' : '' }}>BS Pharmacy</option>
                            <option value="BS Psychology" {{ $student->course == 'BS Psychology' ? 'selected' : '' }}>BS Psychology</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label class="form-label small fw-bold text-muted text-uppercase">Year</label>
                        <input type="number" name="year" min="1" max="5" class="form-control form-control-lg border-0 bg-light" value="{{ $student->year }}" required>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-uic btn-lg fw-bold">Update Records</button>
                    <a href="{{ route('students.index') }}" class="btn btn-link text-muted text-decoration-none small">Cancel and Go Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection