<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\Post;

class BoardController extends Controller
{

    public function index() {
        $boardsId = Board::first()->id;
        $posts = Post::where('board_id', $boardsId)->get();
        return view('board.show')->with('posts', $posts);
        // return response() -> json(['no' => 2, 'id' => $boardsId, 'posts' => $posts]);
    }

    public function manage() {
        $boards = Board::all();
        return view('board.manage')->with('boards', $boards);
    }

    public function create() {
        return view('board.create');
    }

    public function store(Request $request) {

        $newBoard = new Board;
        $newBoard -> name = $request -> name;
        $newBoard -> intro = $request -> intro;
        $newBoard -> type = $request -> type;
        $newBoard -> scope = $request -> scope;
        $newBoard -> save();

        return redirect()->route('board.show');
    }

    public function edit($id) {
        $board = Board::findOrFail($id);
        return view('board.edit', compact('board'));
    }

    public function update(Request $request) {

        $id = $request -> id;
        $name = $request -> name;
        $intro = $request -> intro;
        $type = $request -> type;
        $scope = $request -> scope;
        

        Board::where('id', $id)->update(
            [
                'name' => $name,
                'intro' => $intro,
                'type' => $type,
                'scope' => $scope,
            ]
        );

        return redirect()->route('board.show');

    }

    public function destroy($id) {

        Board::where('id', $id)->delete();

        return redirect()->route('board.show');
    }
}
