<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\biodiversity\PhylumController;
use App\Http\Controllers\admin\HelplistController;
use App\Http\Controllers\admin\biodiversity\OrderController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\biodiversity\ClassesController;
use App\Http\Controllers\admin\biodiversity\GenusController;
use App\Http\Controllers\admin\biodiversity\FamilyController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\admin\biodiversity\SpeciesController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AccountController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\statistic\PhylumChartController;
use App\Http\Controllers\admin\statistic\ClassstaticalController;
use App\Http\Controllers\admin\statistic\OrderstaticalController;
use App\Http\Controllers\admin\statistic\FamilystaticalController;
use App\Http\Controllers\admin\statistic\GenusstaticalController;
use App\Http\Controllers\admin\statistic\AnimalstaticalController;
use App\Http\Controllers\admin\statistic\PlantstaticalController;
use App\Http\Controllers\admin\statistic\HabitatstaticalController;
use App\Http\Controllers\admin\statistic\ConservationvaluestaticalController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AboutUsController;


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
        return view('welcome');
    })->name('wel');
    Route::get('/adlogin', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/adlogin', [AdminLoginController::class, 'login']);
    Route::get('/about-us', [AboutUsController::class,'index'])->name('about-us.index');

// Đăng xuất
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
// Route::middleware(['admin'])->group(function () {
//     // Đăng nhập
   

//     // Các route còn lại với middleware 'admin' được giữ nguyên
//     Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
//     Route::get('/phylum', [PhylumController::class, 'index'])->name('admin.phylum');
//     Route::get('/help', [HelplistController::class, 'index'])->name('admin.helplist');
//     Route::get('/contact', [ContactController::class, 'index'])->name('admin.contactlist');
//     Route::get('/class', [ClassesController::class, 'index'])->name('admin.class');
//     Route::get('/order', [OrderController::class, 'index'])->name('admin.order');
//     Route::get('/family', [FamilyController::class, 'index'])->name('admin.family');
//     Route::get('/genus', [GenusController::class, 'index'])->name('admin.genus');
//     Route::get('/doc', [DocumentController::class, 'index'])->name('admin.document');
//     Route::get('/species', [SpeciesController::class, 'index'])->name('admin.species');
// });



    //tài liệu text
Route::get('/doc', [DocumentController::class, 'index'])->name('admin.document');
Route::post('/create-doc', [DocumentController::class, 'store'])->name('admin.addDocument');
Route::get('/documents/{id}/download', [DocumentController::class, 'download'])->name('admin.downloaddoc');
//video
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
Route::get('/videos/{video}', [VideoController::class, 'show'])->name('videos.show');
Route::get('/videos/{video}/download', [VideoController::class, 'download'])->name('videos.download');
Route::get('/help',[HelpController::class,'index'])->name('help');
//admin
Route::prefix('admin')->group(function () {
   


    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
        //Cập nhật
    //phylum
    Route::get('/phylum', [PhylumController::class, 'index'])->name('admin.phylum');
    Route::post('/add-phylum', [PhylumController::class, 'store'])->name('admin.addPhylum');
    Route::get('/get-phylum/{id}', [PhylumController::class, 'getPhylumById'])->name('admin.getPhylumById');
    Route::put('/save-phylum', [PhylumController::class, 'savePhylum'])->name('admin.savePhylum');
    Route::delete('/destroy-phylum/{id}', [PhylumController::class, 'destroyPhylum'])->name('admin.destroyPhylum');
    //class
    Route::get('/class', [ClassesController::class, 'index'])->name('admin.class');
    Route::post('/add-class', [ClassesController::class, 'store'])->name('admin.addClass');
    Route::get('/get-class/{id}', [ClassesController::class, 'getClassById'])->name('admin.getClassById');
    Route::put('/save-class', [ClassesController::class, 'saveClass'])->name('admin.saveClass');
    Route::delete('/destroy-class/{id}', [ClassesController::class, 'destroyClass'])->name('admin.destroyClass');
    //order
    Route::get('/order', [OrderController::class, 'index'])->name('admin.order');
    Route::post('/add-order', [OrderController::class, 'store'])->name('admin.addOrder');
    Route::get('/get-order/{id}', [OrderController::class, 'getOrderById'])->name('admin.getOrderById');
    Route::put('/save-order', [OrderController::class, 'saveOrder'])->name('admin.saveOrder');
    Route::delete('/destroy-order/{id}', [OrderController::class, 'destroyOrder'])->name('admin.destroyOrder');
    //family
    Route::get('/family', [FamilyController::class, 'index'])->name('admin.family');
    Route::post('/add-family', [FamilyController::class,'addFamily'])->name('admin.addFamily');
    Route::get('/get-family/{id}', [FamilyController::class, 'getFamilyById'])->name('admin.getFamilyById');
    Route::put('/save-family', [FamilyController::class, 'saveFamily'])->name('admin.saveFamily');
    Route::delete('/destroy-family/{id}', [FamilyController::class, 'destroyFamily'])->name('admin.destroyFamily');
    //genus
    Route::get('/genus', [GenusController::class, 'index'])->name('admin.genus');
    Route::post('/add-genus', [GenusController::class, 'store'])->name('admin.addGenus');
    Route::get('/get-genus/{id}', [GenusController::class, 'getGenusById'])->name('admin.getGenusById');
    Route::put('/save-genus', [GenusController::class, 'saveGenus'])->name('admin.saveGenus');
    Route::delete('/destroy-genus/{id}', [GenusController::class, 'destroyGenus'])->name('admin.destroyGenus');
    //species
    Route::get('/species', [SpeciesController::class, 'index'])->name('admin.species');
    Route::post('/add-species', [SpeciesController::class, 'store'])->name('admin.addSpecies');
    Route::get('/get-species/{id}', [SpeciesController::class, 'getSpeciesById'])->name('admin.getSpeciesById');
    Route::put('/save-species', [SpeciesController::class, 'saveSpecies'])->name('admin.saveSpecies');
    Route::delete('/destroy-species/{id}', [SpeciesController::class, 'destroySpecies'])->name('admin.destroySpecies');
    //Help and contact
    Route::get('/help', [HelplistController::class, 'index'])->name('admin.helplist');
    Route::get('/contact', [ContactController::class, 'index'])->name('admin.contactlist');

   
    //Thống kê
    //Ngành
    Route::get('/chart', [PhylumChartController::class, 'showChart'])->name('phylumchart');
    //lớp
    Route::get('/class-statical', [ClassstaticalController::class, 'index'])->name('admin.classstatical');
    Route::get('/export-combined-data', [ClassstaticalController::class, 'exportexcel'])->name('admin.exportclass');
    //bộ
    Route::get('/order-statical', [OrderstaticalController::class, 'index'])->name('admin.orderstatical');
    Route::get('/export-data', [OrderstaticalController::class, 'exportexcel'])->name('admin.exportorder');
    //họ
    Route::get('/family-statical', [FamilystaticalController::class, 'index'])->name('admin.familystatical');
    Route::get('/export-family', [FamilystaticalController::class, 'exportexcel'])->name('admin.exportfamily');
    //chi
    Route::get('/genus-statical', [GenusstaticalController::class, 'index'])->name('admin.genusstatical');
    Route::get('/export-genus', [GenusstaticalController::class, 'exportexcel'])->name('admin.exportgenus');
    //Động vật
    Route::get('/animal-statical', [AnimalstaticalController::class, 'index'])->name('admin.animalstatical');
    Route::get('/export-animal', [AnimalstaticalController::class, 'exportexcel'])->name('admin.exportanimal');
    //Thực vật
    Route::get('/plant-statical', [PlantstaticalController::class, 'index'])->name('admin.plantstatical');
    Route::get('/export-plant', [PlantstaticalController::class, 'exportexcel'])->name('admin.exportplant');
    //Sinh cảnh sống
    Route::get('/habitat-statical', [HabitatstaticalController::class, 'index'])->name('admin.habitatstatical');
    Route::get('/export-habitat', [HabitatstaticalController::class, 'exportexcel'])->name('admin.exporthabitat');
    //Giá trị bảo tồn
    Route::get('/conservationvalue-statical', [ConservationvaluestaticalController::class, 'index'])->name('admin.conservationvaluestatical');
    Route::get('/export-conservationvalue', [ConservationvaluestaticalController::class, 'exportexcel'])->name('admin.exportconservationvalue');

 


//quản lý tài khoản
    Route::get('/view', [AccountController::class, 'showView'])->name('admin.account');
    Route::post('/add-account', [AccountController::class, 'store'])->name('admin.addAccount');
    Route::get('/get-account/{id}', [AccountController::class, 'getAccountById'])->name('admin.getAccountById');
    Route::put('/save-account', [AccountController::class, 'saveAccount'])->name('admin.saveAccount');
    Route::delete('/destroy-account/{id}', [AccountController::class, 'destroyAccount'])->name('admin.destroy');
    
    //quản lý vai trò
    Route::get('/role', [RoleController::class, 'showView'])->name('admin.role');
    Route::post('/add-role', [RoleController::class, 'addRole'])->name('admin.addRole');
    Route::get('/get-role/{id}', [RoleController::class, 'getRoleById'])->name('admin.getRoleById');
    Route::put('/save-role', [RoleController::class, 'saveAccount'])->name('admin.saveRole');
    Route::delete('/destroy-role/{id}', [RoleController::class, 'destroyRole'])->name('admin.destroyrole');
});


    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
