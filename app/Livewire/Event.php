<?php

namespace App\Livewire;

use Livewire\Component;

class Event extends Component
{
    /**
     * Mouse Leave Counts
     *
     * @var int
     */
    public int $mouse_enter_counts = 0;

    /**
     * Mouse Enter Counts
     *
     * @var int
     */
    public int $mouse_leave_counts = 0;

    /**
     * Hello Counts
     *
     * @var int
     */
    public int $hello_counts = 0;

    /**
     * Hi Counts
     *
     * @var int
     */
    public int $hi_counts = 0;

    /**
     * Handle Mouse Enter Event
     *
     * @return void
     */
    public function mouseEnter(): void
    {
        $this->mouse_enter_counts++;
    }

    /**
     * Handle Mouse Leave Event
     *
     * @return void
     */
    public function mouseLeave(): void
    {
        $this->mouse_leave_counts++;
    }

    /**
     * Increment Hello Count
     *
     * @return void
     */
    public function incrementHelloCount(): void
    {
        $this->hello_counts++;
    }


    /**
     * Increment Hi Count
     *
     * @return void
     */
    public function incrementHiCount(): void
    {
        $this->hi_counts++;
    }
}
