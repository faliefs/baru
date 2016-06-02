<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Image;
 
class ImageController extends Controller
{
 
    public function index()
    {
        $images = Image::all();
        return view('images.index')->with('images', $images);
    }
 
    public function create()
    {
        return view('images.create');
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'tittle' => ['required', 'min:5'],
            'photo' => ['mimes:jpg,jpeg,JPEG,png,gif,bmp', 'max:2024'],
        ]);
 
        $data = $request->all();
 
        $photo = $request->file('photo')->getClientOriginalName();
        $destination = base_path() . '/public/uploads';
        $request->file('photo')->move($destination, $photo);
 
        $data['photo'] = $photo;
 
        Image::create($data);
 
        return redirect()->route('images.index')->with('message', 'Image Saved');
    }
}