<div>
    <h1>
        Todo List
    </h1>
    <p>
        List of your daily works
    </p>
    <button wire:click="likeUs">
        I Love this app
    </button>

    <button wire:click="alertMe">
        Alert Me
    </button>

    <button wire:click="pureJS">
        Pure JS
    </button>
    <p>
        Latest update: {{ now()->format('H:i:s') }}
    </p>
    <hr>
    <br>
    <div>
        <label for="input-task">
            Task
        </label>
        <input
            id="input-task"
            name="task"
            type="text"
            wire:keydown.enter="addTask($event.target.value)"
        >
    </div>
    <br>
    <hr>
    <ul style="display: flex; flex-direction: column; gap: 16px">
        @foreach($tasks as $taskKey => $taskValue)
            <livewire:task-row
                wire:key="{{ $taskKey }}"
                task-key="{{ $taskKey }}"
                task-value="{{ $taskValue }}"
            />
        @endforeach
    </ul>
</div>
