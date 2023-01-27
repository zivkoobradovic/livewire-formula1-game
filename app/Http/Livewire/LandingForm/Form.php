<?php

namespace App\Http\Livewire\LandingForm;

use Livewire\Component;
use App\Models\GamePlayer;
use Illuminate\Support\Str;

class Form extends Component
{
    public $email;
    public $username;
    public $phone;
    public $avatar;

    public $player;
    public $newPlayer;
    public $playerExists;

    public $topTenPlayers;

    protected $rules = [
        'email' => 'required|email',
        'username' => 'required|unique:game_players',
    ];

    public function render()
    {
        $this->topTenPlayers =  GamePlayer::orderBy('result', 'asc')->where('status', '=', true)->take(10)->get();
        $this->player = GamePlayer::where('email', $this->email)->get()->first();

        if ($this->player) {
            $this->playerExists = true;
            $this->username = $this->player->username;
            $this->phone = $this->player->phone;
            $this->avatar = $this->player->avatar;
        } else {
            $this->playerExists = false;
            if(!$this->email) {
                $this->username = '';
                $this->phone = '';
                $this->avatar = '';
            }
        }
        return view('livewire.landing-form.form');
    }

    public function startNewGame()
    {
        $this->validate();
         $newPlayer = GamePlayer::create(
            [
                'email' => $this->email,
                'slug' => Str::random(12),
                'avatar' => $this->avatar,
                'username' => $this->username,
                'phone' => $this->phone,
            ]);
        return redirect()->route('start-game', ['player' => $newPlayer]);
    }

    public function playAgain() {
        return redirect()->route('start-game', ['player' => $this->player->slug]);
    }



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
