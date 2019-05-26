<?php
use Gondr\Route;

//:: => static 호출
Route::get("/", "MainController@index");
Route::get("/board", "BoardController@list");

Route::get("/lunch", "MainController@lunch");

//로그이 되어 있을때만 가능 / 권한 관리
// if(isset($_SESSION['user'])) {
//     Route::get("/", "MainController@index");
// }