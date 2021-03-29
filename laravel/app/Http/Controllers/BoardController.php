<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function index() {
        $boards = Board::all();
        return view('board.show')->with('boards', $boards);
    }
}
