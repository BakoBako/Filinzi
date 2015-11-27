<?php

namespace App\Http\Controllers;

class FilinziController extends Controller
{
    public function __construct()
    {
        
    }

    public function welcome()
    {
        return view('welcome');
    }    

    public function existsYes()
    {
        if( view()->exists('welcome') )
        {
            return response( 'View exists' );
        }    
        else
        {
            return response( 'View not exists' );
        }    
    }

    public function existsNo()
    {
        if( view()->exists('welcoooooooooooome') )
        {
            return response( 'View exists' );
        }    
        else
        {
            return response( 'View not exists' );
        }    
    }
    
    public function passDataKeyValue()
    {
        return view('pass-data-key-value', ['title'=>'Filinzi']);
    }    
    
    public function passDataWithMethod()
    {
        return view('pass-data-with-method')->with( 'title', 'Filinzi' );
    }    
}
