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
            $output = 'Invalid setup key.';
            return response()->json(['output' => $output]);
        }
        if($request->command == ""){
            $output = 'Please enter a command.';
            return response()->json(['output' => $output]);
        }
        else{
            try{
                $command = $request->input('command');
                $command = strpos($command, 'php artisan ') !== false ? substr($command, 12) : $command;
                Artisan::call($command);
                $output = Artisan::output();
            }
            catch(\Exception $e){
                $output = $e->getMessage();
            }
        }
        
        return response()->json(['output' => $output],200);
    }

    public function backupDownload($filename)
    {
        $file = storage_path('app/backup/'.$filename);
        return response()->download($file);
    }

    public function firstSetup(Request $request)
    {
        
    }

    public function setupDefaultSetting(Request $request)
    {
        if($request->setup_key != env('SETUP_KEY')){
            $output = 'Invalid setup key.';
            return response()->json(['output' => $output]);
        }
        Artisan::call('migrate:fresh --seed');
        return response()->json(['output' => 'First upload succesfully. '],200);
    }
}
