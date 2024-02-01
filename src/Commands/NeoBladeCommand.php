<?php

namespace Initred\NeoBlade\Commands;

use Illuminate\Console\Command;

class NeoBladeCommand extends Command
{
    public $signature = 'neo-blade';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
