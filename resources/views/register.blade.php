<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta Nama="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Source+Serif+Pro:wght@700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>Daftar | Game Supply</title>
</head>
<body class="">
<div class="flex items-center justify-end min-h-screen bg-colorregister">
<div class="flex flex-col ">
<div id="tagregis" class="text-8xl mr-64 text-white">Daftar Untuk</div>
<div id="tagregis" class="text-8xl mr-64 text-white">Bergabung Ke</div>
<div id="tagregis" class="text-8xl mr-64 text-white">Game Supply</div>


</div>

    <div class=" px-8 py-6 mx-4 mt-4 mr-20 text-left bg-square shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3 rounded-lg ">
        <h3 class="text-5xl font-bold text-center text-white">Daftar Sekarang</h3>
        <div class="mt-6 text-white text-center">
                    Sudah Punya Akun ?
                    <a class="text-link hover:underline" href="{{ url('masuk') }}">
                        Masuk
                    </a>
                </div>
        <form action="{{ route('simpanregistrasi') }}" method="POST">
            {{ csrf_field() }}
            <div class="mt-4">
                <div>
                    <label class="block text-white" for="Username">Username<label>
                            <input type="text" placeholder="Username" name="username"
                                class="text-black w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block text-white" for="nomorTelepon">email<label>
                            <input type="text" placeholder="email" name="email"
                                class="text-black w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block text-white">Password<label>
                            <input type="password" placeholder="Password" name="pass"
                                class="text-black w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block text-white">Konfirmasi Password<label>
                            <input type="password" placeholder="Password" name="konfpass"
                                class=" text-black w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex">
                    <button type="submit" class="w-full px-6 py-2 mt-4 text-link bg-colorregister rounded-lg hover:bg-blue-900">Daftar</button>
                </div>

            </div>
        </form>
    </div>
</div>
</body>
</html>
