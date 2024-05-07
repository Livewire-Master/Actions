<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Js;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class TodoList extends Component
{
    /**
     * Tasks list
     *
     * @var array
     */
    public array $tasks = [];

    /**
     * Add Task to tasks list
     *
     * @param string $task
     *
     * @return void
     */
    public function addTask(string $task): void
    {
        $this->tasks[md5($task)] = $task;
    }

    /**
     * Delete a task using its key
     *
     * @param string $key
     *
     * @return void
     */
    public function deleteTask(string $key): void
    {
        unset($this->tasks[$key]);
    }

    /**
     * Like us
     *
     * @return void
     */
    #[Renderless]
    public function likeUs(): void
    {
        Log::error('someone liked us');

        // $this->skipRender(); # same as #[Renderless]
    }

    /**
     * Alert using JS
     *
     * @return void
     */
    public function alertMe(): void
    {
        $this->js("alert('I Just alerted you')");
    }

    /**
     * Pure JS
     *
     * @return string
     */
    #[Js]
    public function pureJS(): string
    {
        return <<<'JS'
            alert('Tasks count: ');
        JS;
    }
}
