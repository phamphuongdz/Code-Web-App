<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){
        return Player::all();
    }
    public function store(Request $request){
       $player = Player::create($request->all());
       return response()->json($player, 201);
    }
    public function update(Request $request, $id){
        $player = Player::findOrFail($id);
        $player->update($request->all());
        return response()->json($player);
    }

    public function destroy($id){
        Player::destroy($id);
        return response()->json(null, 204);
    }
}