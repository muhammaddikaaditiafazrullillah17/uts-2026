<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;

class HomePage extends Component
{
    public function render()
    {
        $projects = Project::latest()->get();

        return view('livewire.home-page', [
            'projects' => $projects,
        ]);
    }
}