<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Storage;

class DatabaseBackUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Database Backup';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filename = 'backup_'.date('Y-m-d_H-i-s').'.sql';
        $command = 'mysqldump --user='.env('DB_USERNAME').' --password='.env('DB_PASSWORD').' '.env('DB_DATABASE').' > '.storage_path('app/backup/'.$filename);
        $returnVar = NULL;
        $response = NULL;
        exec($command, $response, $returnVar);
        $output = "Backup Successful. File name: <a href='".route('backup.download',$filename)."' target='_blank'>".$filename."</a>";
        return $this->info($output);
    }
}
