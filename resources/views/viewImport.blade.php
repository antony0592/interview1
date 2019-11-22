@extends('template.main')
@section('csspersonalizado')
 
@endsection
@section('container')
  <!-- Advanced Tables -->
  <div class="panel panel-default">
      <div class="panel-heading">
      </div>
      <div class="panel-body">
        <form method="POST" action="{{ url("import") }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          
          <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
              <label for="file" class="control-label">Archivo CSV a importar.</label>
              
              <input id="file" type="file" class="form-control" name="file" required>
          
              @if ($errors->has('file'))
                  <span class="help-block">
                  <strong>{{ $errors->first('file') }}</strong>
                  </span>
              @endif
              
          </div>
           
          <p><button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Cargar CSV</button></p>
          
        </form>

       

      </div>
    </div>
@endsection
@section('footer')
@endsection
@section('jspersonalizado')

@endsection