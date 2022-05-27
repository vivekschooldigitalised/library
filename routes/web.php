<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewbookController;
use App\Http\Controllers\NewshelfController;
use App\Http\Controllers\AssignshelfbookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookotherdetailController;
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

Route::get('/one', function () {
    return view('addauthor');
});

Route::get('/two', function () {
    return view('publisher');
});

Route::get('/three', function () {
    return view('categories');
});

Route::get('/four', function () {
    return view('createshelf');
});

Route::get('/seven', function () {
    return view('assignbook');
});







Route::POST('author/add', [AuthorController::class, 'AuthorStore'])->name('author.store');
Route::POST('publisher/add', [PublisherController::class, 'PublisherStore'])->name('publisher.store');
Route::POST('Category/add', [CategoryController::class, 'CategoryStore'])->name('category.store');

Route::POST('newshelf/add', [NewshelfController::class, 'ShelfStore'])->name('newshelf.store');

Route::get('assignshelfbook/view', [AssignshelfbookController::class, 'AssignshelfbookView'])->name('self.view');
Route::POST('assignshelfbook/add', [AssignshelfbookController::class, 'shelfassignbookStore'])->name('self.store');

Route::get('newbook/view', [NewbookController::class, 'NewbookView'])->name('newbook.view');
#Route::get('newbook/view', [NewbookController::class, 'NewbookView'])->name('newbook.view');
Route::POST('newbook/add', [NewbookController::class, 'NewbookStore'])->name('newbook.store');

Route::get('newbook/1', [NewbookController::class, 'ScannedBookView'])->name('scanbook.view');
Route::POST('newbook/2', [NewbookController::class, 'ScannedbookStore'])->name('scanbook.store');

Route::get('book/view', [NewbookController::class, 'BookView'])->name('book.view');
Route::get('/posts', [PostController::class, 'index']);


Route::get('Category/View', [CategoryController::class, 'CategoryView'])->name('category.view');

Route::get('shelf/View', [NewshelfController::class, 'ShelfView'])->name('shelf.view');

Route::get('bookotherdetail/view', [BookotherdetailController::class, 'BookotherdetailView'])->name('bookotherdetail.view');

Route::POST('bookotherdetail/1', [BookotherdetailController::class, 'BookotherdetailStore'])->name('bookotherdetail.store');

Route::get('assignbook/view', [BookotherdetailController::class, 'AssignbookView'])->name('assignbook.view');

Route::POST('assignbook/1', [BookotherdetailController::class, 'IssueBookStore'])->name('assignbook.store');






