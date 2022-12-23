@extends("../layouts.plantilla")

@section("cabecera")
<div class="container">
           <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid">
                  <h1>Editor de productos</h1>
              </div>
           </nav>
        </div>
    </div>

@endsection


@section("contenido")
  <div style="display: flex; flex-direcction: column; align-item: center; justify-content: center;" >

      <form method="post" action="{{url('/productos', $producto->id)}}" style="width: 400px; margin-top: 50px">  
        <input type="text" name="NombreArticulo" placeholder="Nombre del Articulo" class="form-control mb-2" value="{{$producto->NombreArticulo}}">
          <input type="text" name="Seccion" placeholder="Seccion" class="form-control mb-2" value="{{$producto->Seccion}}">
          <input type="text" name="Precio" placeholder="Precio" class="form-control mb-2" value="{{$producto->Precio}}">
          <input type="text" name="Fecha" placeholder="Fecha" class="form-control mb-2" value="{{$producto->Fecha}}">
          <input type="text" name="PaisOrigen" placeholder="PaisOrigen" class="form-control mb-2" value="{{$producto->PaisOrigen}}">
          
          {{csrf_field()}}

          <input type="hidden" name="_method" value="PUT">
          
          <input type="submit" href="productos" name="enviar" value="Enviar" class="btn btn-primary">
        </form>
    </div>

  

@endsection

@section("pie")

@endsection