@extends('admin.admin_master')
@section('admin')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Data Dosen</h3>
          <a href="{{ route('dosen.add') }}" style="float:right;" button type="button" class="btn btn-rounded btn-success mb-5">Tambah Barang</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Jenis Barang</th>
								<th>Nama Barang</th>
								<th>Stok</th>
								<th>Harga</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($allDataDosen as $key => $dosen)
								<tr>
									<td>{{ $key + 1 }}</td>
									<td>{{ $dosen->nip }}</td>
									<td>{{ $dosen->namaDsn }}</td>
									<td>{{ $dosen->alamatDsn }}</td>
									<td>Rp. {{ number_format($dosen->harga, 2, ',', '.') }}</td>
									<td>
										<a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-info">Edit</a>
										<a href="{{ route('dosen.delete', $dosen->id) }}" id="delete" class="btn btn-danger">Delete</a>
									</td>
								</tr>
							@endforeach
							
						</tbody>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection