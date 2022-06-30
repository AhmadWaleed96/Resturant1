<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\Kitchen;
use Illuminate\Http\Request;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=item::orderBy('id','desc')->get();
        return response()->view('cms.itme.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Kitchens=Kitchen::all();
        return response()->view('cms.itme.create',compact('Kitchens'));

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
            $itmes=new item();
            $itmes->name_product=$request->get('name_product');
            $itmes->price=$request->get('price');
            $itmes->kitchen_id=$request->get('kitchen_id');

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/item', $imageName);

                $itmes->image = $imageName;

                }
                $isSaved=$itmes->save();
                if($isSaved){
                    return response()->json(['icon'=>'success','title'=>'تم تسجيل الاصناف بنجاح'],200);
                }else{
                    return response()->json(['icon'=>'error','title'=>'فشل تسجيل الاصناف  '],400);

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
        $items=item::findOrFail($id);
        $Kitchens=Kitchen::all();
        return response()->view('cms.itme.edit',compact('Kitchens','items'));
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
            $itmes=item::findOrFail($id);
            $itmes->name_product=$request->get('name_product');
            $itmes->price=$request->get('price');
            $itmes->kitchen_id=$request->get('kitchen_id');

            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/item', $imageName);

                $itmes->image = $imageName;

                }
                $isSaved=$itmes->save();
                return ['redirect'=>route('items.index')];
                if($isSaved){
                    return response()->json(['icon'=>'success','title'=>'تم تعديل الاصناف بنجاح'],200);
                }else{
                    return response()->json(['icon'=>'error','title'=>'فشل تعديل الاصناف  '],400);

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
        item::destroy($id);
    }
}
