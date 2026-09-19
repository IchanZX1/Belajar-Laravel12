<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
</head>
<body>
    <div class="card">
        <h1>katalog Produk {{ $kategori }}</h1>
        <table border="1" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $daftarProduk as $item )
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['harga'] }}</td>
                    <td><a href="{{ url('/produk/' . $item['id']) }}">Lihat Detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
