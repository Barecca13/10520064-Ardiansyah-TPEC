<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Belajar Laravel 9</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<main style="margin-top: 70px">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 mb-2">
            <table class="table">
                <thead>
                    <td>
                        <th>Kategori Produk</th>
                        <th>{{ $kategori_produk }}</th>
                    </td>
                </thead>
                <thead>
                    <td>
                        <th>Nama Produk</th>
                        <th>{{ $nama_produk }}</th>
                    </td>
                </thead>
                <thead>
                    <td>
                        <th>Stok</th>
                        <th>{{ $stok }}</th>
                    </td>
                </thead>
                <thead>
                    <td>
                        <th>Harga Produk</th>
                        <th>Rp. {{ $harga_produk }}</th>
                    </td>
                </thead>
            </table>
            </div>
        </div>
    </div>
</main>