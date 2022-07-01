<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\sells;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function order (Request $request){
        $validator = Validator($request->all(),[

        ]);



        if(! $validator->fails()){
            $delivery = new sells();
            $delivery->product = $request->get('product');
            $delivery->price = $request->get('price');
            $delivery->count = $request->get('count');
            $delivery->total = $request->get('total');

            $isSaved = $delivery->save();

            if($isSaved){
                return response()->json(['icon' => 'success' , 'title' => 'تم إضافة الطلب بنجاح'] , 200);
            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'فشلت إضافة الطلب'] , 400);
            }

        }

        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
        }
    }
}
