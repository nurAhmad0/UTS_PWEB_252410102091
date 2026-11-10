@extends('layouts.layoutUtama')
@section('title', 'Daftar Kendaraan')
@section('content')
<div class="space-y-6">
    <p class="w-2/4 mx-auto bg-white p-5 rounded-2xl shadow-sm border border-slate-200 flex justify-center items-center text-2xl">Semua Daftar Kendaraan</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($daftarKendaraan as $kendaraan)
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden flex flex-col justify-between hover:shadow-md transition">
            <div class="w-full h-48 bg-slate-100 overflow-hidden">
                <img src="{{ asset($kendaraan['gambar']) }}"
                    alt="{{ $kendaraan['nama'] }}"
                    class="w-full h-full object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-2xl">{{ $kendaraan['nama'] }}</h3>

                <div class="space-y-2 border-t border-slate-100 pt-4 text-2xl mt-2">
                    <div class="flex justify-between items-center">
                        <span>Plat Nomor</span>
                        <span>{{ $kendaraan['plat'] }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span>Kilometer</span>
                        <span >{{ $kendaraan['km'] }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
