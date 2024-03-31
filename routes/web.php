<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\analyticsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\hotelReviewController;
use App\Http\Controllers\restoReviewController;
use App\Http\Controllers\ReorderPointsController;
use App\Http\Controllers\inventoryitemsController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\FormController; //nadagdag
use App\Http\Controllers\RestaurantReports\CompleteTransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});




//RATINGS
Route::get('/feedback', [ReviewController::class, 'index']);
Route::post('/add-ratings', [RatingController::class, 'store'])->name('ratings.store');

//feedbackbooking
Route::get('/feedback', [ReviewController::class, 'feedbackbooking']);
Route::post('/add-ratings', [RatingController::class, 'store2'])->name('ratings.store2');

//login
Route::controller(UserController::class)->group(function () {
    Route::post('login', 'userlogin')->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function(){
    //PLACE YOUR ROUTES HERE FOR VERIFIED USER

    Route::get('dashboard', [DashboardController::class, 'index']);

    //APPS
    Route::get('apps-todolist', [HomeController::class, 'todolist']);
    Route::get('inventory', [InventoryController::class, 'index']);

    //CATEGORIES
    Route::post('submit-category', [InventoryController::class,'createcategory']);
    Route::get('/category','inventoryController@showCategory');
    Route::put('update-category/id={id}', [InventoryController::class, 'update']);
    Route::delete('delete-category/id={id}', [InventoryController::class, 'delete']);

    //view reviews
    Route::get('view-reviews', [ReviewController::class, 'viewReviewIndex']);
    Route::get('hotel-reviews', [hotelReviewController::class, 'hotelviewReviewIndex']);
    //HOTEL REVIEW
    Route::post('update-rev-status/{id}', [hotelReviewController::class, 'updateStatus']);


    Route::get('restaurant-reviews', [restoReviewController::class, 'restoviewReviewIndex']);

    //view REports
    Route:: get('Reports', [ReportsController::class,'anaviews']);
    //report dinagdag ko
    Route::post('/save-form', [FormController::class, 'store'])->name('save.form');
    Route::get('/form-answers', [FormController::class, 'displayAnswers'])->name('form.answers');
    Route::get('/form', [FormController::class, 'showForm'])->name('show.form');

   
    //analytics views
    Route::get('analytics', [analyticsController::class,'anaalytics']);

    //INVENTORY ITEMS
    Route::get('inventory_items', [inventoryitemsController::class,'store_items']);
    Route::get('inventory_stocks', [inventoryitemsController::class,'store_items2']);
    Route::post('submit-item', [inventoryitemsController::class, 'addItem']);
    Route::put('update-item/id={id}', [inventoryitemsController::class,'updateItem']);
    Route::get('delete-item/id={id}', [inventoryitemsController::class,'deleteItem']);


    //REORDER POINTS 
    Route::get('reorder-points', [ReorderPointsController::class,'index']);
    Route::post('submit-reorder/id={id}', [ReorderPointsController::class,'submitReorder']);
    Route::get('reorder-status', [ReorderPointsController::class,'reorderStatusIndex']);

    //RESTAURANT REPORTS
    Route::get('complete-transaction', [CompleteTransactionController::class, 'index']);
    Route::get('stripe-payments', [CompleteTransactionController::class, 'stripePayments']);
    
});


require __DIR__.'/auth.php';
