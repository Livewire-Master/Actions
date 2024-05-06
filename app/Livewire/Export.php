<?php

namespace App\Livewire;

use Livewire\Component;

class Export extends Component
{
    /**
     * Downloadable at - unix time stamp
     *
     * @var int
     */
    public int $downloadable_at;

    /**
     * Simulate data export process
     *
     * @return void
     */
    public function export(): void
    {
        $this->downloadable_at = now()->addSeconds(10)->timestamp;
    }
}
