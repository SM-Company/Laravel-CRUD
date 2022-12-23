@extends("../layouts.plantilla")

@section("cabecera")

           <nav class="navbar navbar-dark bg-dark text-light">
              <div class="ms-5">
                  <h1>Leectura de productos</h1>
              </div>
              <div class="user-container d-flex align-items-center me-5" >
                <h5 class="user-name me-3">{{ auth()->user()->name}}</h5>
                <a href="{{route('logout')}}"><button type="button"  class="btn btn-primary">Salir</button></a>
              </div>
           </nav>
    


@endsection


@section("contenido")

@if(count($errors) > 0) 

<div class="alert alert-secondary alert-dismissible fade show" role="alert" style="width: 400px; margin-left: 50px; position: absolute">
   <strong>!</strong> Debe de llenar todos los campos.
   <button type="button" class="close btn" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
   </button>
</div>

@endif

<div style="display: flex; justify-content: space-around; ">

    <div style="display: flex; flex-direcction: column; align-item: center; justify-content: center; margin-top: 50px" >
      
      <form method="post" action="{{url('/productos')}}" style="width: 300px; margin-top: 50px;" >
        <input type="text" name="NombreArticulo" placeholder="Nombre del Articulo" class="form-control mb-2">
        <input type="text" name="Seccion" placeholder="Seccion" class="form-control mb-2">
        <input type="text" name="Precio" placeholder="Precio" class="form-control mb-2">
        <input type="text" name="Fecha" placeholder="Fecha" class="form-control mb-2">
        <input type="text" name="PaisOrigen" placeholder="Pais Origen" class="form-control mb-2">
        
        
        {{csrf_field()}}
        
        <input type="submit" name="enviar" value="Guardar" class="btn btn-primary">
        <input type="reset" name="borrar" value="Borrar" class="btn btn-secondary">
      </form>
    </div>
    
    <div style="display: flex; flex-direcction: column; align-item: center; justify-content: center;" >
      
      <table class="table" style="width: 700px; margin-top: 50px">
        <thead class="text-light bg-dark">
          <tr>
            <th scope="col">COD</th>
            <th scope="col">NombreArticulo</th>
                <th scope="col">Seccion</th>
                <th scope="col">Precio</th>
                <th scope="col">Fecha</th>
                <th scope="col">PaisOrigen</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($productos as $producto)
              
              <tr>
                <th scope="row">{{$producto->id}}</th>
                <td>{{$producto->NombreArticulo}}</td>
                <td>{{$producto->Seccion}}</td>
                <td>{{$producto->Precio}}</td>
                <td>{{$producto->Fecha}}</td>
                <td>{{$producto->PaisOrigen}}</td>
                <td style="display: flex;">
                  <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-secondary">Editar</a>
                  <form method="post" action="{{url('/productos', $producto->id)}}">  
                    
                    <input type="submit" class="btn btn-danger" value="Borrar" style="margin-left: 10px"></input>
                    
                    {{csrf_field()}}
                    
                    <input type="hidden" name="_method" value="DELETE">
                  </form>
                </td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
          
        </div>
      
    </div>

   
      
      @endsection
      
      @section("pie")
      
      @endsection