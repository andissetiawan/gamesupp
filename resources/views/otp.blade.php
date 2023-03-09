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
<div class="flex items-center justify-center min-h-screen bg-colorregister">
    
    <div class=" px-8 py-6 mx-4 mt-4 mr-20 text-left bg-square shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3 rounded-lg ">
        <h3 class="text-5xl font-bold text-center text-white">Masukkan Kode OTP</h3>
        <div class="mt-6 text-white text-center">
                    
                    <a class="text-xl text-link hover:underline" href="{{ url('masuk') }}">
                        Kirim Ulang
                    </a>
                </div>
        <form action="">
          
            <div class="mt-4">
                <div>
                <input type="text" class="text-black w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                
                <div class="flex">
                    <button class="w-full px-6 py-2 mt-4 text-link bg-colorregister rounded-lg hover:bg-blue-900">Submit</button>
                </div>
                
            </div>
        </form>
    </div>
</div>
</body>
</html>