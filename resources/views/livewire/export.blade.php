<div>
    <h1>
        Export Component
    </h1>
    <p>
        Request to export your account data
    </p>
    <hr>
    <h5>
        Current Status:
        @empty($downloadable_at)
            NOT REQUESTED
        @else
            @if(time() >= $downloadable_at)
                READY TO DOWNLOAD
            @else
                PENDING
            @endif
        @endempty
    </h5>
    @if($downloadable_at)
        <p>
            {{ \Carbon\Carbon::createFromTimestamp($downloadable_at)->diffForHumans() }}
        </p>
    @endif
    <hr>
    @empty($downloadable_at)
        <form wire:submit="export" wire:confirm="Are you sure?">
            <button type="submit">
                Export My Data
            </button>
        </form>
    @else
        @if(time() >= $downloadable_at)
            <button wire:click="$commit">
                Download my data
            </button>
        @else
            <button wire:click="$refresh">
                Refresh Status
            </button>
            <button x-on:click="$wire.$refresh">
                Refresh using Alpine
            </button>
        @endif
    @endif
</div>
