
{{
    //el exten se utilizar para referencia la plantilla que vamos a utilizar 
 }}
@extends('layouts.plantilla')

{{
   //poco texto o poco contenido hacerlo de la siguiente forma 
}}
@section('titulo', "mirar".$animal)
  
{{
    //mucho contenido hacerlo de la siguiente forma 
    //tanbien antes explicar con un echo udespues pasamos como es con blade
 }}
 @section('contenido')
 <h1>vamos a ver un modulo de un zoologico {{ $animal }} </h1>
 @endsection