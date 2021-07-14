<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $this->data['profile'] = Profile::firstOrFail();

        return view('profiles.index', $this->data);
    }

    /**
     * edit
     *
     * @return void
     */
    public function edit()
    {
        $this->data['profile'] = Profile::firstOrFail();

        return view('profiles.edit', $this->data);
    }

    /**
     * update
     *
     * @return void
     */
    public function update(ProfileRequest $request)
    {
        $data = $request->validated();
        $data['message'] = encodeMessage($data['message']);
        $image = $request->file('image');
        $profile = Profile::first();

        if ($image) {
            Storage::delete('images/' . $profile->image);
            $data['image'] = 'profile-' . time() . '.' . $image->getClientOriginalExtension();
            // store image
            $image->storeAs('images', $data['image']);
        } else {
            $data['image'] = $profile->image;
        }

        $profile->update($data);

        return redirect()->route('profiles.index')->with('success', 'Profile toko berhasil di ubah!');
    }
}
