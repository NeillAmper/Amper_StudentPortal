@extends('components.layout')

@section('content')
<div class="row mb-4 align-items-center">
    <div class="col">
        <h2 class="fw-bold text-dark">Student Directory</h2>
        <p class="text-muted">Manage registered students for this semester.</p>
    </div>
    <div class="col-auto">
        <a href="{{ route('students.create') }}" class="btn btn-uic px-4 py-2 fw-bold">Add New Student</a>
    </div>
</div>

<div class="card p-4">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr class="text-muted small text-uppercase">
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th class="text-center">Year Level</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                <tr>
                    <td class="fw-bold text-secondary">#{{ str_pad($student->id, 4, '0', STR_PAD_LEFT) }}</td>
                    <td class="fw-semibold">{{ $student->name }}</td>
                    <td class="text-muted small">{{ $student->email }}</td>
                    <td>{{ $student->course }}</td>
                    <td class="text-center">
                        <span class="badge rounded-pill bg-light text-dark border px-3">Level {{ $student->year }}</span>
                    </td>
                    <td class="text-end">
                        <x-student-actions :id="$student->id" />
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-5 text-muted">No students found. Start by adding one!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection