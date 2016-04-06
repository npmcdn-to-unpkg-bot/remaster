
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>

    {!! Form::label('origin', 'Origin') !!}
    {!! Form::text('origin', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('origin') }}</small>

    {!! Form::label('etd', 'ETD ORIGIN') !!}
    {!! Form::input('date','etd', date('Y-m-d',strtotime($row->etd)), ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('etd') }}</small>

    {!! Form::label('eta_port', 'ETA PORT') !!}
    {!! Form::input('date','eta_port', date('Y-m-d',strtotime($row->eta_port)), ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('eta_port') }}</small>

    {!! Form::label('eta_aiia', 'ETA AIIA') !!}
    {!! Form::input('date','eta_aiia', date('Y-m-d',strtotime($row->eta_aiia)), ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('eta_aiia') }}</small>
