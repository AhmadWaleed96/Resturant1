<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::orderBy('id' , 'desc')->paginate(5);
        return response()->view('cms.book a table.index',compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $homes = new Home();
            $homes->name = $request->get('name');
            $homes->email = $request->get('email');
            $homes->mobile = $request->get('mobile');
            $homes->date = $request->get('date');
            $homes->time = $request->get('time');
            $homes->number_of_people = $request->get('number_of_people');
            $homes->nots = $request->get('nots');
           

            $isSaved = $homes->save();

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
        //
    }
}
