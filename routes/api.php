<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/as/{htt}//{url}/{Thin}/{Api}/{nombre}',function($htt,$url,$Thin, $Api,$nomre){

    https://github.com/Thincrs-bit/Api_React.git
    $command = escapeshellcmd(`/Users/Nani/Desktop/script.sh {'$htt','$url','$Thin','$Api','$nomre'}`); 
    $output = shell_exec($command); 
    echo $output;
    return "https://gitlab.com/thincrs-bit/$nomre";
 
});





