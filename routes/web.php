<?php
use App\Http\Controllers\bazarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\informasidonasiController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\registrasiController;
use App\Http\Controllers\tentangkamiController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\DashboardadminController;
use App\Http\Controllers\riwayatController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\transactionsController;
use App\Http\Controllers\inputdataController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [HomeController::class, 'index']);
Route::get('/infromasi', [informasidonasiController::class, 'informasi']);
Route::get('/kontak', [kontakController::class, 'kontak']);
Route::get('/tentang', [tentangkamiController::class, 'tentang']);
Route::get('/user', [userController::class, 'user']);
Route::get('/bazar', [bazarController::class, 'bazar']);
Route::get('/dashboardadmin', [DashboardadminController::class, 'dashboardadmin']);
Route::get('/transaksi', [transaksiController::class, 'transaksi']);
Route::get('/riwayat', [riwayatController::class, 'riwayat']);



///route bazar
Route::get('/berbagimakanan', [bazarController::class, 'berbagimakanan']);
Route::get('/santunan', [bazarController::class, 'santunan']);

//
//Route::get('/registrasi', [registrasiController::class, 'registrasi']);
use App\Http\Controllers\AuthController;
use Psy\Readline\HoaConsole;

// Menampilkan halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Proses registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// route buat home 
Route::get('/home', [HomeController::class, 'index']);

// Buat route baru jika di perlukan jangan otak atik route yang ada di atas !!

//bagian authcontroller buat nemapilkan tabel 

Route::get('/riwayat', [AuthController::class, 'riwayat'])->name('riwayat');
//

// login cruddd 

Route::get('/riwayat', [AuthController::class, 'riwayat'])->name('riwayat');
Route::get('/riwayat/{user}', [AuthController::class, 'show'])->name('show');
Route::get('/riwayat/{user}/edit', [AuthController::class, 'edit_login'])->name('edit_login');
Route::put('/riwayat/{user}/update_', [AuthController::class, 'update_'])->name('update_');
Route::delete('/riwayat/{id}', [AuthController::class, 'destroyn'])->name('destroyn');



///route web inuput data dan curdd 
Route::get('/inputdata', [inputdataController::class, 'inputdata'])->name('inputdata');
Route::get('/inputdata/create', [inputdataController::class, 'create'])->name('inputdata.create');
Route::post('/inputdata/store', [inputdataController::class, 'store'])->name('inputdata.store');
Route::get('/inputdata/edit/{id}', [inputdataController::class, 'edit'])->name('inputdata.edit');
Route::put('/inputdata/update/{id}', [inputdataController::class, 'update'])->name('inputdata.update');
Route::delete('/inputdata/destroy/{id}', [inputdataController::class, 'destroy'])->name('inputdata.destroy');
//route buat informasi bagian user 
Route::get('/informasi', [inputdataController::class, 'informasi'])->name('informasi');
Route::get('/test', [inputdataController::class, 'test'])->name('test');
//






//Route::middleware(['auth.admin'])->group(function () {
    // Rute yang hanya dapat diakses oleh admin
    //Route::get('/dashboardadmin', [DashboardadminController::class, 'dashboardadmin']);
    // ... tambahkan rute admin lainnya
//});

//buat user 

//Route::middleware(['auth.user'])->group(function () {
    // Rute yang hanya dapat diakses oleh admin
    //Route::get('/home', [HomeController::class, 'index']);
    // ... tambahkan rute admin lainnya
//});

//buat route contact

//Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
//Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
//Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
//Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
//Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
//Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

// route terbaru 

//Route::middleware(['auth', 'admin'])->group(function () {
    //Route::get('/admin/contacts', [ContactController::class, 'adminIndex'])->name('admin.contacts.index');
//});

// Rute untuk tampilan user
//Route::middleware(['auth', 'user'])->group(function () {
    //Route::get('/user/contacts/create', [ContactController::class, 'userCreate'])->name('user.contacts.create');
//});

//route buat contact

// Menampilkan semua kontak
//Route::get('/input-data-kontak', [ContactController::class, 'index'])->name('index');
// Rute untuk menampilkan formulir pembuatan kontak

// Menampilkan daftar kontak
Route::get('/contacts/create', [ContactController::class, 'create'])->name('create');
Route::get('/contacts', [ContactController::class, 'index'])->name('index');
Route::get('/create', [ContactController::class, 'create'])->name('create');
// Menyimpan data kontak baru
Route::post('/contacts', [ContactController::class, 'store'])->name('store');

// Menampilkan formulir pengeditan kontak
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('edit');

// Memperbarui data kontak yang ada
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('update');

// Menghapus data kontak
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('destroy');

//route transaksi crud 

Route::get('transactions', [transactionsController::class, 'index'])->name('transactions.index');
Route::get('transactions/create', [transactionsController::class, 'create'])->name('transactions.create');
Route::post('transactions', [transactionsController::class, 'store'])->name('transactions.store');
Route::get('transactions/{transaction}', [transactionsController::class, 'show'])->name('transactions.show');
Route::get('transactions/{transaction}/edit', [transactionsController::class, 'edit'])->name('transactions.edit');
Route::put('transactions/{transaction}', [transactionsController::class, 'update'])->name('transactions.update');
// Route::delete('transactions/{transaction}', [transactionsController::class, 'destroy'])->name('transactions.destroy');

//route riwayat transaksi
 

Route::get('/riwayatransaksi', [transactionsController::class, 'riwayatransaksi'])->name('riwayatransaksi');
Route::get('/riwayatransaksi/{id}', [transactionsController::class, 'destroyt'])->name('destroyt');

//


// Admin routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboardadmin', [DashboardadminController::class, 'dashboardadmin']);
    // Add other admin routes here
});

// User routes
//Route::middleware(['auth::admin'])->group(function () {
    //Route::get('/home', [HomeController::class, 'index']);
    // Add other user routes here
//});


///





//

//Route::post('/upload', 'App\Http\Controllers\uploadController@upload');




//use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    echo "selmat datang";
});
