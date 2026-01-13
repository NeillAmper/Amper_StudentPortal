@props(['id'])

<div class="btn-group" role="group">
    <a href="{{ route('students.show', $id) }}" class="btn btn-sm btn-outline-primary">View</a>
    <a href="{{ route('students.edit', $id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
</div>