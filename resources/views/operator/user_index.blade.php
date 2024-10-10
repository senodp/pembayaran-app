@extends('layouts.app_adminlte')

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">List User</h3>

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
        <div class="row">
          <div class="col-12">
            <div class="card">
              {{--  <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                  </div>
                </div>
              </div>  --}}
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-striped text-nowrap">
                  <thead>
                    <tr>
                      <th width="10">No</th>
                      <th>Nama</th>
                      <th>No.HP</th>
                      <th>Email</th>
                      <th>Akses</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($models as $list)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$list->name}}</td>
                      <td>{{$list->nohp}}</td>
                      <td><i>{{$list->email}}</i></td>
                      <td>{{ucfirst($list->akses)}}</td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="4">Data Tidak Ada.</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
                {!! $models->links(); !!}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
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
