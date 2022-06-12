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
        $booktables = BookTable::orderBy('id' , 'desc')->paginate(5);
        return response()->view('cms.book a table.index',compact('booktables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booktables = BookTable::all();
        return response()->view('cms.book a table.create' , compact('booktables'));
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
            $booktables = new BookTable();
            $booktables->name = $request->get('name');
            $booktables->email = $request->get('email');
            $booktables->mobile = $request->get('mobile');
            $booktables->date = $request->get('date');
            // $booktables->time = $request->get('time');
            // $booktables->number_of_people = $request->get('number_of_people');
            // $booktables->nots = $request->get('nots');
            // $booktables->recepion_id = $request->get('recepion_id');

            $isSaved = $booktables->save();

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
        //
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
        //
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
        return response()->json(['icon' => 'success' , 'title' => 'تم حذف الدبلومة بنجاح'] ,  $booktables ? 200 : 400);
    }
}
