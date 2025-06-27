<?php

namespace Kandita\Stislaravel\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'stislaravel:install';
    protected $description = 'Publikasikan file view dan asset Stislaravel ke project Laravel.';

    public function handle()
    {
        $this->info('🔧 Memulai instalasi Stislaravel...');

        $this->call('vendor:publish', [
            '--tag' => 'stislaravel',
            '--force' => true
        ]);

        $this->info('✅ Stislaravel berhasil dipasang!');
        $this->info('🧾 Views: resources/views/');
        $this->info('🌐 Assets: public/vendor/stislaravel');
    }
}
