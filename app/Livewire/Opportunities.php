<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Item;
use Illuminate\Support\Facades\Cache;

class Opportunities extends Component
{
    use WithPagination;
    public $perPage = 20;
    public $sortColumn = 'id';
    public $isDesc = false;
    public $query = '';
    public $options = [20, 50, 100, 250];
    protected $queryString = ['perPage'];

    public function search()
    {
        $this->resetPage();
    }

    public function orderBy($sortColumn, $isDesc)
    {
        $this->sortColumn = $sortColumn;
        $this->isDesc = $isDesc;
        $this->resetPage();
    }

    public function updatedPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        $sortDirection = $this->isDesc ? 'desc' : 'asc';
        $cacheKey = "items_search:{$this->query}_sort:{$this->sortColumn}_{$sortDirection}_page:{$this->getPage()}_per_page:{$this->perPage}";

        $items = Cache::remember($cacheKey, 600, function () use ($sortDirection) {
            return Item::where('name', 'like', '%' . $this->query . '%')
                ->select('name')
                ->orderBy($this->sortColumn, $sortDirection)
                ->paginate($this->perPage);
        });

        return view('livewire.opportunities', [
            'items' => $items
        ]);
    }
}