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
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\bookotherdetails;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\viewbookshelfwise;
use App\Http\Controllers\CreateremarksController;





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

Route::get('createremarks/view', [CreateremarksController::class, 'createremarksView'])->name('createremarks.view');

Route::POST('createremarks/store', [CreateremarksController::class, 'createremarksStore'])->name('createremarks.store');

Route::get('createremarksViewupdate/View', [CreateremarksController::class, 'createremarksViewupdate'])->name('createremarksViewupdate.view');

Route::get('created_remarks/edit/{id}', [CreateremarksController::class, 'editbookremarks'])->name('createremarks.edit');

Route::POST('created_remarks/update', [CreateremarksController::class, 'updateCreateRemarks'])->name('createremarks.update');



Route::POST('newshelf/add', [NewshelfController::class, 'ShelfStore'])->name('newshelf.store');

Route::get('assignshelfbook/view', [AssignshelfbookController::class, 'AssignshelfbookView'])->name('self.view');
Route::POST('assignshelfbook/add', [AssignshelfbookController::class, 'shelfassignbookStore'])->name('self.store');

Route::get('newbook/view', [NewbookController::class, 'NewbookView'])->name('newbook.view');
#Route::get('newbook/view', [NewbookController::class, 'NewbookView'])->name('newbook.view');
Route::POST('newbook/add', [NewbookController::class, 'NewbookStore'])->name('newbook.store');

Route::get('newbook/1', [NewbookController::class, 'ScannedBookView'])->name('scanbook.view');
Route::POST('newbook/2', [NewbookController::class, 'ScannedbookStore'])->name('scanbook.store');

Route::get('book/view', [NewbookController::class, 'BookView'])->name('book.view');

Route::get('bookotherdetail/view1', [BookotherdetailController::class, 'viewotherbookdetail'])->name('bookotherdetails.view');

Route::get('book11/view', [NewbookController::class, 'BookView11'])->name('book11.view');


Route::get('book/view1', [NewbookController::class, 'BookView1'])->name('book.view1');


Route::get('return/book/view', [ReturnController::class, 'ReturnBookView'])->name('book1.view');


Route::get('Category/View', [CategoryController::class, 'CategoryView'])->name('category.view');


Route::get('shelf/View', [NewshelfController::class, 'ShelfView'])->name('shelf.view');

Route::get('bookotherdetail/view', [BookotherdetailController::class, 'BookotherdetailView'])->name('bookotherdetail.view');

Route::POST('bookotherdetail/1', [BookotherdetailController::class, 'BookotherdetailStore'])->name('bookotherdetail.store');

Route::get('assignbook/view', [BookotherdetailController::class, 'AssignbookView'])->name('assignbook.view');

Route::get('assignbook11/view', [BookotherdetailController::class, 'AssignbookView11'])->name('assignbook11.view');

Route::POST('assignbook/1', [BookotherdetailController::class, 'IssueBookStore'])->name('assignbook.store');

Route::POST('assignbook/11{id}', [BookotherdetailController::class, 'IssueBookStore1'])->name('assignbook1.store');

Route::get('assignbook/edit/{id}', [BookotherdetailController::class, 'ReturnBookEdit'])->name('assignbook.edit');




Route::get('category/edit/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');

Route::POST('category/update', [CategoryController::class, 'updateCategory'])->name('category.update');

Route::get('shelf/edit/{id}', [viewbookshelfwise::class, 'editShelf'])->name('shelf.edit');


Route::POST('shelf/update', [viewbookshelfwise::class, 'updateShelf'])->name('shelf.update');


Route::get('newbook/edit/{id}', [NewbookController::class, 'editAllbook'])->name('allbook.edit');


Route::POST('newbook/update', [NewbookController::class, 'updateNewbook'])->name('newbook.update');



Route::get('otherbookdetail/edit/{id}', [NewbookController::class, 'editotherbookdetail'])->name('editotherbookdetail.edit');


Route::POST('otherbookdetail/update', [NewbookController::class, 'updateotherbookdetail'])->name('editotherbookdetail.update');


Route::get('xyz/view', [NewbookController::class, 'xyz1'])->name('xyz.view');




Route::post('assignbook/update/{id}', [BookotherdetailController::class, 'ReturnBookUpdate'])->name('assignbook.update');











