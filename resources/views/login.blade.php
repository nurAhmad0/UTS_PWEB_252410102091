<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vehicle Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="justify-center bg-green-300 flex items-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-slate-900">Selamat Datang</h1>
            <p class="text-sm text-slate-500 mt-1">Silakan masuk menggunakan username dan password</p>
        </div>
        @if(session('error'))
            <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-600 text-sm rounded-xl text-center">
                {{ session('error') }}
            </div>
        @endif
        <form action="/login" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="font-semibold text-slate-900 text-2xl mt-2">Username</label>
                <input type="text" name="username" required class="border border-slate-200 rounded-xl w-full px-4 py-2.5 text-sm bg-slate-50 focus:outline-none focus:border-indigo-500 focus:bg-white transition" placeholder="Masukkan username">
            </div>
            <div>
                <label class="text-2xl font-semibold text-slate-900 mt-2">Password</label>
                <input type="password" name="password" required class="border border-slate-200 rounded-xl w-full px-4 py-2.5 text-sm bg-slate-50 focus:outline-none focus:border-indigo-500 focus:bg-white transition" placeholder="Masukkan password">
            </div>
            <button type="submit"
                    class="w-full mt-2 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm rounded-xl shadow-sm transition"> Masuk
            </button>
        </form>
    </div>
</body>
</html>
