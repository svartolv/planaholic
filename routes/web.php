<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('plan');
});

Route::group([
    'prefix' => 'plan',
    'namespace' => 'Plan'
], function () {
    Route::get('/', 'PlanController@index')->name('plan'); //показать форму
});

// Route::group([
//     'prefix' => 'offer',
//     'namespace' => 'Offer'
// ], function () {
//     Route::any('/', 'OfferController@index')->name('contract.offer.info'); //показать форму
//     Route::group([
//         'prefix' => 'application'
//     ], function () {
//         Route::post('getEntity', 'OfferController@getEntity')->name('contract.offer.getEntity'); //проверить организацию, получить её данные
//         Route::get('getEntity', 'OfferController@getEntity')->name('contract.offer.getEntity'); // XXX удалить тестовый маршрут
//         // Route::match(['GET', 'POST'], '', 'Controller@formCompanyInfo')->name('deferredPayment.formCompanyInfo');
//         // Route::match(['GET', 'POST'], 'a', 'Controller@formAccounting')->name('deferredPayment.formAccounting');
//         // Route::post('r', 'Controller@result')->name('deferredPayment.result');
//         // Route::match(['GET', 'POST'], '{alias}', 'Controller@status')->where(['alias' => '[a-zA-Z0-9-]+'])->name('deferredPayment.status');
//     });
// });
