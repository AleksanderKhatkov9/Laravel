<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    public function index()
    {
//        return view('Map.index');
        $list = new Board();
        return view('Map.index', ['list' => $list->all()]);
    }

    public function runMap()
    {
        return view('Map.map');
    }

    public function create(Request $request)
    {
        $valid = $request->validate([
            'file' => 'required|min:4|max:500',
            'content' => 'required|min:15|max:500',
            'location' => 'required|min:15|max:500',
        ]);

        $board = new Board();
        $path_file = 'public/img';
        $image_name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs($path_file, $image_name);
        $board->file = $request->file('file')->getClientOriginalName();
        $board->content = $request->input('content');
        $board->location = $request->input('location');
        $board->save();
        return view('Map.index', ['list' => $board->all()]);
    }

    public function edit(Request $request)
    {
//        $post = new Board();
//        $id = $request->id;
//        $id = $_GET['id'];
//        dd($id);
//            $post = DB::select('select * from boards where id =:id', ['id' => $id]);
//        return view('Map.edit', ['post' => $post]);

        $postBoard = new Board();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $postBoard = DB::select('select * from boards where id =:id', ['id' => $id]);
//            dd($post);
        }
        return view('Map.edit', ['post' => $postBoard]);
    }

    public function getMap(){
        $list = new Board();
        return view('Map.map', ['list' => $list->all()]);
    }

}
