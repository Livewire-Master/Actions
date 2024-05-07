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
    <hr>
    <h4>
        $toggle Magic Action
    </h4>
    <p>
        Working with $toggle
    </p>
    <p>
        Is Dark? {{ $is_dark ? 'YES' : 'NO' }}
    </p>
    <button wire:click="$toggle('is_dark')">
        Toggle Dark Mode
    </button>
    <button x-on:click="$wire.$toggle('is_dark')">
        Toggle Dark Mode using Alpine
    </button>
    <hr>
    <h4>
        $set Magic Action
    </h4>
    <p>
        Working with $set
    </p>
    <p>
        Username: {{ $username }}
    </p>

</div>
