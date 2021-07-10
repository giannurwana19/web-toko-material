<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['sliders'] = Slider::paginate(6);

        return view('sliders.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $image = $request->file('image');
        $imageName = 'slider-' . time() . '.' . $image->getClientOriginalExtension();

        $image->storeAs('images', $imageName);

        Slider::create([
            'image' => $imageName
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $this->data['slider'] = $slider;

        return view('sliders.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $image = $request->file('image');

        Storage::delete('images/' . $slider->image);

        $imageName = 'slider-' . time() . '.' . $image->getClientOriginalExtension();

        $image->storeAs('images', $imageName);

        $slider->update([
            'image' => $imageName
        ]);

        return redirect()->route('sliders.index')->with('success', 'Slider berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        Storage::delete('images/' . $slider->image);

        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider berhasil dihapus!');
    }
}
