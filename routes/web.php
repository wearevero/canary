<?php

// Look, this is list of routes alias jalan.... Jalan Kebenaran

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductEximController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

Route::get('health', HealthCheckResultsController::class);
Route::view("/", "auth.login");
Route::get("/dashboard", [DashboardController::class, 'index'])
    ->middleware(["auth"])
    ->name("dashboard");

Route::get('/css/{theme}', function ($theme) {

    return response()->file(public_path('css/' . $theme . '-theme.css'), ['Content-Type' => 'text/css']);
});

// Profie group route
Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit"
    );
    Route::patch("/profile", [ProfileController::class, "update"])->name(
        "profile.update"
    );
    Route::delete("/profile", [ProfileController::class, "destroy"])->name(
        "profile.destroy"
    );
});

// Route group user
Route::controller(UserController::class)
    ->prefix("users")
    ->middleware("auth")
    ->group(function () {
        Route::get("/", "index")->name("users.index");
    });

// Catalogue group route
Route::controller(CategoryController::class)
    ->prefix("catalogue")
    ->middleware("auth")
    ->group(function () {
        Route::get("/", "index")->name("catalogue.index");
        Route::get("/category/{id}", "show_category")->name(
            "catalogue.category"
        );
    });

// Product group route
Route::controller(ProductController::class)
    ->prefix("products")
    ->middleware(["auth"])
    ->group(function () {
        Route::get("/", "index")->name("products.index");
        Route::get("/create", "create")->name("products.create");
        Route::post("/create", "store")->name("products.store");
        Route::get("/details/{id}", "show")->name("products.show");
        Route::get("/edit/{id}", "edit")->name("products.edit");
        Route::put("/updates/{id}", "update")->name("products.update");
        Route::delete("/delete/{id}", "destroy")->name("products.delete");
        Route::get("import", "import")->name("products.import");
        Route::post("/", "importstore")->name("products.importstore");
        Route::get("export", "export")->name("products.export");
    });

// Mangane route for handling all category and etc
Route::controller(ManagerController::class)
    ->prefix('manage')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', 'index')->name('manager.index');
        Route::get('/main_category', 'main_category')->name('manager.mainCategoryIndex');
    });

// Route for handling auto-complete via ajax / jQuery
Route::post('/autocomplete', [ProductController::class, 'getCategory'])->name('getCategory');

// Exim (export & import) controller
Route::get("importproduct", [ProductEximController::class, "import"])->name("exim.import");
Route::get("exportproduct", [ProductEximController::class, "export"])->name("exim.export");
Route::post("product", [ProductEximController::class, "importstore"])->name("exim.store");

require __DIR__ . "/auth.php";
