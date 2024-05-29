@extends('template.template')

@if(session('pesan'))
    @php
        $pesan = session('pesan');
    @endphp
    <script>
        alert("{{ $pesan }}");
    </script>
@endif

@section('title')
    Prakerja Page
@endsection

@section('body')
    <div class="container mx-auto mt-10 max-w-7xl">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="flex justify-between">
      <div class="text-3xl">Data Prakerja</div>
        <div>
    <a href="{{ route('tambah') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md"> Tambah Data</a>
  </div>
</div>

<table class="table w-full mt-5 border p-3">
  <thead>
    <tr class="border p-3">
      <th class="border p-3">No</th>
      <th class="border p-3">Nama</th>
      <th class="border p-3">Email</th>
      <th class="border p-3">Telpon</th>
      <th class="border p-3">Alamat</th>
      <th class="border p-3">Pendidikan</th>
      <th class="border p-3">Foto</th>
      <th class="border p-3">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($prakerja as $i => $p)
      <tr class="border p-3">
        <td class="border p-3">{{ $i+1 }}</td>
        <td class="border p-3">{{ $p->nama }}</td>
        <td class="border p-3">{{ $p->email }}</td>
        <td class="border p-3">{{ $p->telpon }}</td>
        <td class="border p-3">{{ $p->alamat }}</td>
        <td class="border p-3">{{ $p->pendidikan_terakhir }}</td>
        <td class="border p-3"><img src="{{ asset('foto_user/'.$p->foto_user) }}" alt="" width="200px" height="200px"></td>
        <td class="border p-3">
          <div class="flex gap-3 justify-center">
            <a href="{{ route('edit-prakerja',$p->id) }}" class="bg-yellow-500 flex items-center justify-center hover:bg-yellow-400 text-white rounded-md w-14 h8 p-2">Edit</a>
            <a href="{{ route('hapus-prakerja',$p->id) }}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h8 p-2" onclick="return confirm('Apa anda yakin menghapus prakerja ini?');">Hapus</a>
          </div>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

  </div>
</div>
@endsection
