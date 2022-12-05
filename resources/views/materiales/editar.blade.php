<!doctype html>
<html lang="en">

<head>
  <title>Editar Material</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <h1>Actualizar Material</h1>
  <form method="post" action="{{route('materiales.update',$materiales->id)}}">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="" class="form-label">Titulo</label>
      <input type="text"
        class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" value="{{$materiales->nombre}}">
      @error('nombre')
        <small style="color:red;">{{$message}}</small>
      @enderror
      </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" value="{{$materiales->cantidad}}"
          class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="">
        @error('cantidad')
          <small style="color:red;">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="number" value="{{$materiales->precio}}"
          class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="">
        @error('precio')
          <small style="color:red;">{{$message}}</small>
        @enderror
    </div>
    <button class="btn btn-primary" type="submit">Actualizar</button>
  </form>
  <br>
  <a href="{{route('materiales.index')}}" class="btn btn-primary">Regresar</a>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>