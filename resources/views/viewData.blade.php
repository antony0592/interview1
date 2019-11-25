@extends('template.main')
@section('csspersonalizado')
  <link href="{{asset('js/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
  <style>
      a:hover {
        color: hotpink;
      }
      .button:hover {
      background-color: #4CAF50;
        color:
          white;
      }
      a:hover, a:active {
          color: #4CAF50;
      }
      a:active, a:hover {
          outline-width: 0;
      }
      .button {
          background-color: white;
          color: black;
          border: 2px solid 
          #4CAF50;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin-left: 20px;
      }
      a {
          color: inherit;
      }
      a {
          background-color: transparent;
      }
      *, ::before, ::after {
          box-sizing: inherit;
      }
    </style>
@endsection
@section('container')
  <!-- Advanced Tables -->
  <div class="panel panel-default">
    <div class="panel-heading">
        <a class="button button1" href="{{route('viewAdd')}}">Agregar registro</a><hr>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="example">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Year of Birth</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Ethnicity</th>
                  <th scope="col">Child's First Name</th>
                  <th scope="col">Count</th>
                  <th scope="col">Rank</th>
                  <th scope="col">Modificar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($alldata as $row)
                <tr>
                  <th scope="row">{{ $row->tblimportid }}</th>
                  <td>{{ $row->tblimportbirth }}</td>
                  <td>{{ $row->tblimportgender }}</td>
                  <td>{{ $row->tblimportethnicity}}</td>
                  <td>{{ $row->tblimportchildfirst}}</td>
                  <td>{{ $row->tblimportcount}}</td>
                  <td>{{ $row->tblimportrank}}</td>
                  <td><a class="btn btn-warning btn-sm" href="{{url('/viewUpdate',$row->tblimportid)}}">Editar</a></td>
                  <td><a  class="btn btn-danger btn-sm" onclick="return confirm('Deseas borrar este registro?')"  href="{{url('/Delete',$row->tblimportid)}}">Borrar</a></td>
                </tr>
                @endforeach
              </tbody>
        </table>
      <!--End Advanced Tables -->
      </div>
    </div>
  </div>
@endsection
@section('footer')
@endsection
@section('jspersonalizado')
<script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $(document).ready(function() {
    $('#example').dataTable( {
          "language": {
            "lengthMenu": "Mostrando _MENU_ registros por página",
            "zeroRecords": "Nada que mostrar - disculpe!",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No se encontrarón registros",
            "infoFiltered": "(Filtrando _MAX_ del total de registros)",
            "search": "Buscar ",
            "sPrevious": " Anterior ",
            "next": " Siguiente "
          },
          "paging":   true,
          "order":   [[0, 'desc']],
          "ordering": true,
          "info":     true
        });
  } );
  } );
</script>
@endsection