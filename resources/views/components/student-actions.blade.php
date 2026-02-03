@props(['id'])
<div class="btn-group">
    <a href="{{ route('students.show', $id) }}" class="btn btn-sm btn-outline-secondary px-3">View</a>
    <a href="{{ route('students.edit', $id) }}" class="btn btn-sm btn-outline-uic px-3" style="border-color: #d81b60; color: #d81b60;">Edit</a>
</div>