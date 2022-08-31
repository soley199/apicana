<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\Resource;
use App\Http\Resources\VehiculoResource;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VehiculoResource::collection(Vehiculo::all());

        //$sql = 'SELECT * FROM vehiculos';
        //$sql = 'SELECT marca FROM vehiculos GROUP by marca;';
        //$products = DB::select($sql);
        //return $products;

         

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
    public function show($id){
        //print($vehiculo);
        //return new VehiculoResource($vehiculo);

        //$sql = 'SELECT * FROM vehiculos WHERE delantera LIKE "%?%" OR trasera LIKE "%?%"',[$id];
        //$products = DB::select('SELECT * FROM vehiculos WHERE delantera LIKE "%?%" OR trasera LIKE "%?%"',[$id,$id]);
        $column = 'delantera';

        $products = DB::select("select * from vehiculos where delantera LIKE ? OR trasera LIKE ?",['%'.$id.'%','%'.$id.'%']);

        
        
        return $products;
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
}
