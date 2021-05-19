<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie{

    public $title;
    public $desc;

    
    public function __construct($title, $desc = null){
        
        
        $this -> title = $title;
        
        if($desc === null){
            
            $this -> desc = 'spiacenti la descrizione non é disponibile';
        }
    }
    
    public function getString(){
        
        return 'titolo: ' . $this -> title . ' descrizione: ' . $this -> desc;
    }
   
    
}
    
    class movController extends Controller
    {
        public function movies(){
            
            
            $mov1 = new Movie('Ritorno al futuro ', ' descrizione film ');
            $mov2= new Movie('Ritorno al futuro 2');
            $mov3 = new Movie('Ritorno al futuro 3', ' descrizione film ');
        
        $films =[

            $mov1,
            $mov2,
            $mov3
        ];

        $filmstr = '';

        foreach ($films as $film){

            $filmstr .= $film -> getString()  . '  ';
        }
        dd($filmstr);

        return view('home');
    }
}
