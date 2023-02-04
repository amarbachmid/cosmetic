@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="p-3 btn btn-outline-info text-light col-md-5 border-0">
        <main class="form-registration">
            <h1 class="h3 fw-normal text-center text-dark">PEMESANAN MOBIL</h1>
            <form action="{{ url('pembelian/'.$cos->id) }}" method="post" class="">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-floating">
                    <label>Nama </label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label> Buah </label>
                    <input type="number" class="form-control " name="pcs" placeholder="pcs" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="nomor">/ buah</label>
                    <input type="text" class="form-control" name="perpcs" placeholder="/ pcs" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="fakultas">Merek</label>
                     <select id="fakultas" name="brands_id" class="form-control">
                        <option value="2">SOMETHINC</option> 
                        <option value="3">N'PURE</option>
                        <option value="4">SKINITIFIC</option> 
                    </select>
                </div>
                <div class="form-floating">
                    <label for="fakultas">Tipe</label>
                     <select id="fakultas" name="types_id" class="form-control">
                        <option value="2">Somethinc Aha bha pha weekly peeling sqution 200 ml.</option> 
                        <option value="3">Somethinc axillary brightening cream 15 G</option>
                        <option value="4">Somethinc Baku chiol skinpair oil 20 ml.</option> 
                        <option value="5">Somethinc Acne shot ac spot gel 15 G.</option>
                        <option value="6">N'pure cica acne spot 20 G.</option> 
                        <option value="7">N'pure cica beat the sun spf 50+  35 ml.</option>
                        <option value="8">N'pure ucorice cleanser bright the light 80 G.</option> 
                        <option value="9">N'pure ucorice moisturizing creamy light 25 G.</option>
                        <option value="10">Skintific 10% niacinamide brightening serum 20 ml.</option> 
                        <option value="11">Skintific 2% salicylid acid anti acne serum 20 ml.</option>
                        <option value="12">Skintific crystal massager lifting eye cream 20 G.</option> 
                        <option value="13">Skintific serum gentel - A  retinol renewel 20 ml.</option>
                    </select>
                </div>
                <button class="w-50 btn btn-outline-success text-dark mt-3" type="submit">Pesan</button>
            </form>
        
        </main>
    </div>
</div>
@endsection

