<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    public function index()
    {
//      return view('Map.index');
        $list = new Board();
        return view('Map.index', ['list' => $list->all()]);
    }

    public function runMap()
    {
        return view('Map.map');
    }

    public function create(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'content' => 'required',
            'point' => 'required',
        ]);

        dd(
            $request->file('file')->getClientOriginalName(),
            $request->input('content'),
            $request->input('point'),
        );

        $board = new Board();
        $path_file = 'public/img';
        $image_name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs($path_file, $image_name);
        $board->file = $request->file('file')->getClientOriginalName();
        $board->content = $request->input('content');
        $board->point = $request->input('point');
        $board->save();
        return view('Map.index', ['list' => $board->all()]);
    }

    public function edit(Request $request)
    {
        $post = new Board();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $post = DB::select('select * from boards where id =:id', ['id' => $id]);
        }
        return view('Map.edit', ['post' => $post]);
    }

    public function update(Request $request)
    {

        $request->validate([
            'file' => 'required',
            'content' => 'required',
            'point' => 'required',
        ]);


//        dd(
//            $request->file('file')->getClientOriginalName(),
//            $request->input('content'),
//            $request->input('point'),
//            $request->input('id')
//        );

        $path_file = 'public/img';
        $image_name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs($path_file, $image_name);
        $file = $request->file('file')->getClientOriginalName();
        $content = $request->input('content');
        $point = $request->input('point');
        $id = $request->input('id');

//        DB::update('update boards set file = ?,
//        content=?, point=?, created_at=?, updated_at=? where id = ?', [$file, $content, $point, null, null, $id]);

        DB::update('update boards set file = ?,
        content=?, point=?  where id = ?', [$file, $content, $point, $id]);

        return response()->redirectTo('/test');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        DB::delete('delete from boards where id =:id', ['id' => $id]);
        return response()->redirectTo('/');
    }

    public function test()
    {
        return view('Map.test');
    }
}
