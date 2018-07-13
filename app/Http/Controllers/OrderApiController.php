<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Order::all();
        return response()->json($entries, 200);
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
        try {
            $validator = Validator::make($request->all(), [
                'nameBuyes' => 'bail|required|unique:orders|max:50',
                'nameReceiver' => 'required',
                'addressReceiver' => 'required',
                'phoneBuyes' => 'required',
                'phoneReceiver' => 'required',
                'totalMoney' => 'required',
                'quantity' => 'required',
                'UserId'=>'required',
                'productId'=>'required',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);

            }
            $productJson = $request->json()->all();
            $order = new Order();
            $order->nameBuyes = $productJson['nameBuyes'];
            $order->nameReceiver = $productJson['nameReceiver'];
            $order->addressReceiver = $productJson['addressReceiver'];
            $order->phoneBuyes = $productJson['phoneBuyes'];
            $order->phoneReceiver = $productJson['phoneReceiver'];

            $order->totalMoney = $productJson['totalMoney'];

            $order->phoneReceiver = $productJson['phoneReceiver'];

            $order->quantity = $productJson['quantity'];

            $order->UserId = $productJson['UserId'];
            $order->productId = $productJson['productId'];

            $order->created_at = $productJson['created_at'];

            $order->updated_at = $productJson['updated_at'];
            $order->save();
            return response()->json($productJson, 201);
        } catch (EXCEPTION $exception) {
            return response()->json($exception->errors(), 500);
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
        $entries = Order::find($id);
        if ($entries === null) {
            return;
        }
        return response()->json($entries, 200);
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
        $productJson = $request->json()->all();
        $validator = Validator::make($request->all(), [
            'nameBuyes' => 'bail|required|unique:orders|max:50',
            'nameReceiver' => 'required',
            'addressReceiver' => 'required',
            'phoneBuyes' => 'required',
            'phoneReceiver' => 'required',
            'totalMoney' => 'required',
            'quantity' => 'required',
            'UserId'=>'required',
            'productId'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);

        }

        try {
            $order = new Order();
            $order->nameBuyes = $productJson['nameBuyes'];
            $order->nameReceiver = $productJson['nameReceiver'];
            $order->addressReceiver = $productJson['addressReceiver'];
            $order->phoneBuyes = $productJson['phoneBuyes'];
            $order->phoneReceiver = $productJson['phoneReceiver'];

            $order->totalMoney = $productJson['totalMoney'];

            $order->phoneReceiver = $productJson['phoneReceiver'];

            $order->quantity = $productJson['quantity'];

            $order->UserId = $productJson['UserId'];
            $order->productId = $productJson['productId'];

            $order->created_at = $productJson['created_at'];

            $order->updated_at = $productJson['updated_at'];
            $order->save();
            return response()->json($productJson, 201);
        }catch (EXCEPTION $exception) {
            return response()->json($exception->errors(), 400);
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
        //
    }
}
