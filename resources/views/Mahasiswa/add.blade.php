@extends('layouts.app')

@section('content')

<div class="container">
  <h3>tambah data mahasiswa</h3>
  <form action="{{url('/Mahasiswa')}}">
    @csrf
    <table>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="mhsw_nim"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="mhsw_nama"></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td><input type="text" name="mhsw_jurusan"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="mhsw_alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="simpan"></td>
      </tr>
    </table>
  </form>
</div>

@endsection