<?php
use App\Http\Controllers\VideosController;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/videos/{id}', [ VideosController::class,'show']);
/*Route::get('/videos/1', function () {
//    return 'Ubuntu 101 | Here description | December 13';
    $video = Video::find(1);

    return view('videos.show',[
        'video' => $video
   ]); // CRUD -> RETRIEVE -> només un video
});*/
