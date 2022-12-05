<!doctype html>
<html lang="en">

<head>
  <title>Materiales</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <h1>Materiales</h1>
    <a href="{{route('materiales.create')}}" class="btn btn-primary">Agregar Nuevo Material</a>
    <a href="{{route('materiales.pdf')}}" class="btn btn-primary">Generar PDF</a>
    @if(Session::has('success'))
        <div class="alert alert-success text-center">
             {{Session::get('success')}}
        </div>
    @endif
    @if(Session::has('danger'))
        <div class="alert alert-danger text-center">
             {{Session::get('danger')}}
        </div>
    @endif  
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($materiales as $item )
        <tr>
          <th>{{$item->nombre}}</th>
          <td>{{$item->cantidad}}</td>
          <td>{{$item->precio}}</td>
          <td>
            <form action="{{route('materiales.destroy',$item->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <a type="button" href="{{route('materiales.edit',$item->id)}}" class="btn btn-warning">Editar</a>
              <button class="btn btn-danger">Borrar</button>
            </form>
             
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>