@extends('layouts.layoutUtama')
@section('title', 'Profil')
@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl">Profil Pengguna</h1>
    </div>
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden p-8">
        <div class="flex flex-col md:flex-row items-center gap-6">
            <div class="w-32 h-32 rounded-full overflow-hidden bg-slate-100 border-4 border-slate-50 shadow-inner flex-shrink-0">
                <img src="/image/user/image.png"
                    alt="foto profile"
                    class="w-full h-full object-cover">
            </div>
            <h2 class="text-2xl mt-2">{{ $dataUser['nama'] }}</h2>

        </div>
        <div class="mt-8 pt-6 border-t border-slate-100 grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
            <div class="flex justify-between p-4 bg-slate-50 rounded-xl">
                <span >Username: </span>
                <span >{{ $dataUser['username'] }}</span>
            </div>
            <div class="flex justify-between p-4 bg-slate-50 rounded-xl">
                <span >Email: </span>
                <span >{{ $dataUser['email'] }}</span>
            </div>
            <div class="flex justify-between p-4 bg-slate-50 rounded-xl">
                <span >Tanggal Gabung</span>
                <span >{{ $dataUser['tanggalGabung'] }}</span>
            </div>
        </div>
    </div>
</div>
@endsection
