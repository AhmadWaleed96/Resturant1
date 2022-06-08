<?php

namespace App\Http\Controllers;

use App\Models\Waiter;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waiters =Waiter::all();
        return response()->view('cms.waiter.index',compact('waiters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $waiters = Waiter::all();
        return response()->view('cms.waiter.create');
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
        'room_number'=>'required|string|min:3|max:20',
        'times'=>'required|string'
    ]);

        if(!$validator->fails()){
        $waiters = new Waiter();
        $waiters->table_number = $request->get('table_number');
        $waiters->meal_name = $request->get('meal_name');
        $waiters->quantity = $request->get('quantity');
        $waiters->price = $request->get('price');
        $isSaved = $waiters->save();
        if($isSaved){
            return response()->json(['icon' => 'success' , 'title' => 'تم اضافة الطلب بنجاح'] , 200);

        }
        else{
            return response()->json(['icon' => 'error' , 'title' => 'فشل اضافة الطلب'] , 400); 
        }
    }
        else{
            return response()->json(['icon'=>'error' , $validator->getMessageBag()->firat] , 400);
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
        $waiters = Waiter::findOrFail($id);
        return response()->view('cms.waiter.edit',compact('waiters'));
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
        $validator = validator($request->all(),[
            //    'room_number' =>'required|string|min:3|max:20',
            //    'times' =>'required',
               ]);
               if(!$validator->fails()){
                   $waiters = Waiter::findOrFail($id);
                   $waiters->room_number = $request->get('room_number');
                   $waiters->times = $request->get('times');
        
                   $isUpdate = $waiters->save();
                   return ['redirect' =>route('waiters.index')];
                   if($isUpdate){
                       return response()->json(['icon' => 'success' , 'title' =>'تم تعديل الطلب بنجاح'], 200);
                   }
                   else{
                    return response()->json(['icon' => 'error' , 'title' =>'فشل تعديل الطلب '], 400);
                   }
               }
               else{
                    return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()], 400);
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
        $waiters =Waiter::destroy($id);
        return response()->json(['icon'=>'success', 'title'=>'تم حذف الطلب بنجاح'],$waiters ? 200 :400);
    }
}
