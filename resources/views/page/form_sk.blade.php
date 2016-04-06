
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $row_last['name'], ['class' => 'form-control','disabled', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>

    {!! Form::label('kapal', 'Kapal') !!}
    {!! Form::text('kapal', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('origin') }}</small>

    {!! Form::label('voy', 'Voy') !!}
    {!! Form::text('voy', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('etd') }}</small>

    {!! Form::label('bl', 'BL') !!}
    {!! Form::text('bl', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('eta_port') }}</small>

    {!! Form::label('date_bl', 'BL DATE') !!}
    {!! Form::input('date','date_bl', date('Y-m-d'), ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('eta_aiia') }}</small>

    {!! Form::label('jumlah_barang', 'Jumlah Barang') !!}
    {!! Form::text('jumlah_barang', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('eta_port') }}</small>

    {!! Form::label('satuan', 'Satuan') !!}
    {!! Form::text('satuan', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('eta_port') }}</small>
