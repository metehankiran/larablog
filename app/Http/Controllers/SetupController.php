<?php

namespace App\Http\Controllers;

use Artisan;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index()
    {
        return view('setup');
    }

    public function customCommand(Request $request)
    {
        if($request->setup_key != env('SETUP_KEY')){
            $output = 'Invalid setup key';
            return response()->json(['output' => $output]);
        }
        else{
            $command = $request->input('command');
            $command = strpos($command, 'php artisan ') !== false ? substr($command, 12) : $command;
            try{
                Artisan::call($command);
                $output = Artisan::output();
            }
            catch(\Exception $e){
                $output = $e->getMessage();
            }
        }
        return response()->json(['output' => $output]);
    }
}
