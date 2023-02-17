<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\support\Str;
use Illuminate\support\Facades\Storage;

class NewsController extends Controller{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }
    public function addnews()
    {
        return view('news.addnews');
    } 
    public function savenews(Request $request)
    {
        //Guardar imagen con storage disk
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        Storage::disk('public')->put($filename, $file);

        $news = new News;
        $news->title = $request->title;
        $news->key_name = Str::slug($request->title);
        $news->image= $filename;
        $news->description = $request->description;
        $news->save();
        return redirect('noticias');
    } 
    public function editnews($id)
    {
        $news=News::find($id);
        return view('editnews', compact('news'));
    } 
    public function updatenews(request $request, $id)
    {
        $news=News::find($id);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            Storage::disk('public')->put($filename, $file); 
        }
        else
        {
            $filename = $news->image;
        }

        $news->title = $request->title;
        $news->key_name = Str::slug($request->title);
        $news->image='';
        $news->description = $request->description;
        $news->save();
        return redirect('noticias');
    }
    public function deletenews($id)
    {
        News::find($id)->delete();
    }

}