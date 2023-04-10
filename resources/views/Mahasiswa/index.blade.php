@extends('layouts.app')

@section('content')

<div class="container">
  <h3>daftar mahasiswa</h3>
  <a href="{{url('/Mahasiswa/create')}}">Tambah data</a>
  <table>
    <tr>
      <td>Nim</td>
      <td>Nama</td>
      <td>Jurusan</td>
      <td>Alamat</td>
    </tr>
    @foreach($rows as $row)
    <tr>
      <td>{{$row->mhsw_nim}}</td>
      <td>{{$row->mhsw_nama}}</td>
      <td>{{$row->mhsw_jurusan}}</td>
      <td>{{$row->mhsw_alamat}}</td>
    </tr>
    @endforeach
  </table>

</div>
@endsection