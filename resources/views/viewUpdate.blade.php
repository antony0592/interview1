@extends('template.main')
@section('csspersonalizado')
@endsection
@section('container')

<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
			<div class="col-md-5">             
				<div class="block full tabbable">

                    {{ Form::open(array('route' => ['Update' , $dataimport->tblimportid ], 'data-smk-icon' => 'glyphicon-remove-sign', 'id' => 'formUpdate')) }}

                    <div class="header">
                        <h4 class="modal-title" >Modificar registro</h4>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="id" class="">ID</label>
                                <input readonly type="text" data-smk-type="alphanumeric" class="form-control" id="id" value="{{ $dataimport->tblimportid }}">
                            </div>
                            <div class="form-group mb-2 {{ $errors->has('birth') ? ' has-error' : '' }}">
                                <label for="birth" class="">Birth</label>
                                <select data-smk-type="alphanumeric" class="form-control" name="birth" id="birth">
                                    <option selected  value="{{ $dataimport->tblimportbirth }}">{{ $dataimport->tblimportbirth }}</option>
                                    <?php
                                        $currentYear = date('Y');
                                        foreach (range(1950, $currentYear) as $value) {
                                            print "<option value='" . $value . "'>" . $value . "</option > ";
                                        }
                                    ?>
                               </select>
                               @if ($errors->has('birth'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb-2 {{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option selected  value="{{ $dataimport->tblimportgender }}">{{ $dataimport->tblimportgender }}</option>
                                    <option value="MALE">MALE</option>
                                    <option value="FEMALE">FEMALE</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('tethnicity') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb-2 {{ $errors->has('tethnicity') ? ' has-error' : '' }}">
                                <label for="tethnicity" class="">Tethnicity</label>
                                <select class="form-control" name="tethnicity" id="tethnicity">
                                    <option selected  value="{{ $dataimport->tblimportethnicity }}">{{ $dataimport->tblimportethnicity }}</option>
                                    <option value="ASIAN AND PACI">ASIAN AND PACI</option>
                                    <option value="ASIAN AND PACIFIC ISLANDER">ASIAN AND PACIFIC ISLANDER</option>
                                    <option value="WHITE NON HISPANIC">WHITE NON HISPANIC</option>
                                    <option value="BLACK NON HISPANIC">BLACK NON HISPANIC</option>
                                    <option value="HISPANIC">HISPANIC</option>
                                    <option value="WHITE NON HISP">WHITE NON HISPANIC</option>
                                    <option value="BLACK NON HISP">WHITE NON HISPANIC</option>
                                </select>
                            </div>
                            @if ($errors->has('tethnicity'))
                                <span class="help-block">
                                <strong>{{ $errors->first('tethnicity') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col">
                            <div class="form-group mb-2 {{ $errors->has('childfirst') ? ' has-error' : '' }}">
                                <label for="childfirst" class="">Child's first</label>
                                <input type="text" data-smk-type="alphanumeric" class="form-control" name="childfirst" id="childfirst" value="{{ $dataimport->tblimportchildfirst }}">
                                @if ($errors->has('childfirst'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('childfirst') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb-2 {{ $errors->has('count') ? ' has-error' : '' }}">
                                <label for="count" class="">Count</label>
                                <select class="form-control" name="count" id="count">
                                    <option selected  value="{{ $dataimport->tblimportcount }}">{{ $dataimport->tblimportcount }}</option>
                                    <?php
                                        $max = 999;
                                        foreach (range(0, $max) as $value) {
                                            print "<option value='" . $value . "'>" . $value . "</option > ";
                                        }
                                    ?>
                                </select>
                                @if ($errors->has('count'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('count') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb-2 {{ $errors->has('rank') ? ' has-error' : '' }}">
                                <label for="rank" class="">Rank </label>
                                <select class="form-control" name="rank" id="rank">
                                    <option selected  value="{{ $dataimport->tblimportrank }}">{{ $dataimport->tblimportrank }}</option>
                                    <?php
                                        $max = 999;
                                        foreach (range(0, $max) as $value) {
                                            print "<option value='" . $value . "'>" . $value . "</option > ";
                                        }
                                    ?>
                                </select>
                                @if ($errors->has('rank'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('rank') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button id="btnUpdate" onclick="return confirm('Deseas modificar este registro?')" type="submit" class="btn btn-success">Modificar</button>
                    <a class="btn btn-danger" href="{{route('viewData')}}">Cancelar</a><hr>
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
    </div>
</div>
@endsection
@section('footer')
@endsection
@section('jspersonalizado')
<!-- Validación Smooke -->
<script src="{{ asset('js/plugins/smoke-v3.1.1/js/smoke.js') }}"></script>
<script>
    $('#btnUpdate').click(function() {
        if ($('#formUpdate').smkValidate()) {
            // Code here
            $.smkAlert({
                text: 'Validate!',
                 type: 'success'
            });
        }
    });
</script>
@endsection