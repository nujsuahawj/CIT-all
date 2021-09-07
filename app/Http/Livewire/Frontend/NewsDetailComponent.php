<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\News;

class NewsDetailComponent extends Component
{
    public $hiddenId;

    public function mount($id)
    {
        $news = News::find($id);
        $this->hiddenId = $news->id;
    }

    public function render()
    {
        $news = News::where('id', $this->hiddenId)->first();
        return view('livewire.frontend.news-detail-component', compact('news'))
        ->layout('layouts.frontend.base-frontend');
    }
}
