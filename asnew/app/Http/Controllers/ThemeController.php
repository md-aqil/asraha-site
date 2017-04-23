<?php

namespace App\Http\Controllers;

use App\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $themes = Theme::all();
        return view('templates.template', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thumb = $this->storeThumb($request->file('thumb'));
        $template = $this->storeTemplate($request->file('template'));
        Theme::create($request->except('_token', 'thumb', 'template') + compact('thumb', 'template'));
        return back()->with('success', 'Your Winner has been saved!');
    }

     protected function storeThumb($image) {
          $ext = $image->getClientOriginalExtension();
          $name = str_random(20);
          $image->move(public_path() . '/img/winner', $name . '.' . $ext );
          return "/img/winner/{$name}.{$ext}";
    }

    protected function storeTemplate($image) {
        $ext = $image->getClientOriginalExtension();
        $name = str_random(20);
        $image->move(resource_path('templates'), $name . '.' . $ext );
        return sprintf('%s/%s.%s', resource_path('templates'), $name, $ext);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $theme = Theme::find($id);
       $theme->delete();
       return back()->with('success', 'Your Winner has been deleted!');
    }

    public function download($id) {
        $theme = Theme::find($id);
        if(!$theme) abort(404);
        return response()->download($theme->template);
    }
}
