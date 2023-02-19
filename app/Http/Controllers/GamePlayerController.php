<?php

namespace App\Http\Controllers;

use App\Models\GamePlayer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Services\ShareService;
use App\Exports\ExportGameplayers;
use App\Services\SendCodeMailToThePlayer;

class GamePlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        empty(session('lang')) ? session(['lang' => 'eng']) : session('lang');
        return view('game-player.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GamePlayer  $gamePlayer
     * @return \Illuminate\Http\Response
     */
    public function show(GamePlayer $player)
    {
        return view('game-player.results', ['player' => $player, 'shareComponent' => ShareService::share($player)]);
    }


    public function startGame(GamePlayer $player)
    {
        return view('game-player.start-game', ['player' => $player]);
    }


    public function endGame(GamePlayer $player)
    {

        $player->result = request('result');
        !$player->code ? $player->code = Str::random(8) : $player->code;
        $player->status = true;
        $player->save();

        SendCodeMailToThePlayer::send($player);

        return view('game-player.results', ['player' => $player, 'shareComponent' => ShareService::share($player)]);
    }

    public function export()
    {
        return Excel::download(new ExportGameplayers, 'gameplayers.xlsx');
    }

    public function topTen() {
        $topTenPlayers =  GamePlayer::orderBy('result', 'asc')->take(10)->get();
        return view('game-player.top-ten', ['topTenPlayers' => $topTenPlayers]);
    }
}
