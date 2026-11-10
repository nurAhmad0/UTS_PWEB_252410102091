<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $daftarKendaraan = [
        ['nama' => 'Toyota Avanza','plat' => 'B 1234 XYZ','km' => '45.200 KM', 'gambar' => 'https://i.pinimg.com/736x/a8/cf/9e/a8cf9eb3882f885f54f7c1653b0a0849.jpg'],
        ['nama' => 'Honda Vario 150','plat' => 'L 5678 AB','km'  => '12.450 KM', 'gambar' => 'https://i.pinimg.com/736x/ef/1b/7e/ef1b7ec66d365e1b5d7a6238ee3291e2.jpg'],
        ['nama' => 'Yamaha NMAX','plat' => 'N 9999 KOX','km'  => '5.100 KM', 'gambar' => 'https://i.pinimg.com/1200x/ab/29/a0/ab29a05d1d555d66859725f6741c4117.jpg'],
        ['nama' => 'PCX','plat' => 'A 198 AS','km' => '12.580 KM', 'gambar' => 'https://i.pinimg.com/1200x/a0/c2/3c/a0c23c35cfc7d540fd22a62fcac1e67f.jpg'],
        ['nama' => 'tank tiger t5','plat' => 'y 652 koy','km' => '670 KM', 'gambar' => 'https://i.pinimg.com/736x/7d/fe/5c/7dfe5ca56248a56cad59e9514c2f33cf.jpg'],
        ['nama' => 'honda beat','plat' => 'N 5008 AB','km' => '32.987 KM', 'gambar' => 'https://i.pinimg.com/736x/2e/c7/7c/2ec77cd8b34ee5ef77f3d86dfadfd242.jpg'],
        ['nama' => 'Szuki hayabusa','plat' => 'W 9YWW OWX','km' => '5.129 KM', 'gambar' => 'https://i.pinimg.com/736x/aa/bd/48/aabd48f7d796cbbfe598ad5ae41371dd.jpg'],
        ['nama' => 'H2','plat' => 'P 321 UOIY','km' => '50.200 KM', 'gambar' => 'https://i.pinimg.com/736x/50/b4/f8/50b4f8f6f84fe2acbc73cfe198695171.jpg'],
        ['nama' => 'HONDA VARIO 125','plat' => 'Q 2379 AS','km' => '87.450 KM', 'gambar' => 'https://i.pinimg.com/736x/35/48/4a/35484a7e59b8c619101236bc68b79d2a.jpg'],
        ['nama' => 'EROX','plat' => 'N 2832 ASL','km' => '12.722 KM', 'gambar' => 'https://i.pinimg.com/736x/71/9b/e6/719be69bf5f7b818188f22e88693a32a.jpg'],
        ['nama' => 'MIOOOOOOO','plat' => 'W 2390 P','km' => '12.180 KM', 'gambar' => 'https://i.pinimg.com/1200x/2b/7a/c9/2b7ac9778d9e4ec60f2c672a4769fab6.jpg'],
        ['nama' => 'Supra','plat' => 'P 1267 OI','km' => '20.0000 KM', 'gambar' => 'https://i.pinimg.com/736x/33/9c/5e/339c5e224bcda843d6758858cf056848.jpg']
    ];

    public function __construct()
    {
        $this->dataUser = [
            'nama' => 'Osama ganteng bet',
            'username' => 'admin123',
            'email' => 'ggBetGue@mail.com',
            'tanggalGabung' => date('d F Y')
        ];
    }









    public function index()
    {
        $daftarKendaraan = $this->daftarKendaraan;
        $dataUser = $this->dataUser;
        if (session()->has('username_login')) {
            $dataUser['username'] = session('username_login');
        }
        return view('dashboard', compact('daftarKendaraan', 'dataUser'));
    }

    public function daftar()
    {
        $daftarKendaraan = $this->daftarKendaraan;
        return view('pengelolaan', compact('daftarKendaraan'));
    }











    public function dataUser() {
        $dataUser = $this -> dataUser;
        if (session()->has('username_login')) {
            $dataUser['username'] = session('username_login');
        }
        return view('profile', compact('dataUser'));
    }







    public function login() {
        return view('login');
    }

    public function validasiLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        if ($username !== '' && $password === 'admin123') {
            session(['username_login' => $username]);
            return redirect('/dashboard')->with('selamat berhasil login', 'Berhasil login!');
        }
        return back()->with('error', 'Username atau Password salah!');
    }
}
