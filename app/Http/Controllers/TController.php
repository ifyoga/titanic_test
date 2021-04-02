<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class TController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::forget('result');
        return view('dashboard', [
            'title' => 'Kill the Witch'
        ]);
       
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
        //
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
     
  function getjson(){
   $json ='[
        {
          "name": "Munoz",
          "age": 13
        },
        {
          "name": "Green",
          "age": 21
        },
        {
          "name": "Lottie",
          "age": 14
        },
        {
          "name": "Yang",
          "age": 10
        },
        {
          "name": "Tamara",
          "age": 19
        },
        {
          "name": "Dudley",
          "age": 25
        },
        {
          "name": "Holloway",
          "age": 10
        },
        {
          "name": "Richards",
          "age": 11
        },
        {
          "name": "Nieves",
          "age": 27
        },
        {
          "name": "Tracey",
          "age": 21
        },
        {
          "name": "Josefina",
          "age": 13
        },
        {
          "name": "Irwin",
          "age": 22
        },
        {
          "name": "Zamora",
          "age": 19
        },
        {
          "name": "Esther",
          "age": 29
        },
        {
          "name": "Carney",
          "age": 11
        },
        {
          "name": "Candice",
          "age": 30
        },
        {
          "name": "Cain",
          "age": 25
        },
        {
          "name": "Lewis",
          "age": 11
        },
        {
          "name": "Leola",
          "age": 14
        },
        {
          "name": "Lourdes",
          "age": 26
        },
        {
          "name": "Kathie",
          "age": 28
        },
        {
          "name": "Young",
          "age": 12
        },
        {
          "name": "Brandy",
          "age": 26
        },
        {
          "name": "Luisa",
          "age": 16
        },
        {
          "name": "Hester",
          "age": 22
        },
        {
          "name": "Madden",
          "age": 22
        },
        {
          "name": "Colette",
          "age": 12
        },
        {
          "name": "Campbell",
          "age": 13
        },
        {
          "name": "Estella",
          "age": 23
        },
        {
          "name": "Meagan",
          "age": 11
        },
        {
          "name": "Ray",
          "age": 20
        },
        {
          "name": "Leslie",
          "age": 30
        },
        {
          "name": "Lilian",
          "age": 19
        },
        {
          "name": "Pace",
          "age": 29
        },
        {
          "name": "Irma",
          "age": 10
        },
        {
          "name": "Francis",
          "age": 21
        },
        {
          "name": "Cline",
          "age": 22
        },
        {
          "name": "Cochran",
          "age": 13
        },
        {
          "name": "Mckinney",
          "age": 10
        },
        {
          "name": "Gwen",
          "age": 21
        },
        {
          "name": "Schultz",
          "age": 19
        },
        {
          "name": "Peters",
          "age": 15
        },
        {
          "name": "Meyers",
          "age": 21
        },
        {
          "name": "Simon",
          "age": 14
        },
        {
          "name": "Robles",
          "age": 16
        },
        {
          "name": "Michele",
          "age": 30
        },
        {
          "name": "Lupe",
          "age": 15
        },
        {
          "name": "Juliet",
          "age": 27
        },
        {
          "name": "Melendez",
          "age": 16
        },
        {
          "name": "Sharp",
          "age": 21
        },
        {
          "name": "Maxine",
          "age": 23
        },
        {
          "name": "Browning",
          "age": 15
        },
        {
          "name": "Cash",
          "age": 22
        },
        {
          "name": "Alyson",
          "age": 19
        },
        {
          "name": "Hopper",
          "age": 12
        },
        {
          "name": "Vinson",
          "age": 17
        },
        {
          "name": "Daphne",
          "age": 22
        },
        {
          "name": "Jacquelyn",
          "age": 29
        },
        {
          "name": "Erna",
          "age": 21
        },
        {
          "name": "Bishop",
          "age": 29
        },
        {
          "name": "Kline",
          "age": 24
        },
        {
          "name": "Patrica",
          "age": 19
        },
        {
          "name": "Mandy",
          "age": 14
        },
        {
          "name": "Tanner",
          "age": 27
        },
        {
          "name": "Claudette",
          "age": 26
        },
        {
          "name": "Olivia",
          "age": 23
        },
        {
          "name": "Sonja",
          "age": 22
        },
        {
          "name": "Mcfarland",
          "age": 12
        },
        {
          "name": "Payne",
          "age": 12
        },
        {
          "name": "Lucile",
          "age": 21
        },
        {
          "name": "Burgess",
          "age": 15
        },
        {
          "name": "Michael",
          "age": 21
        },
        {
          "name": "England",
          "age": 20
        },
        {
          "name": "Osborne",
          "age": 22
        },
        {
          "name": "Shelia",
          "age": 12
        },
        {
          "name": "Robbins",
          "age": 14
        },
        {
          "name": "Melinda",
          "age": 14
        },
        {
          "name": "Davenport",
          "age": 10
        },
        {
          "name": "Melba",
          "age": 23
        },
        {
          "name": "Marian",
          "age": 20
        },
        {
          "name": "Booth",
          "age": 30
        },
        {
          "name": "Lina",
          "age": 19
        },
        {
          "name": "Clay",
          "age": 22
        },
        {
          "name": "Dominguez",
          "age": 28
        },
        {
          "name": "Weaver",
          "age": 29
        },
        {
          "name": "Newton",
          "age": 17
        },
        {
          "name": "Morrow",
          "age": 17
        },
        {
          "name": "Hammond",
          "age": 11
        },
        {
          "name": "Jessica",
          "age": 23
        },
        {
          "name": "Leona",
          "age": 25
        },
        {
          "name": "Lane",
          "age": 23
        },
        {
          "name": "Simmons",
          "age": 26
        },
        {
          "name": "Jody",
          "age": 16
        },
        {
          "name": "Brock",
          "age": 12
        },
        {
          "name": "Gonzalez",
          "age": 24
        },
        {
          "name": "Elnora",
          "age": 10
        },
        {
          "name": "Katelyn",
          "age": 29
        },
        {
          "name": "Alisa",
          "age": 22
        },
        {
          "name": "Joyce",
          "age": 16
        },
        {
          "name": "Serena",
          "age": 11
        }
      ]';
       
      return $json;
   }
  function findage(){
    $post=$_POST['umur'];
    $age = explode(',', $post); 
    $jso=  $this->getjson();
    $json_dec =  json_decode($jso, true); 
    for($i=0;$i<count($age);$i++){
        $nam[$i]=array();
    foreach($json_dec as $k){
        if($k['age']==$age[$i]){
        
            array_push($nam[$i],$k['name']);
         
        }
         


    }
    }
    echo json_encode($nam);
  }
// end untuk menampilkan data saja sebagai acuan 
}
