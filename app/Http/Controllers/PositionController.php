<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index(Request $request) {
        $positions = Position::all();
        $rptaJson = [
            'statusCode' => 200,
            'positions' => $positions
        ];
        return response()->json($rptaJson);
    }

    public function show(Position $position) {

        $rptaJson = [
            'statusCode' => 200,
            'position' => $position->players
        ];
        return response()->json($rptaJson);
    }
}
