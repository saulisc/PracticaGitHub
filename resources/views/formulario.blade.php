@extends('template')

@section('contenido')

@if (session()->has('confirmacion'))
    {!!
    "<script> Swal.fire(
        'All right!',
        'Los datos llegaron al controlador!',
        'Success'
    )</script>"
    !!}
    
@endif

<div class="container col-md-6">
    <h1 class="display-4 text-center mt-5 mb-5">Formulario</h1>
    
    @if ($errors -> any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Formulario incompleto</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
        
    @endif
    
    
    

    <div class="card text-center mb-5">
        <div class="display-6 card-header"> Ingresa los siguientes datos </div>

        <div class="card-body">
            <form method="POST" action="procesarFormulario">
                @csrf
                <div class="dmb-3">
                    <label class="display-7 form-label"> Titulo </label>
                    <input type="text" class="form-control" name="txtTitulo">
                    <!--
                    <p class="text-danger fst-italic"> {{$errors->first('txtTitulo')}} </p>
                    -->

                </div>
                <div>
                    <label class="display-7 form-label"> Contenido </label>
                    <input type="text" class="form-control mg-4" name="txtContenido">
                    <!-- 
                    <p class="text-danger fst-italic">  {{$errors->first('txtContenido')}}</p>
                    -->
                </div>
        </div>
        <div class="card-footer ">
            <button type="submit" class="btn btn-primary"> Guardar formulario </button>
            </form>
        </div>
    </div>
</div>
@stop