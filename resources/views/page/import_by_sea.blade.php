@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
              <div class="panel-heading"><a class="<button btn-success" href="{{asset('/import/by_sea/create')}}">Create</a></div>
              <div class="panel-body">

                <table id="import_by_sea" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Origin</th>
                              <th>ETD ORIGIN</th>
                              <th>ETA PORT</th>
                              <th>ETA AIIA</th>
                              <th></th>
                          </tr>
                      </thead>
                          @foreach($row as $row)
                          <tr>
                              <th>{{$row->name}}</th>
                              <th>{{$row->origin}}</th>
                              <th>{{date('d-M-Y', strtotime($row->etd))}}</th>
                              <th>{{date('d-M-Y', strtotime($row->eta_port))}}</th>
                              <th>{{date('d-M-Y', strtotime($row->eta_aiia))}}</th>
                              <th><a class="btn btn-xs btn-warning" href="{{asset('import/by_sea').'/'.$row->id}}/edit">Edit</a>
                                <a class="btn btn-xs btn-danger" href="{{asset('import/by_sea/del').'/'.$row->id}}">Del</a></th>
                          </tr>
                        @endforeach
                </table>
              </div>
          </div>
      </div>
    </div>
@endsection
