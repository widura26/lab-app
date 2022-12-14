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
				  <h3 class="box-title">Data Barang</h3>
          <a href="{{ route('barang.add') }}" style="float:right;" button type="button" class="btn btn-rounded btn-success mb-5">Tambah Barang</a>
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
							@foreach ($allDataBarang as $key => $barang)
								<tr>
									<td>{{ $key + 1 }}</td>
									<td>{{ $barang->JenisBarang }}</td>
									<td>{{ $barang->namaBarang }}</td>
									<td>{{ $barang->stok }}</td>
									<td>Rp. {{ number_format($barang->harga, 2, ',', '.') }}</td>
									<td>
										<a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-info">Edit</a>
										<a href="{{ route('barang.delete', $barang->id) }}" id="delete" class="btn btn-danger">Delete</a>
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