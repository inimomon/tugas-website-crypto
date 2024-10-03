<form method="POST" action="{{ route('update') }}">
    @csrf
    @method('put')
    @foreach($data as $d)
    <input type="hidden" name="id" value="{{ $d->id_user }}">

    <label class="mt-2 text-sm">Nama Pengguna</label>
    <input class="h-8 w-full border border-gray-200 rounded-md" type="text" name="nama_pengguna" value="{{ $d->nama }}">

    <label class="mt-2 text-sm">Umur</label>
    <input class="h-8 w-full border border-gray-200 rounded-md" type="number" name="umur" value="{{ $d->umur }}">

    <label class="mt-2 text-sm">Nama Bitcoin</label>
    <input class="h-8 w-full border border-gray-200 rounded-md" type="text" name="nama_bitcoin" value="{{ $d->nama_bitcoin }}">

    <label class="mt-2 text-sm">Harga Bitcoin</label>
    <input class="h-8 w-full border border-gray-200 rounded-md" type="number" name="harga" value="{{ $d->harga_bitcoin }}">
    @endforeach

    <button type="submit" class="mt-4 h-8 w-24 bg-blue-400 text-white rounded-md text-sm">Submit</button>
</form>