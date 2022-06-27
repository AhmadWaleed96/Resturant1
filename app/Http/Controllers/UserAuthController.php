<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function showLogin($guard){
        return response()->view('cms.Auth.login' , compact('guard'));
    }

    public function Login(Request $request){

        $validator = Validator($request->all() ,[
            'email' => 'required|string|email',
            'password' => 'required|string|min:6'

        ]);

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];
        if (!$validator->fails()) {
            if (Auth::guard($request->get('guard'))->attempt($credentials, $request->get('remember_me'))) {
                return response()->json(['icon' => 'success', 'title' => 'نجحت عملية تسجيل الدخول'], 200);
            } else {
                return response()->json(['icon' => 'error', 'title' => 'فشلت عملية تسجيل الدخول '], 400);
            }
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }

    public function Logout(Request $request){

        Auth::guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('view.login' , 'admin');
    }
    public function editProfile(Request $request){

        $admins = Admin::findOrFail(Auth::guard('admin')->id());
        $cities = City::all();
        return response()->view('cms.auth.edit-profile' , compact('admins' , 'cities') );
    }

    public function updateProfile(Request $request){
        $validator = Validator($request->all(),[

        ]);

        if(! $validator->fails()){
            $admins = Admin::findOrFail(Auth::guard('admin')->id);
            $admins->email = $request->get('email');

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/admin', $imageName);

                $admins->image = $imageName;

                }

                if (request()->hasFile('cv')) {

                $cv = $request->file('cv');

                $fileName = time() . 'cv.' . $cv->getClientOriginalExtension();

                $cv->move('storage/files/admin', $fileName);

                $admins->cv = $fileName;
                }


            $isSaved = $admins->save();
            if($isSaved){
                $users = $admins->users;
                $users->first_name = $request->get('first_name');
                $users->last_name = $request->get('last_name');
                $users->mobile = $request->get('mobile');
                $users->date_of_birth = $request->get('date_of_birth');
                $users->salary_type = $request->get('salary_type');
                $users->salary_value = $request->get('salary_value');
                $users->city_id = $request->get('city_id');
                $users->actor()->associate($admins);

                $isSaved = $users->save();
                // return ['redirect' =>route('admins.index')];

                return response()->json(['icon' => ' success' , 'title' => 'تم تعديل المشرف بنجاح'] , 200);

            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'فشل تعديل المشرف'] , 400);
            }
        }
            else{
                return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
            }
    }

}
