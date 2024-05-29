@extends('template.template')

@section('title')
    Tambah Prakerja
@endsection

@section('body')
<div class="container mx-auto mt-10 max-w-7xl">
  <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <h1 class="text-center font-semibold text-3xl">Form Tambah Prakerja</h1>
    <form action="{{ route('tambah-prakerja') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="flex flex-col gap-2">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" class="p-2 border rounded-md" value="{{ old('nama') }}">
        <span class="text-red-500">{{ $errors->first('nama') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="p-2 border rounded-md" value="{{ old('email') }}">
        <span class="text-red-500">{{ $errors->first('email') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="telpon">No Telpon</label>
        <input type="text" id="telpon" name="telpon" class="p-2 border rounded-md" value="{{ old('telpon') }}">
        <span class="text-red-500">{{ $errors->first('telpon') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="5" class="border rounded-md">{{ old('alamat') }}</textarea>
        <span class="text-red-500">{{ $errors->first('alamat') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
        <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" class="p-2 border rounded-md" value="{{ old('pendidikan_terakhir') }}">
        <span class="text-red-500">{{ $errors->first('pendidikan_terakhir') }}</span>
      </div>

      <div class="flex flex-col gap-2">
        <label for="foto_user">Foto</label>
        <input type="file" name="foto_user" id="foto_user" class="p-2 border rounded-md">
        <span class="text-red-500">{{ $errors->first('foto_user') }}</span>
      </div>

      <div class="flex justify-center">
        <button type="submit" class="bg-blue-500 w-1/2 rounded-md text-white p-2 mt-1 hover:bg-blue-400">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection