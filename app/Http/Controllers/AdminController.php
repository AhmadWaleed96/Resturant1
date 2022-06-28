<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::with('user')->orderBy('id', 'desc')->paginate(5);
        // $this->authorize('viewAny' , Admin::class);
        return response()->view('cms.admin.index' , compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities=City::all();
        return response()->view('cms.admin.create' , compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator($request->all(),[
            // 'image'=>"image|max:2048|mimes:png,jpg,jpeg,pdf",

        ]);

        if(! $validator->fails()){
            $admins = new Admin();
            $admins->email = $request->get('email');
            $admins->password = Hash::make($request->get('password'));

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

            $users = new User();
            // $roles = Role::findOrFail($request->get('role_id'));
            // $admins->assignRole($roles->name);
            $users->first_name = $request->get('first_name');
            $users->last_name = $request->get('last_name');
            $users->mobile = $request->get('mobile');
            $users->date_of_birth = $request->get('date_of_birth');
            $users->salary_type = $request->get('salary_type');
            $users->salary_value = $request->get('salary_value');
            $users->city_id = $request->get('city_id');
            $users->actor()->associate($admins);
            $isSaved = $users->save();

            return response()->json(['icon' => 'success' , 'title' => 'تم إضافة المشرف بنجاح'] , 200);

        }
        else{
            return response()->json(['icon' => 'error' , 'title' => 'فشلت إضافة المشرف'] , 400);
        }
    }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
        }

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
        $admins = Admin::findOrFail($id);
          return response()->view('cms.admin.edit' , compact('admins'));
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
        $validator = Validator($request->all(),[

        ]);

        if(! $validator->fails()){
            $admins = Admin::findOrFail($id);
            $admins->email = $request->get('email');
            $admins->password = Hash::make($request->get('password'));

            if (request()->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . 'image.' . $image->getClientOriginalExtension();

            $image->move('images/admin', $imageName);

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
                $users = $admins->user;
                $users->first_name = $request->get('first_name');
                $users->last_name = $request->get('last_name');
                $users->number = $request->get('number');
                $users->age = $request->get('age');
                $users->email = $request->get('email');
                $users->password = $request->get('password');
                $users->city = $request->get('city');
                $users->gender = $request->get('gender');
                $users->actor()->associate($admins);

                $isSaved = $users->save();
                return ['redirect' =>route('admins.index')];

                return response()->json(['icon' => 'success' , 'title' => 'تم تعديل المشرف بنجاح'] , 200);

            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'فشل تعديل المشرف'] , 400);
            }
        }
            else{
                return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins =Admin::destroy($id);
        return response()->json(['icon'=>'success', 'title'=>'تم حذف الدبلومة بنجاح'],$admins ? 200 :400);
    }
}
