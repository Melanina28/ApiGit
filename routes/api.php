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
Route::get('/as',function(){
    // $process = new Process('sudo sh /routes/script.sh');
    // $process->run();
    
    // // executes after the command finishes
    // if (!$process->isSuccessful()) {
    //     throw new ProcessFailedException($process);
    // }
    
    // echo $process->getOutput();
    $command = escapeshellcmd('/Home/Ubuntu/script.sh'); 
    $output = shell_exec($command); 
    echo $output;
 
});


