

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
        <button type="submit"  class="bg-white ml-5 text-square font-bold py-2 px-4 rounded-full border"> Logout</button>
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

<div class="flex justify-center mx-32 mt-10">
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
</div>

<div class="flex justify-center mx-32 mt-10">
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
</div>

<div class="flex justify-center mx-32 mt-10">
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
</div>

<div class="flex justify-center mx-32 mt-10">
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md mr-4 ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
  <div class="w-64 h-96 bg-white rounded-md ">
    <div class="w-64 h-64 bg-link rounded-md"></div>
    <div class="break-all font-bold text-2xl mx-4 mt-2">adljasldkjasldja38karakterlasjlddsssss</div>
    <div class="break-all font-bold text-xl mx-4 mt-2">Rp. 20000</div>
  </div>
</div>

<div class="my-8 flex justify-center">
  <nav aria-label="Page navigation example">
    <ul class="list-style-none flex">
      <li>
        <a
          class=" text-xl relative block rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
          href="#"
          >Previous</a
        >
      </li>
      <li>
        <a
          class="text-xl relative block rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
          href="#"
          >1</a
        >
      </li>
      <li aria-current="page">
        <a
          class="text-xl relative block rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
          href="#"
          >2</a
        >
      </li>
      <li>
        <a
          class="text-xl relative block rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
          href="#"
          >3</a
        >
      </li>
      <li>
        <a
          class="text-xl relative block rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
          href="#"
          >Next</a
        >
      </li>
    </ul>
  </nav>
</div>





</body>
</html>
