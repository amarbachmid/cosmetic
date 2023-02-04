
@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <font face="Verdana" size="6">
        <b><i>PEMBELIAN PRODUK COSMETIK</i></b> 
    </font>
</div>

<div class="btn btn-dark mt-5">
    <table align="center" class="table text-light">
        <tr align="center">
            <th>Name</th>
            <th>Buah</th>
            <th>/ Buah</th>
            <th>Merek</th>
            <th>Tipe</th>
            <th>Jumlah Harga</th>
            <th colspan="2">Perubahan</th>
        </tr>
        @foreach ($cos as $key=>$value)
        
        <tr align="center">
        <td>{{ $value->name }}</td>
        <td>{{ $value->pcs }}</td>
        <td>{{ $value->perpcs }}</td>
        <td>{{ $value->brands->name }}</td>
        <td>{{ $value->types->name }}</td>
        <td> 
        @php
                                        
            $ps = $value->pcs;
            $pps = $value->perpcs;
            $pspps = $ps * $pps;
            // jumlah
            echo $pspps;
        @endphp
        </td>
        <td><a href="{{ url('pembelian/'.$value->id.'/edit') }}" class="text-dark btn btn-outline-info btn-success">Edit</a></td>
        <td>
            <form action="{{ url('pembelian/'.$value->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="text-dark btn btn-outline-info btn-danger" type="submit">Hapus</button>
            </form>
        </td>
        </tr>
        
        @endforeach
        </table>


        <div class="row justify-content-center mt-5">
            <a href="pembelian/create" class="w-25 btn btn-light text-dark">Buat Pesanan</a>
        </div>
</div>
    
@endsection

    

    


