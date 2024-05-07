<?php

namespace App\Livewire;

use Livewire\Component;

class MagicActions extends Component
{
    /**
     * Dark mode indicator
     *
     * @var bool
     */
    public bool $is_dark = false;

    /**
     * Username
     *
     * @var string
     */
    public string $username = '';

    /**
     * Query
     *
     * @var string
     */
    public string $query = '';

    /**
     * Handle Query input updates
     *
     * @param ?string $query
     *
     * @return void
     */
    public function handleQueryUpdate(?string $query): void
    {
        $this->query = $query;
    }
}
