<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = GeneralSetting::get()->first();
        return view('backend.settings.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.settings.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $settings = new GeneralSetting();
        $settings->name = $request->name;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->location = $request->location;
        $settings->map = $request->map;
        // $settings->logo = $request->logo;
        if($request->hasFile('logo')){
            $fileName = $request->logo;
            $newName = time(). $fileName->getClientOriginalName();
            $fileName->move('generalSettings',$newName);
            $settings->logo = 'generalSettings/' . $newName;
        }
        $settings->save();
        $request->session()->flash('message','Record Saved');
        return redirect()->back();
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
        $setting = GeneralSetting::find($id);
        return view('backend.settings.edit',compact('setting'));
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
        $settings = GeneralSetting::find($id);
        $settings->name = $request->name;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->location = $request->location;
        $settings->map = $request->map;
        // $settings->logo = $request->logo;
        if($request->hasFile('logo')){
            $fileName = $request->logo;
            $newName = time(). $fileName->getClientOriginalName();
            $fileName->move('generalSettings',$newName);
            $settings->logo = 'generalSettings/' . $newName;
        }
        $settings->update();
        $request->session()->flash('message','Record Updated!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
