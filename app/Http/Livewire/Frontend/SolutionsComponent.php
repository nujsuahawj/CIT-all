<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Solution;

class SolutionsComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
        
    public $search;
        
    public function render()
    {
        $solutions = Solution::orderBy('id','desc')
            ->where('name_la','like', '%'. $this->search . '%')
            ->where('name_en','like', '%'. $this->search . '%')
            ->where('status',1)->paginate(20);

        return view('livewire.frontend.solutions-component', compact('solutions'))
        ->layout('layouts.frontend.base-frontend');
    }
}
