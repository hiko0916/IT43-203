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

Route::get('/', function () {
    return view('index');
});
Route::get('/Q1', function () {
    return view('Q1');
});
Route::get('/Q2', function () {
    return view('Q2');
});
Route::get('/Q3', function () {
    return view('Q3');
});
Route::get('/Q4', function () {
    return view('Q4');
});
Route::get('/Q5', function () {
    return view('Q5');
});
Route::get('/Q6', function () {
    return view('Q6');
});
Route::get('/result_atc', function () {
    return view('result_atc');
});
Route::get('/result_aimer', function () {
    return view('result_aimer');
});
Route::get('/result_alia', function () {
    return view('result_alia');
});
Route::get('/result_amaranthe', function () {
    return view('result_amaranthe');
});
Route::get('/result_bish', function () {
    return view('result_bish');
});
Route::get('/result_blueencount', function () {
    return view('result_blueencount');
});
Route::get('/result_bmth', function () {
    return view('result_bmth');
});
Route::get('/result_btb', function () {
    return view('result_btb');
});
Route::get('/result_claris', function () {
    return view('result_claris');
});
Route::get('/result_deco27', function () {
    return view('result_deco27');
});
Route::get('/result_eiraoi', function () {
    return view('result_eiraoi');
});
Route::get('/result_fripside', function () {
    return view('result_fripside');
});
Route::get('/result_garinidelia', function () {
    return view('result_garnidelia');
});
Route::get('/result_heartbeat', function () {
    return view('result_heartbeat');
});
Route::get('/result_hiroyukisawano', function () {
    return view('result_hiroyukisawano');
});
Route::get('/result_jamproject', function () {
    return view('result_jamproject');
});
Route::get('/result_kinggnu', function () {
    return view('result_kinggnu');
});
Route::get('/result_kobukuro', function () {
    return view('result_kobukuro');
});
Route::get('/result_lisa', function () {
    return view('result_lisa');
});
Route::get('/result_mwam', function () {
    return view('result_mwam');
});
Route::get('/result_palewaves', function () {
    return view('result_palewaves');
});
Route::get('/result_patd', function () {
    return view('result_patd');
});
Route::get('/result_queen', function () {
    return view('result_queen');
});
Route::get('/result_reol', function () {
    return view('result_reol');
});
Route::get('/result_sakamichi', function () {
    return view('result_sakamichi');
});
Route::get('/result_shiinaringo', function () {
    return view('result_shiinaringo');
});
Route::get('/result_skillet', function () {
    return view('result_skillet');
});
Route::get('/result_spyair', function () {
    return view('result_spyair');
});
Route::get('/result_thealfee', function () {
    return view('result_thealfee');
});
Route::get('/result_theoffspring', function () {
    return view('result_theoffspring');
});
Route::get('/result_tmrevolution', function () {
    return view('result_tmrevolution');
});
Route::get('/result_trf', function () {
    return view('result_trf');
});
Route::get('/result_uverworld', function () {
    return view('result_uverworld');
});
Route::get('/result_wagakkiband', function () {
    return view('result_wagakkiband');
});
Route::get('/result_yoasobi', function () {
    return view('result_yoasobi');
});
Route::get('/result_yorushika', function () {
    return view('result_yorushika');
});

Route::post('/store1' , 'TestController@store1');
Route::post('/store2' , 'TestController@store2');
Route::post('/store3' , 'TestController@store3');
Route::post('/store4' , 'TestController@store4');
Route::post('/store5' , 'TestController@store5');
Route::post('/store6' , 'TestController@store6');
