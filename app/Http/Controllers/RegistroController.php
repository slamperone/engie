<?php

namespace App\Http\Controllers;

use App\Registro;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        return \View::make('home');
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

        $client = new Registro;
     
        $v = \Validator::make($request->all(), [
            
            'nombre' => 'required|alpha_num|max:40',
            'apellido' => 'required|alpha_num|max:40',
            'cliente' => 'required|unique:registros',
            'telefono' => 'required|numeric',
            'correo'    => 'required|email|unique:registros',
            'estado' => 'required|alpha_num|max:40',
            'cp' => 'required|numeric|max:99999',
            'titular' => 'required',
            'p1' => 'required',
            'p2' => 'required',
            'p3' => 'required'
        ]);
 
        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        
        $client->create($request->all());

        if ($client){
            $salida = 'Éxito al guardar';
        }else{
            $salida = 'Error al guardar';
        }


        //return $salida;

        $datos = array(
            'sucess' => 'true',
            'guardado' => $salida,
        );

        $receptor = array(
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'folio' => md5($client->id),
        );

        

        \Mail::send('mail.registro', $receptor , function($message) use ($receptor) {
        $message->to($receptor['correo'], $receptor['nombre'] )->subject('Gracias por Registrarte');

         });    


        //echo json_encode($datos, JSON_FORCE_OBJECT);

        return view('home',compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //
    }
}
