<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service.index',[
            'services'=> Service::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            'title1' => 'required',
            'title2' => 'required',
            'title3' => 'required',
        ], [
            'title1.required' => 'Title field is required !!',
            'title2.required' => 'Title field is required !!',
            'title3.required' => 'Title field is required !!',
        ]);
        $service = new Service();
        $service->title1 = $request->title1;
        $service->sub_title1 = $request->sub_title1;
        $service->title2 = $request->title2;
        $service->sub_title2 = $request->sub_title2;
        $service->title3 = $request->title3;
        $service->sub_title3 = $request->sub_title3;
        $service->save();
        Toastr::success('Service Add Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
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
        return view('admin.service.edit',[
            'service'=>Service::find($id),
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
        $service = Service::find($id);
        $service->title1 = $request->title1;
        $service->sub_title1 = $request->sub_title1;
        $service->title2 = $request->title2;
        $service->sub_title2 = $request->sub_title2;
        $service->title3 = $request->title3;
        $service->sub_title3 = $request->sub_title3;
        $service->save();
        Toastr::success('Service Update Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        Toastr::success('Service Delete Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
    public function status($id){
        $service = Service::find($id);
        if ($service->status==1){
            $service->status=0;
        }else{
            $service->status=1;
        }
        $service->save();
        Toastr::success('Status Change Successfully', '', ["positionClass" => "toast-top-right mt-5"]);
        return back();
    }
}
