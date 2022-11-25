@extends('admin.admin_master')
@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update Barang</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('barang.update', $editData->id) }}"> 
            @csrf
						<div class="row">
							<div class="col-md-6">
                <div class="form-group">
                  <h5>Jenis Barang<span class="text-danger">*</span></h5>
                  <div class="controls">
                    <input type="text" name="JenisBarang" value="{{ $editData->JenisBarang }}" class="form-control"> 
									</div>
                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h5>Nama Barang<span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="namaBarang" value="{{ $editData->namaBarang }}" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <h5>Stok<span class="text-danger">*</span></h5>
                  <div class="controls">
                    <input type="text" name="stok" value="{{ $editData->stok }}" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <h5>harga<span class="text-danger">*</span></h5>
                  <div class="controls">
                    <input type="text" name="harga" value="{{ $editData->harga }}" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            {{-- end row --}}
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info">Submit</button>
					  </div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

<script src="{{asset('js/pages/form-validation.js') }}"></script>
	