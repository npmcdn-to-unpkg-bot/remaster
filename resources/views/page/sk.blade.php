@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
              <div class="panel-heading"><button class="btn btn-success" href="{{asset('/import/sk_sea/create')}}">Create</button></div>
              <div class="panel-body">

                <table id="import_by_air" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>Namegoods</th>
                              <th>Kapal</th>
                              <th>Voy</th>
                              <th>BL Number</th>
                              <th>BL Date</th>
                              <th>Jumlah Barang</th>
                              <th>Satuan</th>
                              <th></th>
                          </tr>
                      </thead>
                          @foreach($row as $row)
                          <tr>
                              <th>{{$row->name}}</th>
                              <th>{{$row->kapal}}</th>
                              <th>{{$row->voy}}</th>
                              <th>{{$row->bl}}</th>
                              <th>{{date('d-M-Y', strtotime($row->date_bl))}}</th>
                              <th>{{$row->jumlah_barang}}</th>
                              <th>{{$row->satuan}}</th>
                              <th><a class="btn btn-xs btn-warning" href="{{asset('import/sk_sea').'/'.$row->id}}/edit">Edit</a>
                              <a class="btn btn-xs btn-success" href="{{asset('import/sk_sea').'/'.$row->id}}">Print</a>
                              </th>
                          </tr>
                        @endforeach
                </table>
              </div>
          </div>
      </div>
    </div>
@endsection
