<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\GamePlayer;

class Listing extends Component
{
    public $topPlayers;
    public $latest50Players;


    public function mount() {
        $this->topPlayers =  GamePlayer::orderBy('result', 'asc')->take(10)->get();
        $this->latest50Players = GamePlayer::latest()->take(50)->get();
    }

    public function render()
    {
        return view('livewire.dashboard.listing');
    }
}
