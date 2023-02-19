<?php

namespace App\Services;

use App\Mail\SendCodeToThePlayer;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SendCodeMailToThePlayer
{
    public static function send($player)
    {
        Mail::to($player->email)->send(new SendCodeToThePlayer([
            'result' => $player->result,
            'code' => $player->code,
            'result_url' => route('share-url', $player->slug),
            'username' => $player->username,
            'qrCode' => QrCode::size(200)->generate($player->code)
        ]));
    }
}
