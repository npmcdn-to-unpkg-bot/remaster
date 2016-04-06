@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
              <div class="panel-heading">Import Menu</div>
              <div class="panel-body">
                {!! Form::model($row,['method' => 'PUT', 'action' => ['sk_sea_controler@update',$row->id], 'class' => 'form-horizontal']) !!}
                    @include('page.form_sk')
                        <br>
                        {!! Form::submit("Update", ['class' => 'btn btn-success']) !!}
                        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}

                {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
