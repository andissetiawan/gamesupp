

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memenuhi Kebutuhan Gaming Anda | Game Supply</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
    @vite('resources/css/app.css')


</head>
<body class="bg-colorregister ">
<nav class="bg-square py-2 py-7">
  <div class="flex max-w-9xl mx-auto px-4 sm:px-6 lg:px-8 items-center">
  <a href="/">
          <img class="px-5 w-full h-8" src="{{ asset ('img/logogs.png') }}" alt="Logo Brand">
        </a>
<div class="ml-10 mr-10">
<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
<div class="relative">
<form action="/" method="">
  <input class="custom-input block rounded-full py-3 px-4 " id="search" type="text" placeholder="Search..." name="search">
</form>
</div>
</div>
</div>
<div class="flex">
    @if (auth()->check() )
    <form action="/proseslogout" method="post">
        @csrf
        <button type="submit"  class=" bg-white ml-5 text-square font-bold py-2 px-4 rounded-full border"> Logout</button>
    </form>
    @else
    <a href="{{ url('/masuk') }}" class=" bg-white text-square font-bold py-2 px-4 rounded-full border">
        Masuk
      </a>
      <a href="{{ url('/daftar') }}" class=" bg-white ml-5 text-square font-bold py-2 px-4 rounded-full border">
        Daftar
      </a>
    @endauth



</div>
</div>
</nav>

<!-- body -->
<div class="flex justify-center">
<div class=" w-10/12 mt-10 h-96 rounded-md bg-white">
</div>
</div>

<div class="flex justify-center">
<div class=" w-10/12 mt-10 h-96">
<div style="display: flex; justify-content: space-between;">
  <div>
    <h3 class="text-5xl font-bold text-white">Terbaru</h3>
  </div>
  <div style="align-self: flex-end;">
    <a class="text-white text-xl self-center flex" href="{{ url('/#') }}">View All &nbsp;
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
</svg>

    </a>
  </div>
</div>
<!-- component -->

<div class="flex flex-col mt-4">
      <div
        class=" overflow-x-scroll pb-10 hide-scroll-bar"
      >
        <div
          class="flex flex-nowrap  "
        >
        @foreach ($barang as $b=>$item )
        <div class="inline-block px-3">
            <div
              class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            >
            @php
               $link=asset("img/". $item->link_img1)
            @endphp
            <img src="{{$link}}" alt="">

        </div>
          </div>
        @endforeach
        </div>
      </div>
</div>
</div>
</div>

<div class="flex justify-center">
<div class=" w-10/12 mt-10 h-96">
<div style="display: flex; justify-content: space-between;">
  <div>
    <h3 class="text-5xl font-bold text-white">Kategori Pilihan</h3>
  </div>
  <div style="align-self: flex-end;">
    <a class="text-white text-xl self-center flex" href="{{ url('/#') }}">View All &nbsp;
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
</svg>

    </a>
    
  </div>
</div>
<div class="flex flex-col mt-4">
      <div
        class=" overflow-x-scroll pb-10 hide-scroll-bar"
      >
        <div
          class="flex flex-nowrap  "
        >
        @foreach ($barang as $b=>$item )
        <div class="inline-block px-3">
            <div
              class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
            >
            @php
               $link=asset("img/". $item->link_img1)
            @endphp
            <img src="{{$link}}" alt="">

        </div>
          </div>
        @endforeach
        </div>
      </div>
</div>
</div>
</div>
<div class="flex justify-center">
<div class=" w-10/12 mt-10 h-96 h-96 bg-center  rounded-md bg-white mb-10 bg-cover" style="background-image: url('{{ asset('img/uploadform.jpg') }}');" >
<div class="flex pt-16 px-16">
<div class="w-2/3">
<h1 class="text-6xl font-bold text-white">Posting Barang Anda Dengan Klik Tombol Di Bawah Ini</h1>
<button type="submit"  class="text-2xl bg-white mt-8 text-square font-bold py-4 px-8 rounded-full border"> Posting Barang</button>

</div>

</div>
</div>
</div>



</body>
</html>
