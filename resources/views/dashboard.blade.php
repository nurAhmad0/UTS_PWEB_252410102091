@extends('layouts.layoutUtama')
@section('title', 'Dashboard')
@section('content')
<div class="space-y-6">
    <p class="w-2/4 mx-auto bg-white p-5 rounded-2xl shadow-sm border border-slate-200 flex justify-center items-center text-2xl">{{ $dataUser['username'] }} Memiliki Total Kendaraan: 12</p>
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <h2 class="text-2xl p-6 border-b borders-late-100 flex justify-between items-center">Kendaraan yang Anda Miliki</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 uppercase tracking-wider border-b border-slate-300">
                        <th class="text-1xl px-6">No</th>
                        <th class="text-1xl px-6">Nama Kendaraan</th>
                        <th class="text-1xl px-6">Plat Nomor</th>
                        <th class="text-1xl px-6">Kilometer (KM)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($daftarKendaraan as $index => $kendaraan)
                    <tr class="bg-slate-50 uppercase tracking-wider border-b border-slate-300">
                        <td class="text-1xl px-6">{{ $index + 1 }}</td>
                        <td class="text-1xl px-6">{{ $kendaraan['nama'] }}</td>
                        <td class="text-1xl px-6">{{ $kendaraan['plat'] }}</td>
                        <td class="text-1xl px-6">{{ $kendaraan['km'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
