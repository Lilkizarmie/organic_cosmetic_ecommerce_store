<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    public function render()
    {
        $cartId = 1;
        $items = \Cart::session($cartId)->getContent()->sortBy(function ($cart) {
            return $cart->attributes->get('added_at');
        });

        if (\Cart::isEmpty()) {
            $cartData = [];
        } else {
            foreach ($items as $item) {
                $cart[] = [
                    'rowId' => $item->id,
                    'name' => $item->name,
                    'qty' => $item->quantity,
                    'pricesingle' => $item->price,
                    'price' => $item->getPriceSum(),
                    'added_at' => $item->attributes->added_at,
                    'image' => $item->attributes->image,
                ];
            }

            $cartData = collect($cart);
        }

        $sub_total = \Cart::session($cartId)->getSubTotal();
        $total = \Cart::session($cartId)->getTotal();

        $summary = [
            'sub_total' => $sub_total,
            'total' => $total,
        ];

        return view('livewire.checkout', [
            'carts' => $cartData,
            'summary' => $summary,
        ])->extends('layouts.main')
            ->section('main-container');
    }
}
