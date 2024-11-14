<div>
    <!-- Items per page selection -->
    <div>
        <form wire:submit="search">
            <input type="text" wire:model="query">
            <button type="submit">Search posts</button>
        </form>
        <button wire:click="orderBy('id', false)"> Sort by Id ASC </button>
        <button wire:click="orderBy('id', true)"> Sort by Id DESC </button>
        <button wire:click="orderBy('name', false)"> Sort by Name ASC </button>
        <button wire:click="orderBy('name', true)"> Sort by Name DESC </button>
        <label for="perPage">Items per page:</label>
        <select wire:model.live="perPage" id="perPage">
            @foreach($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>
    <!-- Items list -->
    <div>
        @foreach($items as $item)
        <div>{{ $item->name }}</div>
        @endforeach
    </div>
    <!-- Pagination links -->
    {{ $items->links() }}
</div>