<?php 
$no = 1;
?>

<h1>Selamat datang, User!</h1>

<div class="mt-6 h-[32rem] border border-gray-400 rounded-md flex flex-col">
    <nav class="h-12 bg-blue-400 rounded-t-md flex items-center px-4 text-white font-semibold">Data Pengguna</nav>

    <main class="grow p-4">
    <table class="w-full border border-gray-200">
    <thead class="bg-gray-400 text-white">
        <tr>
            <th class="px-4 py-2 border border-gray-300">No</th>
            <th class="px-4 py-2 border border-gray-300">Nama</th>
            <th class="px-4 py-2 border border-gray-300">Umur</th>
            <th class="px-4 py-2 border border-gray-300">Aksi</th>
        </tr>
    </thead>
    <tbody class="bg-gray-100">
        @foreach($data as $d)
        <tr>
            <td class="px-4 py-2 border border-gray-300 text-center">{{ $no++ }}</td>
            <td class="px-4 py-2 border border-gray-300">{{ $d->nama }}</td>
            <td class="px-4 py-2 border border-gray-300">{{ $d->umur }}</td>
            <td class="px-6 w-24 flex gap-4">
                <a class="p-2 px-4 bg-blue-400 text-white text-sm rounded-md" href="/detail/{{ $d->id_user }}">Detail</a>
                <a class="p-2 px-4 bg-yellow-400 text-white text-sm rounded-md" href="/edit/{{ $d->id_user }}">Edit</a>
                <a class="p-2 px-4 bg-red-400 text-white text-sm rounded-md" href="/delete/{{ $d->id_user }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    </main>
</div>