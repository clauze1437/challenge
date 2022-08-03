@extends('layouts.app')

@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Program Studi</th>
      <th scope="col">No hp</th>
      <th scope="col">Action</th>
      <th scope="col">Kelas</th>
    </tr>
  </thead>
  <tbody>

  @foreach($data as $key => $mhs)
    <tr>
      <th scope="row">{{ ++$key }}</th>
      <td>{{$mhs->nim }}</td>
      <td>{{$mhs->nama }}</td>
      <td>{{$mhs->prodi }}</td>
      <td>{{$mhs->hp }}</td>
      <td>
        <a href="#" class="btn btn-primary">detail</a>
        <a href="#" class="btn btn-warning">update</a>
        <a href="#" class="btn btn-warning">inbox</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
