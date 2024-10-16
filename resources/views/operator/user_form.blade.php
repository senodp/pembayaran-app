@extends('layouts.app_adminlte')
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">Form User</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
        </div>
    </div>
    <div class="card-body">
        
          {!! Form::model($model, ['route'=>$route, 'method'=>$method]) !!}
          <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        {!! Form::text('name', null, ['class'=>'form-control', 'autofocus']) !!}
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        <span class="text-danger">{{$errors->first('email')}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Password</label>
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>No Whatsapp</label>
                        {!! Form::text('nohp', null, ['class'=>'form-control']) !!}
                        <span class="text-danger">{{$errors->first('nohp')}}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Hak Akses</label>
                        {!! Form::select('akses', [
                            'operator'=>'Operator',
                            'admin' => 'Administrator'
                            ], null, ['class'=>'form-control']
                        ) !!}
                        <span class="text-danger">{{$errors->first('akses')}}</span>
                    </div>
                </div>
          </div>
          {!! Form::submit($button, ['class'=>'btn btn-success btn-sm']) !!}
          {!! Form::close() !!}
          
    </div>
    <!-- /.card-body -->
    {{--  <div class="card-footer">
        Footer
    </div>  --}}
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
@endsection
