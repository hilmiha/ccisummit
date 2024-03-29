<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BayarTiketController extends Controller
{
    public function index(){

        $id_pesanan =rand();
        $total_bayar = 25000;

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-n4FVdKDmPeMuqjIbRAy6vLkX';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $item1_details = array(
            'id' => 'a1',
            'price' => 25000,
            'quantity' => 1,
            'name' => "Tiket - Tech Week 2022"
        );
        
        // Optional
        $item_details = array ($item1_details);
        
        $params = array(
            'transaction_details' => array(
                'order_id' => $id_pesanan,
            ),
            
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
            
            'item_details' => $item_details,

            
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        //simpan snaptoken untuk memunculkan kembali nantinya 
        // $snapToken = '9c493c32-c90a-42a0-b6e2-336c51efc75d'; 

        return view('pesan_tiket.index', [
            'title' => 'Pembayaran Transaksi '.$id_pesanan.' | CCI Summit 2022',
            'onstep' => 'pembayaran_waiting',
            'snap_token' => $snapToken
        ]);
    }
}
