<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home.index',[
            'homes'=> Home::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required',
            'twitter' => 'required',
            'github' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'image' => 'required'
        ], [
            'title.required' => 'Title is required !!',
            'twitter.required' => 'Twitter link is required !!',
            'github.required' => 'Github link is required !!',
            'instagram.required' => 'Instagram link is required !!',
            'linkedin.required' => 'Linkedin link is required !!',
            'image.required' => 'Image field is required !!'
        ]);
        $home = new Home();
        $home->title = $request->title;
        $home->twitter = $request->twitter;
        $home->github = $request->github;
        $home->instagram = $request->instagram;
        $home->linkedin = $request->linkedin;
        $home->image = $this->saveImage($request);
        $home->save();
        Toastr::success('Home Content Add Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
    public function saveImage($request){
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalName();
        $dir  ='upload/home_image/';
        $imageUrl = $dir.$imageName;
        $image->move($dir,$imageName);
        return $imageUrl;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.home.edit',[
            'home'=>Home::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $home = Home::find($id);
        $home->title = $request->title;
        $home->twitter = $request->twitter;
        $home->github = $request->github;
        $home->instagram = $request->instagram;
        $home->linkedin = $request->linkedin;
        if ($request->file('image')){
            if ($home->image !=null){
                unlink($home->image);
            }
            $home->image = $this->saveImage($request);
        }
        $about->status= $request->status;
        $home->save();
        Toastr::success('Home Content Update Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return redirect(route('home.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home = Home::find($id);
        if ($home->image){
            unlink($home->image);
        }
        $home->delete();
        Toastr::success('Home Content Delete Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }

    public function status($id){
        $home = Home::find($id);
            if ($home->status==1){
                $home->status=0;
            }else{
                $home->status=1;
            }
        $home->save();
        Toastr::success('Status Change Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
}
