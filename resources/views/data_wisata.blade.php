@extends("template")

@section("tittle")
data_wisata
@endsection

@section("content")
<style>
    table{
        border-radius: 20px ;
    }
</style>
<h1 class="text-center">WELLCOME</h1>
<br><br>
<a href="{{url('/')}}" class="btn btn-sm btn-danger  p-2 m-2 shadow">EL BACKO </a><a href="{{url('tambah-wisata')}}" class="btn btn-sm p-2 m-2 btn-primary   shadow">EL PLUSO</a>

<table class="table table-bordered bg-warning table-striped">
    <thead>
        <tr>
            <th class="text-center ">No.</th>
            <th class="text-center ">Nama</th>
            <th class="text-center ">Lokasi</th>
            <th class="text-center ">detail</th>
            <th class="text-center ">Hari Kerja</th>
            <th class="text-center ">Jam kerja</th>
            <th class="text-center ">Harga</th>
            <th class="text-center ">Hapus/Edit</th>
        </tr>
    </thead>
    
    <tbody>

        @foreach($destinations as $data)

        <tr>
        <td class="text-center p-2 m-2">{{$data->id}}</td>
        <td class="text-center p-2 m-2">{{$data->name}}</td>
        <td class="text-center p-2 m-2">{{$data->location}}</td>
        <td class="text-center p-2 m-2">{{$data->details}}</td>
        <td class="text-center p-2 m-2">{{$data->day_open}}</td>
        <td class="text-center p-2 m-2">{{$data->time_open}}</td>
        <td class="text-center p-2 m-2">{{$data->pricing}}</td>
        <td class="text-center p-2 m-2"><a class="btn btn-sm btn-danger m-1 p-1" onclick="return confirm('Lo siento {{$data->name}}.?')" href="{{ url('data-wisata/'.$data->id.'/hapus')}}">DELETO</a><a class="btn btn-sm btn-success p-1 m-1"  href="{{ url('data-wisata/'.$data->id.'/edit')}}">EL EDITO</a></td>
        </tr>
        
        @endforeach
    </tbody>
</table>


@endsection