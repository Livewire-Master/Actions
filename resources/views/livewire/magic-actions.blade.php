<div>
    <h4>
        $event Magic Action
    </h4>
    <p>
        Working with $event
    </p>
    <p>
        Query is: {{ empty($query) ? '-' : $query }}
    </p>
    <label for="input-query">
        Query
    </label>
    <input
        id="input-query"
        name="query"
        type="text"
        wire:keydown.enter="handleQueryUpdate($event.target.value)"
    >
</div>
