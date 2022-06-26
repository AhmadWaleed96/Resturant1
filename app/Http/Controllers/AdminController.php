<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
        $admins = Admin::all();
        return response()->view('cms.admin.create' , compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all()

    );
        if(! $validator->fails()){
            $admins = new Admin();
            $admins->email = $request->get('email');
            $isSaved = $admins->save();

            if($isSaved){
                return response()->json(['icon' => 'success' , 'title' => 'تم إضافة الحجز بنجاح'] , 200);

            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'فشلت إضافة الحجز'] , 400);
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
