<?php

namespace App\Http\Controllers;

use App\Models\About;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use function Symfony\Component\HttpKernel\HttpCache\save;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index',[
            'abouts'=> About::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'image' => 'required',
            'resume' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'birthday' => 'required',
            'age' => 'required',
            'country' => 'required',
            'city' => 'required',
            'degree' => 'required',
            'email' => 'required',
        ], [
            'image.required' => 'Image field is required !!',
            'resume.required' => 'Resume field is required !!',
            'title_1.required' => 'Title_1 is required !!',
            'title_2.required' => 'Title_2 is required !!',
            'title_3.required' => 'Title_3 is required !!',
            'birthday.required' => 'Birthday is required !!',
            'age.required' => 'Age is required !!',
            'country.required' => 'Country is required !!',
            'city.required' => 'City is required !!',
            'degree.required' => 'Degree is required !!',
            'email.required' => 'Email is required !!',
        ]);
        $about = new About();
        $about->image = $this->saveImage($request);
        $about->resume = $this->saveResume($request);
        $about->title_1 = $request->title_1;
        $about->title_2 = $request->title_2;
        $about->title_3= $request->title_3;
        $about->birthday= $request->birthday;
        $about->age= $request->age;
        $about->country= $request->country;
        $about->city= $request->city;
        $about->degree= $request->degree;
        $about->email= $request->email;
        $about->save();
        Toastr::success('About Add Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
    public function saveImage($request){
        $image = $request->file('image');
        $imageName = rand().'.'.$image->getClientOriginalName();
        $dir  ='upload/about_image/';
        $imageUrl = $dir.$imageName;
        $image->move($dir,$imageName);
        return $imageUrl;
    }
    public function saveResume($request){
        $image = $request->file('resume');
        $imageName = rand().'.'.$image->getClientOriginalName();
        $dir = 'upload/resume/';
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
        return view('admin.about.edit',[
            'about'=>About::find($id),
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
        $about = About::find($id);
        if ($request->file('image')){
            if ($about->image !=null){
                unlink($about->image);
            }
            $about->image = $this->saveImage($request);
        }
        $about->title_1 = $request->title_1;
        $about->title_2 = $request->title_2;
        $about->title_3= $request->title_3;
        $about->birthday= $request->birthday;
        $about->age= $request->age;
        $about->country= $request->country;
        $about->city= $request->city;
        $about->degree= $request->degree;
        $about->email= $request->email;
        $about->status= $request->status;
        $about->save();
        Toastr::success('About Update Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        if ($about->image){
            unlink($about->image);
        }
        $about->delete();
        Toastr::success('About Content Delete Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
    public function status($id){
        $about = About::find($id);
        if ($about->status==1){
            $about->status=0;
        }else{
            $about->status=1;
        }
        $about->save();
        Toastr::success('Status Change Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
}
