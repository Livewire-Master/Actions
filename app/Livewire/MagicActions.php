<?php

namespace App\Livewire;

use Livewire\Component;

class MagicActions extends Component
{
    /**
     * Parent Status
     *
     * @var string
     */
    public string $parent_status = 'not-updated';

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

    /**
     * Update Parent Status
     *
     * @return void
     */
    public function updateParentStatus(): void
    {
        $this->parent_status = 'updated from child component';
    }
}
