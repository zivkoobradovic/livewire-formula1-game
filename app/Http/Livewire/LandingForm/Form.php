<?php

namespace App\Http\Livewire\LandingForm;

use Livewire\Component;
use App\Models\GamePlayer;
use App\Services\Translate;
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
    public $codeMessage;
    public $status;

    public $topTenPlayers;

    public $translate;
    public $language;

    protected $rules = [
        'username' => 'required|unique:game_players',
        'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:6',

    ];

    public function mount()
    {
        dd(session());
        $this->topTenPlayers =  GamePlayer::orderBy('result', 'asc')->where('status', '=', true)->take(10)->get();
        $this->translate = Translate::getTranslation();
        $this->language = session('lang');
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
        $this->validateOnly('email', ['email' => 'required|email:rfc,dns']);
        $this->player = GamePlayer::where('email', $this->email)->get()->first();
        if ($this->player && !$this->player->status) {
            // player exists without code
            $this->status = false;
            $this->playerExists = true;
            $this->checkingCode = false;
            $this->username = $this->player->username;
            $this->phone = $this->player->phone;
            $this->avatar = $this->player->avatar;
        }
        else if ($this->player && $this->email === $this->player->email && $this->player->status) {
            // player exists with code
            $this->status = true;
            $this->playerExists = true;
            $this->checkingCode = true;
        } else if (empty($this->player)) {
            // player doesn't exist
            $this->status = false;
            $this->playerExists = false;
            $this->checkingCode = false;
            $this->username = '';
            $this->phone = '';
            $this->avatar = '';
        }
    }

    // public function updatedCode($code)
    // {
    //     $this->validateOnly('code', ['code' => 'required']);
    //     if ($this->player->code === $code) {
    //         $this->correctCode = true;
    //     } else {
    //         $this->correctCode = false;
    //     }
    // }

    public function changeLanguage() {
        session(['lang' => $this->language]);
    }
}
