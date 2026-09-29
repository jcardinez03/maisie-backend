<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderImage;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    private $order;
    private $orderImage;

    public function __construct(Order $order, OrderImage $orderImage)
    {
        $this->order = $order;
        $this->orderImage = $orderImage;
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'product_id' => 'required|integer|exists:products,id',
            'phone_number' => 'required|string',
            'image' => 'required|array',
            'image.*' => 'required'
        ]);

        DB::transaction(function () use ($request) {
            $this->order->name = $request->name;
            $this->order->email = $request->email;
            $this->order->product_id = $request->product_id;
            $this->order->phone_number = $request->phone_number;
            $this->order->details = $request->details;
            $this->order->save();

            $images = [];
            foreach($request->image as $image){
                $images[] = [
                    'image' => 'data:image/' . $image->extension() . ';base64,' . base64_encode(file_get_contents($image))
                ];
            }
            $this->order->orderImages()->createMany($images);
        });

        return response()->json($this->order,201);
    }

    public function index()
    {
        $all_orders = $this->order->with('orderImages')->with('product')->latest()->get();

        return response()->json($all_orders);
    }

    public function show($id)
    {
        $order = $this->order->with('orderImages')->with('product')->findOrFail($id);

        return response()->json($order);
    }
}
