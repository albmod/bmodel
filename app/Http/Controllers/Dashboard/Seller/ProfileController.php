<?php

namespace App\Http\Controllers\Dashboard\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {

        $this->middleware(['auth']);



    }



    public function editProfile()
    {

        $seller = User::find(auth()->user()->id);

        return view('sellers.profile.edit', compact('seller'));

    }

    public function updateProfile(ProfileRequest $request)
    {
        //validate
        // db

        try {

            $seller = User::find(auth()->user()->id);


            if ($request->filled('password')) {
                $request->merge(['password' => bcrypt($request->password)]);
            }

            unset($request['id']);
            unset($request['password_confirmation']);

            $seller->update($request->all());

            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاولة فيما بعد']);

        }

    }



}
