<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index()
    {
      $tags = Tag::all();

      return view('addtag', compact('tags'));
    }

    public function store(Request $request)
    {
      $this->validate(request(), [
        'name' => 'required'
      ]);

      $tag = Tag::create([
        'name' => $request->name,
      ]);

      return redirect('/addtag');
    }

    public function edit()
    {
      $tags = Tag::all();

      return view('edittag', compact('tags'));
    }

    public function update(Request $request, $tagid)
    {
      $tag = Tag::find($tagid);

      if ($request->has('name') && $request->name !== false) {
        $tag->name = $request->name;
      }

      $tag->save();

      return redirect('/edittag');

    }

    public function delete()
    {
      $tags = Tag::all();

      return view('deletetag', compact('tags'));
    }

    public function destroy(Request $request, $tagid)
    {
      $tag = Tag::find($tagid);

      $tag->product()->sync([]);

      $tag->delete();

      return redirect('/deletetag');
    }
}
