@extends('components.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Student Directory</h2>
</div>

<x-card>
    <table class="table table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Course</th>
                <th>Year</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $id => $student)
            <tr>
                <td>#{{ $id }}</td>
                <td class="fw-bold">{{ $student['name'] }}</td>
                <td>{{ $student['course'] }}</td>
                <td><span class="badge bg-secondary">Year {{ $student['year'] }}</span></td>
                <td class="text-end">
                    <x-student-actions :id="$id" />
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-card>
@endsection