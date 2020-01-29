<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5"> Tambah Data Barang </h2>

			<div class="col-lg-5 mx-auto my-10">

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}



                    <div class="col-1-md-10">
                    <label class="control-label col-1-md-30">Nama Barang </label>
                    <input type="text" class="form-control" name="nama_barang" required="null">
                    </div>

                    <div class="col-1-md-10">
                        <label class="control-label col-1-md-30">Harga </label>
                        <input type="text" class="form-control" name="harga" required="null">
                        </div>

                    <div class="col-1-md-10">
                            <label class="control-label col-1-md-30">Stok </label>
                            <input type="text" class="form-control" name="stok" required="null">
                            </div>

					<div class="form-group">
						<b>File Barang</b><br/>
						<input type="file" name="file">
					</div>

					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
            </div>
            <div class="col-lg-10 mx-auto my-10">
				<h4 class="my-5">Data</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="15%" hight="5%"><center> Nama Barang </center></th>
                            <th width="15%" hight="5%"><center> Harga </center></th>
                            <th width="15%" hight="5%"><center> Barang </center></th>
                            <th width="15%" hight="5%"><center> Stok </center></th>
                            <th width="15%" hight="5%"><center> Keterangan </center></th>
							<th width="1%" hight="10%" >OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambars as $g)
						<tr>

                            <td><center>{{$g->nama_barang}}</center></td>
                            <td><center>{{$g->harga}}</center></td>
                            <td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
                            <td><center>{{$g->stok}}</center></td>
							<td><center>{{$g->keterangan}}</center></td>
							<td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
    </div>

</body>
</html>
