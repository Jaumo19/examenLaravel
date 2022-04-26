@extends('plantilla')
@section('content')

<form action="/tratarDatos" method="POST">
  @csrf
  <label for="nom">Nom:</label><br>
  <input type="text" id="nom" name="nom" required><br>
  <label for="data_inici">Data Inici:</label><br>
  <input type="date" id="data_inici" name="data_inici" required><br>
  <label for="data_final">Data Final:</label><br>
  <input type="date" id="data_final" name="data_final" required><br>
  <label for="n_places">Num Plazas:</label><br>
  <input type="number" id="n_places" name="n_places" required><br>
  <label for="id">Id Ciudad:</label><br>
  <select name="id" id="id">
  <?php
  $ciudades = DB::table('ciutats')->get();
 
  foreach ( $ciudades as $ciudad) {
      echo "<option id='id'>".$ciudad->id."</option>";
  }

 ?>
  </select><br><br>
  <input type="submit" value="Submit">
</form> 
@stop