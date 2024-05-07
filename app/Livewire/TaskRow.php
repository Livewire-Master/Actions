<?php

namespace App\Livewire;

use Livewire\Component;

class TaskRow extends Component
{
    /**
     * Task Key
     *
     * @var string
     */
    public string $task_key;

    /**
     * Task Value
     *
     * @var string
     */
    public string $task_value;

    /**
     * Mount the component
     *
     * @param $taskKey
     * @param $taskValue
     *
     * @return void
     */
    public function mount($taskKey, $taskValue): void
    {
        $this->task_key   = $taskKey;
        $this->task_value = $taskValue;
    }
}
