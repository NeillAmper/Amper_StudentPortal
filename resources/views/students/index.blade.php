@extends('components.layout')

@section('content')
<div class="container">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold text-dark m-0">Student Directory</h2>
            <p class="text-muted">Viewing all registered students in the portal.</p>
        </div>
        <div class="col-md-6 text-md-end">
            <a href="{{ route('students.create') }}" class="btn btn-uic px-4 py-2 fw-bold shadow-sm">
                + Add New Student
            </a>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card p-3 border-0 shadow-sm text-center" style="background-color: #fce4ec;">
                <h6 class="text-muted text-uppercase small fw-bold">Total Students</h6>
                <h3 class="fw-bold" style="color: #d81b60;">{{ $students->count() }}</h3>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead style="background-color: #fafafa;">
                    <tr class="text-muted small text-uppercase">
                        <th class="ps-4 py-3">ID</th>
                        <th class="py-3">Full Name</th>
                        <th class="py-3">Email Address</th>
                        <th class="py-3">Course</th>
                        <th class="py-3 text-center">Year Level</th>
                        <th class="pe-4 py-3 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($students as $student)
                        <tr>
                            <td class="ps-4">
                                <span class="text-muted fw-bold">#{{ str_pad($student->id, 4, '0', STR_PAD_LEFT) }}</span>
                            </td>
                            <td>
                                <div class="fw-bold text-dark">{{ $student->name }}</div>
                            </td>
                            <td>
                                <span class="text-muted">{{ $student->email }}</span>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border px-2 py-1 fw-normal">
                                    {{ $student->course }}
                                </span>
                            </td>
                            <td class="text-center">
                                <span class="fw-semibold">Level {{ $student->year }}</span>
                            </td>
                            <td class="pe-4 text-end">
                                <x-student-actions :id="$student->id" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-5">
                                <div class="text-muted">
                                    <p class="mb-0">No students found in the <strong>StudentPortal</strong> database.</p>
                                    <small>Click "Add New Student" to get started.</small>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection