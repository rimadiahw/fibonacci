<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFibonacci(Request $request)
    {   
        $bil = $request->bil;
        $jum = 0;
        //set jumlah bilangan fibonacci jika menekan tombol prev atau next
        if($bil !== null){
            //jika menekan tombol next
            if (\Request::is('nextFibonacci')) {
                if($bil>0){
                    $jum = $bil + 10;
                }
            }
            //jika menekan tombol prev
            if (\Request::is('prevFibonacci')) { 
                if($bil>0){
                    $jum = $bil - 10;
                }
            }
        }
        //set jumlah bilangan di halaman awal fibonacci
        else{
            $jum = 10;
        }
        
        //Inisialisasi index ke 1 dan 2 dari fibonacci       
        $fibonacci = [1, 1];

        for($i=0; $i<$jum; $i++){
            //Menghitung index yang lebih dari 2
            if($i>=2){
                $fib = $fibonacci[$i-1]+$fibonacci[$i-2];
                $fibonacci[$i] = $fib;
            }
        }
        //menghitung jumlah bilangan fibonacci
        $jum = count($fibonacci);
        //menampilkan bilangan 10 trakhir
        $result = array_slice($fibonacci, -10);

        return view('fibonacci', ['fibonaccis'=>$result, 'jums'=>$jum]);
    }
}
