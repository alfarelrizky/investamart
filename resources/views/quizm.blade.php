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
                <div class="row" style>
                    <div class="col-lg-12">
                        <div style='padding-left:75px;padding-right:75px;'>
                            <strong>
                                <p style='font-size:4vw;line-height:1.2;text-align:center;color:#ff3458' id='place_soal'></p>
                            </strong>
                            <div>
                                <div class="input-group" style='font-size:2.5vw;'>
                                    <div class="input-group-prepend mr-2">
                                        <div class="input-group-text">
                                        <input type="radio" aria-label="Radio button for following text input">
                                        </div>
                                    </div>
                                    A &nbsp; TRAVELLING KELILING DUNIA
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <a href='{{route('investamart.quizm',$id)}}' class="btn btn-primary" style='background-color:black;;font-size:2vw;'>MULAI SEKARANG &nbsp;<i class='fas fa-arrow-right'></i></a>
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
            'soal2',
            'soal3',
            'soal4',
            'soal5',
            'soal6',
            'soal7',
            'soal8',
            'soal9',
            'soal10',
        ];
        let template = document.getElementById('place_soal');
        id = id -1;
        template.innerHTML = soal[id];
    </script>
@endsection