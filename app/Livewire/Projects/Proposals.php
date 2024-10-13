<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;

class Proposals extends Component
{
    public Project $project;
    public int $proposalsPerPage = 10;

    #[On('proposal::created')]
    public function render()
    {
        return view('livewire.projects.proposals');
    }

    #[Computed()]
    public function proposals()
    {
        return $this->project->proposals()
            ->orderBy('hours')
            ->paginate($this->proposalsPerPage);
    }

    public function loadMore()
    {
        $this->proposalsPerPage += 10;
    }

    #[Computed()]
    public function lastProposalTime()
    {
        return $this->project->proposals()->latest()->first()->created_at->diffForHumans();
    }
}
