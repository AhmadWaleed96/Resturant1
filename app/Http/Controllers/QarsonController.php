<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Qarson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class QarsonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qarsons=Qarson::with('user')->orderBy('id','desc')->paginate(5);
        return response()->view('cms.qarson.index',compact("qarsons"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities=City::all();
        return response()->view('cms.qarson.create',compact("cities"));
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
            $qarsons = new Qarson();
            $qarsons->email = $request->get('email');
            $qarsons->password = Hash::make($request->get('password'));
            $qarsons->working_period = $request->get('working_period');
        $isSaved = $qarsons->save();
        if($isSaved){

            $users = new User();
            $users->first_name = $request->get('first_name');
            $users->last_name = $request->get('last_name');
            $users->mobile = $request->get('mobile');
            $users->date_of_birth = $request->get('date_of_birth');
            $users->salary_type = $request->get('salary_type');
            $users->salary_value = $request->get('salary_value');
            $users->city_id = $request->get('city_id');
            $users->actor()->associate($qarsons);
            $isSaved = $users->save();

            return response()->json(['icon' => 'success' , 'title' => 'تم إضافة القرصون بنجاح'] , 200);

        }
        else{
            return response()->json(['icon' => 'error' , 'title' => 'فشلت إضافة القرصون'] , 400);
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
        $qarsons=Qarson::findOrFail($id);
        $cities=City::all();
        return response()->view("cms.qarson.edit",compact('cities','qarsons'));

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
            // 'image'=>"image|max:2048|mimes:png,jpg,jpeg,pdf",

        ]);

        if(! $validator->fails()){
            $qarsons = Qarson::findOrFail($id);
            $qarsons->email = $request->get('email');
            $qarsons->working_period = $request->get('working_period');
        $isSaved = $qarsons->save();
        if($isSaved){

            $users = $qarsons->user;
            $users->first_name = $request->get('first_name');
            $users->last_name = $request->get('last_name');
            $users->mobile = $request->get('mobile');
            $users->date_of_birth = $request->get('date_of_birth');
            $users->salary_type = $request->get('salary_type');
            $users->salary_value = $request->get('salary_value');
            $users->city_id = $request->get('city_id');
            $users->actor()->associate($qarsons);
            $isSaved = $users->save();
            return ['redirect'=>route('qarsons.index')];

            return response()->json(['icon' => 'success' , 'title' => 'تم إضافة القرصون بنجاح'] , 200);

        }
        else{
            return response()->json(['icon' => 'error' , 'title' => 'فشلت إضافة القرصون'] , 400);
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
        Qarson::destroy($id);
    }
}
