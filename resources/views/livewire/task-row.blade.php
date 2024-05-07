<li>
   {{ $task_value }}
    <button
        wire:confirm="You are going to delete {{ $task_value }}, are you sure?"
        wire:click="$parent.deleteTask('{{ $task_key }}')"
    >
        Delete
    </button>
</li>
