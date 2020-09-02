@extends('layouts/app')
@section('style_custom')
    <link rel="stylesheet" href="{{asset('css/custom/style.css')}}">
@endsection

@section('content')
    {{-- jumbotron --}}
        <img class='bg-jumbotron' src="{{asset('img/jumbotron-blue.png')}}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class='icon-jumbotron' src="{{asset('img/human.png')}}" alt="">
                </div>
            </div>
            <div class="row mt-4" style='margin-bottom:10px;'>
                <div class="col-md-12">
                    <div class="text-center text-light">
                        <div>
                            <span style='font-size:3vw;'>KAMU ADALAH</span><br>                        
                            <span class='title' style='font-size:6.8vw;'><strong>THE OPPORTUNIST</strong></span><br>
                            <span style='font-size:3vw;'>A.K.A KONSERVATIF</span><br>                        
                            <div class="p-4 text">
                                Kamu memiliki toleransi terhadap resiko yang cenderung rendah dimana return yang diharapkan minimal setara dengan suku bunga deposito dengan fluktuasi nilai pasar yang minimal untuk mencapai tujuan investasi kamu.
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 ">
                    <div class="text-center text-light">
                        <span class='kepala' style='font-size:2vw;'><strong>POTENSI KEUANGAN KAMU 10 TAHUN MENDATANG</strong></span><br>
                    </div>
                    <canvas id="myChart" width="100%" height="60px"></canvas>
                    <div class="text-center text-light p-4 text" style='font-size:2vw;line-height: 1.2;'>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis animi accusamus facere exercitationem rem ex! Mollitia minus eum nemo, hic, voluptatibus itaque, corrupti quibusdam dignissimos voluptas voluptate repellendus magni placeat!
                    </div>
                </div>
            </div>

            <div class="row m-4">
                <div class="col-lg-12 text-center">
                    <div class="btn tombol text-white" style='background-color:black'>SHARE &nbsp;<i class='fas fa-arrow-right'></i></div>
                </div>
            </div>

            <div class="row mt-4" style>
                <div class="col-lg-12 mt-4 mb-4">
                    <div class="text-center" style='color:yellow;'>
                        <div class='bujukan' style='font-size:3vw;'>AYO MULAI BERINVESTASI DARI SEKARANG <br>DAN DAPATKAN BONUS  DIAWAL SEBESAR <br> <strong>IDR 1,000,000</strong> REKSADANA TUNAI</div>
                    </div>
                </div>
                 <div class="col-lg-12">
                    <div class="text-center text-light">
                        <div class='text' style='font-size:1.5vw;'>Cukup dengan mendaftarkan diri kamu dengan mengisi form dibawah ini, kamu akan mendapatkan bonus langsung reksadana di aplikasi Invesnow!</div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="row mt-4" style>
                    <div class="col-lg-12 mt-4 mb-4">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class='form-control formulir' style='height:80px;font-size:1.5vw;' placeholder='NAMA'>
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control formulir' style='height:80px;font-size:1.5vw;' placeholder='EMAIL'>
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control formulir' style='height:80px;font-size:1.5vw;' placeholder='MOBILE'>
                            </div>
                        </form>
                        <div class="d-flex justify-content-end">
                            <button class="btn tombol text-white" style='background-color:black'>SUBMIT &nbsp;<i class='fas fa-arrow-right'></i></button>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    {{-- jumbotron - closed --}}
@endsection