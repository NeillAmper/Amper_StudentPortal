<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="row mb-4">
        <div class="col-8">
            <label class="form-label">Course</label>
            <input type="text" name="course" class="form-control" required>
        </div>
        <div class="col-4">
            <label class="form-label">Year</label>
            <input type="number" name="year" class="form-control" required>
        </div>
    </div>
    <button type="submit" class="btn btn-success w-100">Register Student</button>
</form>