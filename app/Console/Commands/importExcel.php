<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class importExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:excel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Excel';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        return Command::SUCCESS;
    }
}
