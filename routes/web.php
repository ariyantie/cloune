Route::get('/',            [PageController::class, 'home'])->name('home');
Route::get('/phone',       [PageController::class, 'phone'])->name('phone');
Route::post('/phone',      [PageController::class, 'phoneSubmit']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    // Form aplikasi pinjaman
    Route::get('/apply',           [LoanController::class, 'create'])->name('apply');
    Route::post('/apply',          [LoanController::class, 'store']);
    Route::get('/products',        [PageController::class, 'products'])->name('products');
});
