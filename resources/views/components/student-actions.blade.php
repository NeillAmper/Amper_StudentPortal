@props(['id'])

<div class="d-flex justify-content-end gap-2">
    <a href="{{ route('students.show', $id) }}" class="btn btn-sm btn-outline-secondary px-3 shadow-sm">
        View
    </a>

    <a href="{{ route('students.edit', $id) }}" class="btn btn-sm btn-outline-uic px-3 shadow-sm action-btn-edit">
        <i class="bi bi-pencil-square"></i>
    </a>

    <form action="{{ route('students.destroy', $id) }}" method="POST" 
          onsubmit="return confirm('Wait! Are you sure you want to delete this student record? This action cannot be undone.');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-outline-danger px-3 shadow-sm action-btn-delete">
            <i class="bi bi-trash3"></i>
        </button>
    </form>
</div>

<style>
    /* Styling to match UIC theme */
    .btn-outline-uic {
        color: #d81b60;
        border-color: #d81b60;
        transition: all 0.2s ease-in-out;
    }
    .btn-outline-uic:hover {
        background-color: #d81b60;
        color: white;
        transform: scale(1.05);
    }

    /* Delete Button Styling */
    .action-btn-delete {
        transition: all 0.2s ease-in-out;
    }
    .action-btn-delete:hover {
        background-color: #dc3545;
        color: white;
        box-shadow: 0 4px 10px rgba(220, 53, 69, 0.3);
        transform: scale(1.05);
    }
</style>