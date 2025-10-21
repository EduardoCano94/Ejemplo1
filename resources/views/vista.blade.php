<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>el id es: {{-- $id --}}</h2>
    <h3>{{-- $titulo -- }}</h3>
    <h3>{{-- $nombre --}}</h3>
    <p>Esta es una vista de ejemplo en Laravel.</p>
    <p>Para acceder a esta vista, navega a la ruta <code>/ruta-vista</code> en tu navegador.</p>

   <a href="{{route('vista.create')}}">Crear Vista</a>
    <br>
   <a href="{{route('vista.edit')}}">Editar Vista</a>
    <br>
   <a href="{{route('vista.show')}}">Mostrar Vista</a>
    <br>
   <a href="{{route('vista.destroy')}}">Eliminar Vista</a>
   <br>
   <ul class="list-disc list-inside text-left mx-auto w-48 bg-white p-4 rounded-lg shadow">
  @for ($i = 1; $i <= 10; $i++)
    <li>Número {{ $i }}</li>
  @endfor
</ul>

<table>
<thead>
  <tr>
    <th>No.</th>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Correo</th>
  </tr>
</thead>
<tbody>
    @for ($i = 1; $i <= 10; $i++)
  <tr>
    <td>{{ $i }}</td>
    <td>Usuario {{ $i }}</td>
    <td>{{ $edad = 18+ $i }}</td>
    <td>usuario{{ $i }}@ejemplo.com</td>
    <td>@if ($edad < 18)
        <span>Menor de edad</span>
        @elseif ($edad >= 18 && $edad <= 21)
        <span>Joven adulto</span>
        @else
        <span>Adulto mayor</span>
        @endif
  </tr>
    @endfor
</tbody>
</table>
</body>
</html>