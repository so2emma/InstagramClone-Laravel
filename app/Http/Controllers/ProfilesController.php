<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function show(User $user)
    {
        return view('profile/index', compact('user'));
    }


    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profile/edit', compact('user'));
    }


    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'nullable|url',
            'image'=>'',
        ]);

        auth()->$user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
