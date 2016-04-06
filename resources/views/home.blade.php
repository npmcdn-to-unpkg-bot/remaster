@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Import Menu</div>

                <div class="panel-body">
                  <ul>
                    <li><a href="{{asset('/import/by_air')}}">Import By AIR</a></li>
                    <li><a href="{{asset('/import/by_sea')}}">Import By SEA</a></li>
                    <li><a href="{{asset('/import/sk_sea')}}">Surat Kuasa Import By SEA</a></li>
                    <li><a href="#">Surat Kuasa Import By AIR</a></li>
                  </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Export Menu</div>

                <div class="panel-body">
                  <ul>
                    <li><a href="#">Export By AIR</a></li>
                    <li><a href="#">Export By SEA</a></li>
                    <li><a href="#">Shiping Instruction By SEA</a></li>
                    <li><a href="#">Shiping Instruction By AIR</a></li>
                  </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Government & Report Menu</div>
                <div class="panel-body">
                  <ul>
                    <li><a href="#">Report Monthly</a></li>
                    <li><a href="#">Report API-P Monthly</a></li>
                    <li><a href="#">Report API-P 3 Monthly</a></li>
                    <li><a href="#">Receiving Import Part Monthly</a></li>
                    <li><a href="#">Receiving CKD Monthly</a></li>
                  </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Progress 90%</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Progress 0%</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Progress 0%</div>
            </div>
        </div>
</div>
@endsection
