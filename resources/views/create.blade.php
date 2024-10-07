<form method="POST" action="{{ route('store') }}">
    @csrf
    <label class="mt-2 text-sm">Nama Pengguna</label>
    <input class="h-8 w-full border border-gray-200 rounded-md" type="text" name="nama_pengguna" required>

    <label class="mt-2 text-sm">Umur</label>
    <input class="h-8 w-full border border-gray-200 rounded-md" type="number" name="umur" required>

    <label class="mt-2 text-sm">Nama Bitcoin</label>
    <input class="h-8 w-full border border-gray-200 rounded-md" type="text" name="nama_bitcoin" required>

    <label class="mt-2 text-sm">Harga Bitcoin</label>
    <input class="h-8 w-full border border-gray-200 rounded-md" type="number" name="harga" required>

    <button type="submit" class="mt-4 h-8 w-24 bg-blue-400 text-white rounded-md text-sm">Submit</button>
</form>