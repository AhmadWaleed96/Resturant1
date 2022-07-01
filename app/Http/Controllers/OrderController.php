<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::orderBy("id",'desc')->get();
        return response()->view('cms.order.index' , compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items=item::all();
        return response()->view('cms.order.create',compact('items'));
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

        ]);

        if(! $validator->fails()){
            $orders=new Order();
            $orders->date_time=$request->get('date_time');
            $orders->date_day=$request->get('date_day');
            $orders->item_id=$request->get('item_id');

           
                $isSaved=$orders->save();
                if($isSaved){
                    return response()->json(['icon'=>'success','title'=>'تم تسجيل الطلب بنجاح'],200);
                }else{
                    return response()->json(['icon'=>'error','title'=>'فشل تسجيل الطلب  '],400);

                }

        }
        else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first()] , 400);
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
        $items=item::all();
        $orders=Order::findOrFail($id);
        return response()->view('cms.order.edit',compact('items','orders'));
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
            $orders=Order::findOrFail($id);
            $orders->date_time=$request->get('date_time');
            $orders->date_day=$request->get('date_day');
            $orders->item_id=$request->get('item_id');

           
                $isSaved=$orders->save();
                return ['redirect'=>route('orders.index')];
                if($isSaved){
                    return response()->json(['icon'=>'success','title'=>'تم تعديل الطلب بنجاح'],200);
                }else{
                    return response()->json(['icon'=>'error','title'=>'فشل تعديل الطلب  '],400);

                }

        }
        else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first()] , 400);
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
         Order::destroy($id);
    }
}
