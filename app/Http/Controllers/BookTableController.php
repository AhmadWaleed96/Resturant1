<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use Illuminate\Http\Request;

class BookTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booktables = BookTable::orderBy('id' ,'desc')->paginate(10);
        return response()->view('cms.book_table.index' , compact('booktables'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return response()->view('cms.book_table.create');
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
            $booktables = new BookTable();
            $booktables->name = $request->get('name');
            $booktables->email = $request->get('email');
            $booktables->mobile = $request->get('mobile');
            $booktables->time = $request->get('time');
            $booktables->number_of_people = $request->get('number_of_people');
            $booktables->date = $request->get('date');
            $booktables->nots = $request->get('nots');

        $isSaved = $booktables->save();
        if($isSaved){
            return response()->json(['icon' => 'success' , 'title' => 'تم إضافة الحجز بنجاح '] , 200);
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
        $booktables = BookTable::findOrFail($id);
        return response()->view('cms.book_Table.show' , compact('booktables'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booktables = BookTable::findOrFail($id);
        return response()->view('cms.book_Table.edit' , compact('booktables'));
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
        $validator = Validator($request->all(), [
            // 'name' => 'required|string|min:3|max:20',
            // 'email' => 'required|string|min:7|max:30',
        ]);

        if(!$validator->fails()){

            $booktables = BookTable::findOrFail($id);
            $booktables->name = $request->get('name');
            $booktables->email = $request->get('email');
            $booktables->mobile = $request->get('mobile');
            $booktables->date = $request->get('date');
            $booktables->time = $request->get('time');

            $isUpdate = $booktables->save();
            return ['redirect' =>route('booktables.index')];

            if($isUpdate){
                return response()->json(['icon' => 'success' , 'title' => 'تم تعديل الحجز بنجاح'] , 200);
            }
            else {
                return response()->json(['icon' => 'error' , 'title' => ' فشلت عملية تعديل الحجز'] , 400);

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
        $booktables = BookTable::destroy($id);
        return response()->json(['icon' => 'success' , 'title' => 'تم حذف الحجز بنجاح'] ,  $booktables ? 200 : 400);
    }
    public function storeFront(Request $request)
    {

        $validator = Validator($request->all(),[
            // 'image'=>"image|max:2048|mimes:png,jpg,jpeg,pdf",

        ]);

        if(! $validator->fails()){
            $booktables = new BookTable();
            $booktables->name = $request->get('name');
            $booktables->email = $request->get('email');
            $booktables->mobile = $request->get('mobile');
            $booktables->time = $request->get('time');
            $booktables->number_of_people = $request->get('number_of_people');
            $booktables->date = $request->get('date');
            $booktables->nots = $request->get('nots');

        $isSaved = $booktables->save();
        if($isSaved){
            return response()->json(['icon' => 'success' , 'title' => 'تم إضافة الحجز بنجاح '] , 200);
        }
        else{
            return response()->json(['icon' => 'error' , 'title' => 'فشلت إضافة الحجز'] , 400);
        }
    }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
        }

    }



}
