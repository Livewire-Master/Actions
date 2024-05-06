<div>
    <h1>
        Event Component
    </h1>
    <p>
        Working with events in Livewire
    </p>
    <hr>
    <p>
        Enter: {{ $mouse_enter_counts }} | Leave: {{ $mouse_leave_counts }}
    </p>
    <button
        wire:mouseenter="mouseEnter"
        wire:mouseleave="mouseLeave"
        wire:dblclick="mouseEnter"
        x-on:click="$wire.mouseEnter()"
    >
        Hover Me
    </button>
    <hr>
    <h4>
        External Events [Nested]
    </h4>
    <p>
        Listening to external events
    </p>
    <div wire:hello="incrementHelloCount">
        <p>
            Hello Counts: {{ $hello_counts }}
        </p>
        <button x-on:click="$dispatch('hello')">
            Dispatch Hello
        </button>
    </div>
    <hr>
    <h4>
        External Events [Global]
    </h4>
    <p>
        Listening to window [global] events
    </p>
    <div wire:hi.window="incrementHiCount">
        <p>
            Hi Counts: {{ $hi_counts }}
        </p>
    </div>

    <button x-on:click="$dispatch('hi')">
        Dispatch Hi
    </button>
</div>
