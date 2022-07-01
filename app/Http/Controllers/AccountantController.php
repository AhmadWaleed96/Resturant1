<?php

namespace App\Http\Controllers;

use App\Models\Accountant;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountants=Accountant::with('city')->orderBy("id",'desc')->get();
        return response()->view('cms.accountant.index',compact('accountants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities=City::all();
        return response()->view('cms.accountant.create',compact('cities'));
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
            $accountants = new Accountant();
            $accountants->email = $request->get('email');
            $accountants->password = Hash::make($request->get('password'));
            $accountants->first_name = $request->get('first_name');
            $accountants->last_name = $request->get('last_name');
            $accountants->mobile = $request->get('mobile');
            $accountants->date_of_birth = $request->get('date_of_birth');
            $accountants->gender = $request->get('gender');
            $accountants->age = $request->get('age');
            $accountants->city_id = $request->get('city_id');
            
        $isSaved = $accountants->save();
        if($isSaved){
            return response()->json(['icon' => 'success' , 'title' => 'تم إضافة المحاسب بنجاح'] , 200);
        }
        else{
            return response()->json(['icon' => 'error' , 'title' => 'فشلت إضافة محاسب'] , 400);
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
        $accountants=Accountant::findOrFail($id);
        $cities=City::all();
        return response()->view('cms.accountant.edit',compact('accountants','cities'));
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
            $accountants = Accountant::findOrFail($id);
            $accountants->email = $request->get('email');
            $accountants->first_name = $request->get('first_name');
            $accountants->last_name = $request->get('last_name');
            $accountants->mobile = $request->get('mobile');
            $accountants->date_of_birth = $request->get('date_of_birth');
            $accountants->gender = $request->get('gender');
            $accountants->age = $request->get('age');
            $accountants->city_id = $request->get('city_id');
            
        $isSaved = $accountants->save();
        if($isSaved){
            return response()->json(['icon' => 'success' , 'title' => 'تم تعديل المحاسب بنجاح'] , 200);
        }
        else{
            return response()->json(['icon' => 'error' , 'title' => 'فشلت تعديل محاسب'] , 400);
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
        Accountant::destroy($id);
    }
}
