<div>
    <h1>
        Todo List
    </h1>
    <p>
        List of your daily works
    </p>
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
