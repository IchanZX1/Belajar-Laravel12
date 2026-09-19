<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Data statis penjualan per bulan
        $dataPenjualan = [
            ['bulan' => 'Januari',  'transaksi' => 120, 'pendapatan' => 45000000],
            ['bulan' => 'Februari', 'transaksi' => 95,  'pendapatan' => 38500000],
            ['bulan' => 'Maret',    'transaksi' => 150, 'pendapatan' => 62000000],
        ];

        $totalTransaksi  = array_sum(array_column($dataPenjualan, 'transaksi'));
        $totalPendapatan = array_sum(array_column($dataPenjualan, 'pendapatan'));
        $rataRata        = $totalPendapatan / $totalTransaksi;

        $pendapatanPerBulan = array_column($dataPenjualan, 'pendapatan', 'bulan');
        $bulanTerbaik       = array_search(max($pendapatanPerBulan), $pendapatanPerBulan);

        return view('laporan.index', compact(
            'dataPenjualan',
            'totalTransaksi',
            'totalPendapatan',
            'rataRata',
            'bulanTerbaik'
        ));
    }
}
