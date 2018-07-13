<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('admin.listAdmin.Order.OrderUser')->with('order', $order);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.listAdmin.Order.formOrder')->with([
            "product"=> new Order(),
            "action"=>"/order",
            "method"=>"POST"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            return redirect('order/create')
                ->withErrors($validator->errors())
                ->withInput();
        }

        $order = new Order();
        $order->UserId = $request->get("UserId");
        $order->productId = $request->get("productId");
        $order->nameBuyes = $request->get("nameBuyes");
        $order->nameReceiver = $request->get("nameReceiver");
        $order->addressReceiver = $request->get("addressReceiver");
        $order->phoneBuyes = $request->get("phoneBuyes");
        $order->phoneReceiver = $request->get('phoneReceiver');
        $order->totalMoney=$request->get('totalMoney');
        $order->quantity = $request->get('quantity');
        $order->save();
        return redirect('/order');
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
        $order = Order::find($id);
        if ($order==null){
            return redirect("errors");
        }
        return view('admin.listAdmin.Product.SmartPhone.formProductPhone')->with([
            "product"=> $order,
            "action"=>"/order/" . $order->id,
            "method"=>"PUT"
        ]) ;
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
