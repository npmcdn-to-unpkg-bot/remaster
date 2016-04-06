@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
              <div class="panel-heading">Import Menu</div>
              <div class="panel-body">
                {!! Form::model($row=new \App\create_table_import_by_air,['method' => 'POST', 'action' => 'import_by_air_controller@store', 'class' => 'form-horizontal']) !!}
                    @include('page.form')
                        <br>
                        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
                        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}

                {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
