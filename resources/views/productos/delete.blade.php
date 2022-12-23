@extends("../layouts.plantilla")

@section("cabecera")

@section("contenido")

    <form method="POST">

        <input type="text" name="NombreArticulo" placeholder="Nombre del Articulo">

        <input type="submit" name="enviar" value="Enviar">
    </form>

@section("pie")