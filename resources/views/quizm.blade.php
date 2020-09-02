@extends('layouts/app')
@section('style_custom')
    <link rel="stylesheet" href="{{asset('css/custom/style-quiz.css')}}">
@endsection

@section('content')
    {{-- jumbotron --}}
        <img class='bg-jumbotron' src="{{asset('img/jumbotron-orange.png')}}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class='icon-jumbotron' src="{{asset('img/header.png')}}" alt="">
                </div>
            </div>
            <div class="py-4">
                <div class="row">
                    <div class="col-lg-12" style='margin-bottom:100px;'>
                        <div style='padding-left:75px;padding-right:75px;'>
                            <strong>
                                <p style='font-size:4vw;line-height:1.2;text-align:center;color:#ff3458' id='place_soal'></p>
                            </strong>
                        </div>
                    </div>
                </div>
                @include('layouts/particals/pg')
                <div class="row">
                    <div class='col-lg-12' style='margin-top:100px;'>
                        <div class="d-flex justify-content-between">
                            <div>
                                <a href='{{route('investamart.quizn',$id)}}' class="btn btn-primary" style='background-color:black;;font-size:2vw;'>ULANG &nbsp;<i class='fas fa-arrow-left'></i></a>
                            </div>
                            <div>
                                <h1>{{$id}}/10</h1>
                            </div>
                            <div>
                                <a href='{{route('investamart.quizm',$id)}}' class="btn btn-primary" style='background-color:black;;font-size:2vw;'>LANJUT &nbsp;<i class='fas fa-arrow-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    {{-- jumbotron - closed --}}

    <script>
        let id = <?php echo $id;?>;
        let soal = [
            'APA GOAL KAMU DI MASA DEPAN ?',
            'BERAPA LAMA WAKTU YANG DIBUTUHKAN UNTUK MENCAPAI GOAL KAMU?',
            'PENTINGKAH INVESTASI MENURUT KAMU?',
            'APAKAH KAMU SUDAH MENYISIHKAN UANG KAMU SETIAP BULAN?',
            'MENURUT KAMU DARI PENGHASILAN BERAPA PERSEN YANG HARUS DISISIHKAN?',
            'PRODUK INVESTASI APA YANG KAMU KETAHUI?',
            'APAKAH KAMU MEMAHAMI INVESTASI DI REKSADANA?',
            'APAKAH KAMU SUDAH BERINVESTASI DI REKSADANA?',
            'DALAM BERINVESTASI, APA YANG KAMU HARAPKAN?',
            'APA YANG KAMU LAKUKAN JIKA INVESTASIMU TURUN LEBIH DARI 20% SEBULAN KETIKA PASAR INVESTASI SEDANG NAIK TURUN?',
        ];
        let template = document.getElementById('place_soal');
        id = id -1;
        template.innerHTML = soal[id];
    </script>
@endsection