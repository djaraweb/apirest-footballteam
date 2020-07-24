<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
// Modelos:
use App\Player;
use App\Team;

class PlayerController extends Controller
{
    use ApiResponser;

    public function index(Request $request){
        $players = Player::all();

        return $this->messageCustom(['players'=>$players]);
    }

    public function show(Player $player) {
        return $this->messageCustom(['player'=>$player]);
    }

    public function teamsforplayer(Player $player) {

        $teamsPlayer = Team::join('player_team','teams.id','player_team.team_id')
                            ->where('player_team.player_id', $player->id)
                            ->get();

        return $this->messageCustom(['teams'=>$teamsPlayer]);
    }

    public function save(Request $request) {
        $validator = Validator::make($request->all(), [
            'name_player' => 'required|max:100',
            'position_id' => 'required|numeric',
            'goals' => 'required|numeric',
        ], [
            'name_player.required' => '(Nombre Jugador) El campo es requerido',
            'position_id.required' => '(Posición) El campo es requerido',
            'goals.required' => '(Goles) El campo es requerido',

            'position_id.numeric' => '(Posición) El campo debe ser un Número',
            'goals.numeric' => '(Goles) El campo debe ser un Número',
        ]);

        if ($validator->fails()) {
            return $this->responseToError(['errors'=> $validator->messages()],422);
        }

        Player::create($request->all());

        return $this->messageCustom(['message'=>'Registro Grabado Correctamente']);

    }

}
