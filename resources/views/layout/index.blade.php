@extends('app')
@section('title','index')
@section('context')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>

<div style="margin:20px">
    <a href="{{ route('create')}}" class="btn btn-success my-2 my-sm-0">Tambah Data</a>
    <br><br>

</form>
    <div class="table-responsive">
        <table class="table table-bordered table-hover" >
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th class="text-center" scope="col">Nama</th>
                    <th class="text-center" scope="col">Username</th>
                    <th class="text-center" scope="col">Usia</th>
                    <th class="text-center" scope="col">Tanggal Lahir</th>
                    <th class="text-center" scope="col">Alamat</th>
                    <th class="text-center" scope="col">Telephone</th>
                    <th class="text-center" scope="col">Email</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key =>$item )
                <tr>
                    <th scope="row">{{ $data->firstItem() + $key }}</th>
                    <td class="text-center">{{ $item ->nama}}</td>
                    <td class="text-center">{{ $item ->username}}</td>
                    <td class="text-center">{{ $item ->usia}}</td>
                    <td class="text-center">{{ $item ->tanggal_lahir}}</td>
                    <td class="text-center">{{ $item ->alamat}}, {{ $item ->kecamatan}}</td>
                    <td class="text-center">{{ $item ->telephone}}</td>
                    <td class="text-center">{{ $item ->email}}</td>
                    @if($item->foto != null)
                    <td><img src="{{ asset('storage/'.$item->foto) }}" width="60" height="100" alt="laravel"></td>
                    @else
                    <td><p>No Photo</p></td>
                    @endif
                    <td>
                        <a href="{{ route('editBaru', ['id'=>$item]) }}"><i class="material-icons"
                                data-toggle="tooltip" title="" data-original-title="Edit"
                                style="color: #EEB416;">edit</i></a>
                        <a href="{{route('destroydata',['id'=>$item->id])}}">
                            <i class="material-icons" data-toggle="tooltip" title=""
                                data-original-title="Delete">delete</i>
                            @csrf
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
</div>
@endsection
