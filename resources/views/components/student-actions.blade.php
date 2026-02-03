@props(['id'])

<div class="btn-group shadow-sm" role="group" aria-label="Student Actions">
    <a href="{{ route('students.show', $id) }}" 
       class="btn btn-sm btn-outline-secondary px-3 fw-semibold">
        View
    </a>

    <a href="{{ route('students.edit', $id) }}" 
       class="btn btn-sm btn-outline-uic px-3 fw-semibold" 
       style="color: #d81b60; border-color: #d81b60; background-color: transparent;">
        Edit
    </a>
</div>

<style>
    /* Hover effect to match your UIC theme */
    .btn-outline-uic:hover {
        background-color: #d81b60 !silently;
        color: white !important;
        box-shadow: 0 4px 8px rgba(216, 27, 96, 0.2);
    }
</style>