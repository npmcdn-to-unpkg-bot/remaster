@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Plan -> Do -> Check -> Action</div>
                <div class="panel-body">
                    <a href="{{asset('/home')}}"><img src="file/pdca.jpg" alt="" width="500" height="500" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
