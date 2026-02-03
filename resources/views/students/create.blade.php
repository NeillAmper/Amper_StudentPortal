@extends('components.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="text-center mb-4">
            <h3 class="fw-bold">New Registration</h3>
            <p class="text-muted">Enter student details to add them to the database.</p>
        </div>
        <div class="card p-5">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted text-uppercase">Full Name</label>
                    <input type="text" name="name" class="form-control form-control-lg border-0 bg-light" placeholder="e.g. Maria Clara" required>
                </div>
                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted text-uppercase">Email Address</label>
                    <input type="email" name="email" class="form-control form-control-lg border-0 bg-light" placeholder="email@uic.edu.ph" required>
                </div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label small fw-bold text-muted text-uppercase">Course</label>
                        <select name="course" class="form-select form-control-lg border-0 bg-light" required>
                            <option value="">Select Course</option>
                            <option>BS Information Technology</option>
                            <option>BS Nursing</option>
                            <option>BS Pharmacy</option>
                            <option>BS Psychology</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label class="form-label small fw-bold text-muted text-uppercase">Year</label>
                        <input type="number" name="year" min="1" max="5" class="form-control form-control-lg border-0 bg-light" placeholder="1-5" required>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-uic btn-lg fw-bold">Register Student</button>
                    <a href="{{ route('students.index') }}" class="btn btn-link text-muted text-decoration-none small">Go Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 