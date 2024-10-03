
<section class="mb-4 h-12 w-full bg-gray-400 px-4 flex items-center text-white font-semibold">
    <h1>Data Lengkap</h1>
</section>

@foreach($data as $d)
<h1>Nama: <span class="text-red-500">{{ $d->nama }}</span></h1>
<h1>Umur: <span class="text-red-500">{{ $d->umur }}</span></h1>
<h1>Nama Bitcoin: <span class="text-red-500">{{ $d->nama_bitcoin }}</span></h1>
<h1 class="mb-10">Harga Bitcoin: <span class="text-red-500">{{ $d->harga_bitcoin }}</span></h1>
@endforeach

<a class="py-2 px-4 bg-blue-400 text-white" href="/">Kembali</a>