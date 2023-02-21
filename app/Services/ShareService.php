<?php

namespace App\Services;

class ShareService
{

    public static function share($player)
    {
        return \Share::page(
            route('share-url', $player->slug),
            'Check My Result!',
        )
            ->facebook()
            ->twitter()
            ->telegram()
            ->whatsapp()
            ->reddit();
    }
}
