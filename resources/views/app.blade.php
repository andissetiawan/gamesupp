<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta Nama="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
  @vite('resources/css/app.css')
</head>
<body class="">
<div class="flex items-center justify-end min-h-screen bg-colorregister">
    <div class="px-8 py-6 mx-4 mt-4 mr-20 text-left bg-square shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3 rounded-lg ">
        <h3 class="text-2xl font-bold text-center text-white">Daftar Sekarang</h3>
        <div class="mt-6 text-white">
                    Sudah Punya Akun ?
                    <a class="text-link hover:underline" href="#">
                        Masuk
                    </a>
                </div>
        <form action="">
            <div class="mt-4">
                <div>
                    <label class="block text-white" for="Nama">Nama<label>
                            <input type="text" placeholder="Nama"
                                class="text-black w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block text-white" for="email">Email<label>
                            <input type="text" placeholder="Email"
                                class="text-black w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block text-white">Password<label>
                            <input type="password" placeholder="Password"
                                class="text-black w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block text-white">Konfirmasi Password<label>
                            <input type="password" placeholder="Password"
                                class=" text-black w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-link bg-colorregister rounded-lg hover:bg-blue-900">Daftar</button>
                </div>
                
            </div>
        </form>
    </div>
</div>
</body>
</html>