use App\Models\Student;
use Illuminate\Http\Request;

// Read: Display all students
Route::get('/students', function () {
    $students = Student::all(); // Fetches from MySQL
    return view('students.index', compact('students'));
})->name('students.index');

// Create: Process the form
Route::post('/students', function (Request $request) {
    Student::create($request->all());
    return redirect()->route('students.index');
})->name('students.store');

// All other views
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/students/create', function () { return view('students.create'); })->name('students.create');