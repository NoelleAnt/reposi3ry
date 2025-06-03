<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    protected $game_list;

    public function __construct()
    {
        // Load the game list from the datasource.php file
        $this->game_list = require __DIR__ . '/../../../database/datasource.php';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('games.list', ['games' => $this->game_list]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Filter the game list to find the game with the specified ID
        $game = array_values(array_filter($this->game_list, function ($game) use ($id) {
            return $game['id'] == $id;
        }));

        // Check if a game was found
        if (empty($game)) {
            return response()->json(['message' => 'Game not found.'], 404);
        }

        // Return the view with the found game
        return view('games.show', ['game' => $game[0]]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Filter out the game with the specified ID
        $this->game_list = array_values(array_filter($this->game_list, function ($game) use ($id) {
            return $game['id'] != $id;
        }));

        // Return a success response
        return response()->json([
            'message' => 'Record Successfully Deleted.',
            'content' => $this->game_list
        ], 200);
    }
}