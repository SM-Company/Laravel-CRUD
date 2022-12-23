@extends("../layouts.plantilla")

@section("cabecera")
<div class="container">
           <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid">
                  <h1>Registro de productos</h1>
              </div>
           </nav>
        </div>
    </div>

@endsection


@section("contenido")
  <div style="display: flex; flex-direcction: column; align-item: center; justify-content: center;" >

      <form method="post" action="{{url('/productos')}}" style="width: 400px; margin-top: 50px" >
          <input type="text" name="NombreArticulo" placeholder="Nombre del Articulo" class="form-control mb-2">
          <input type="text" name="Seccion" placeholder="Seccion" class="form-control mb-2">
          <input type="text" name="Precio" placeholder="Precio" class="form-control mb-2">
          <input type="text" name="Fecha" placeholder="Fecha" class="form-control mb-2">
          <input type="text" name="PaisOrigen" placeholder="PaisOrigen" class="form-control mb-2">
          
          
          {{csrf_field()}}
          
          <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
          <input type="reset" name="borrar" value="Borrar" class="btn btn-secondary">
        </form>
    </div>


@endsection

@section("pie")

@endsection