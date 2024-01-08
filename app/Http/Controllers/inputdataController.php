<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inputdata;

class inputdataController extends Controller
{
    public function inputdata()
    {
        $images = inputdata::all(); // use a plural variable name
        return view('inputdata', compact('images'));
    }
    public function informasi()
    {
        $images = inputdata::all(); // use a plural variable name
        return view('informasi', compact('images'));
    }

    public function test()
    {
        $images = inputdata::all(); // use a plural variable name
        return view('test', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = new inputdata;
        $image->title = $request->title;
        $image->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $image->image_path = 'uploads/' . $imageName;
        }

        $image->save();

        return redirect()->route('inputdata')->with('success', 'Data berhasil di tambahkan !');
    }

    public function edit($id)
    {
        $image = inputdata::findOrFail($id);
        return view('edit_inputdata', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,|max:2048',
        ]);

        $image = inputdata::findOrFail($id);

        $image->title = $request->title;
        $image->description = $request->description;

        if ($request->hasFile('image')) {
            // Hapus file lama sebelum menyimpan yang baru
            unlink(public_path($image->image_path));

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $image->image_path = 'uploads/' . $imageName;
        }

        $image->save();

        return redirect()->route('inputdata')->with('success', 'Data berhasil di  updated !');
    }

    public function destroy($id)
    {
        $image = inputdata::findOrFail($id);
        unlink(public_path($image->image_path));
        $image->delete();
    
        return redirect()->route('inputdata')->with('success', 'Data berhasil di hapus !');
    }
    
}
