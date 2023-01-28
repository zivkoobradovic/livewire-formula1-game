<?php

namespace App\Http\Livewire\LandingForm;

use Livewire\Component;
use App\Models\GamePlayer;
use Illuminate\Support\Str;

class Form extends Component
{
    public $correctCode = false;
    public $code;
    public $checkingCode = false;
    public $email;
    public $username;
    public $phone;
    public $avatar;

    public $player;
    public $newPlayer;
    public $playerExists;

    public $topTenPlayers;

    protected $rules = [
        'username' => 'required|unique:game_players',
        'phone' => 'integer',

    ];

    public function mount()
    {
        $this->topTenPlayers =  GamePlayer::orderBy('result', 'asc')->where('status', '=', true)->take(10)->get();
    }

    public function render()
    {
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
            ]
        );
        return redirect()->route('start-game', ['player' => $newPlayer]);
    }

    public function playAgain()
    {
        return redirect()->route('start-game', ['player' => $this->player->slug]);
    }



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function updatedEmail($email)
    {
        $this->validateOnly('email', ['email' => 'required|email']);
        $this->player = GamePlayer::where('email', $this->email)->get()->first();
        if (empty($this->player)) {
            $this->playerExists = false;
            $this->checkingCode = false;
            $this->username = '';
            $this->phone = '';
        } else if ($this->player && $this->email === $this->player->email) {
            $this->checkingCode = true;
            $this->playerExists = true;
        }
    }

    public function updatedCode($code)
    {
        $this->validateOnly('code', ['code' => 'required']);
        if ($this->player->code === $code) {
            $this->correctCode = true;
        }
    }
}
