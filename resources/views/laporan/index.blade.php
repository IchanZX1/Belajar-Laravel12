<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan</title>
</head>
<body>
    <h1>Rekap Laporan Penjualan</h1>

    <h3>Ringkasan Statistik</h3>
    <ul>
        <li>Total Transaksi: <strong>{{ $totalTransaksi }}</strong></li>
        <li>Total Pendapatan: <strong>Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</strong></li>
        <li>Rata-rata per Transaksi: <strong>Rp {{ number_format($rataRata, 0, ',', '.') }}</strong></li>
        <li>Bulan Terbaik: <strong>{{ $bulanTerbaik }}</strong></li>
    </ul>

    <h3>Rincian per Bulan</h3>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Bulan</th>
                <th>Jumlah Transaksi</th>
                <th>Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPenjualan as $item)
            <tr>
                <td>{{ $item['bulan'] }}</td>
                <td>{{ $item['transaksi'] }}</td>
                <td>Rp {{ number_format($item['pendapatan'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
