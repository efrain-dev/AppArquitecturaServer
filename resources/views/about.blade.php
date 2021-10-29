@extends('layout.app')
@section('title')
    QUIENES SOMOS
@endsection
@section('short-title')
    CONONE MAS SOBRE ESTE GRUPO
@endsection
@section('img-title')
    {{asset('assets/img/nosotros.jpg')}}
@endsection
@section('content')

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

                <h2>¿Quienes Somos?</h2>
                <h4 align="justify" class="post-subtitle  ">Somos un grupo de estudiantes de la Universidad Mariano
                    Galvez de Guatemala, sede Puerto Barrios, Izabal,
                    que gracias a la inspiracion del Ingeniero Erick ALVAREZ, que nos imparte el curso de Arquitectura
                    de Computadoras 2, nos ha puesto el reto de
                    desarrollar un proyecto con fines educativos, aplicando los conocimientos adquiridos a traves del
                    curso.
                </h4>
            </div>
        </div>
    </div>
    <hr class="my-4"/>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/img/foto2.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/foto3.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/foto4.jpeg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
