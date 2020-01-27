@extends('backend.layouts.adminmaster')

@section('title')
Products
@endsection

@section('content')

<h2>Data Produk</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>harga</th>
            <th>berat</th>
            <th>foto</th>
            <th>aksi</th>
        </tr>
    </thead>


    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){?>
            <tr>
                <td>nomor</td>
                <td>"nama_produk"</td>
                <td>"harga_produk"</td>
                <td><?php echo $pecah["berat_produk"]; ?></td>
                <td>
                    <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
                </td>
                <td>
                    <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];?>"
                     class="btn-danger btn">hapus</a>
                    <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>"
                    class="btn btn-warning">ubah</a>
                </td>
            </tr>
        <?php $nomor++; ?>

        <?php } ?>
    </tbody>
</table>
<class="btn btn-primary">Tambah Data</a>

@endsection
