@extends('plantilla')
@section('content')
<a href="/añadir"><button>Afegir</button></a>
        <table style ="border: 1px solid black; width: 600px">
        <tr>
                <td>Id</td>
                <td>Nom</td>
                <td>Data Inici</td>
                <td>Data Final</td>
                <td>Num Places</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        <?php
        $casals = DB::table('casals')->get();
        
        
        foreach ( $casals as $casal) {
            echo "
            <tr>
                <td>".$casal->id."</td>
                <td>".$casal->nom."</td>
                <td>".$casal->data_inici."</td>
                <td>".$casal->data_final."</td>
                <td>".$casal->n_places."</td>
                <td><a href='#'>Editar</a></td>
                <td><a href='#'>Eliminar</a></td>
            </tr>
            ";
        }
        ?>
        </table>
@stop