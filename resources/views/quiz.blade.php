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
                    <img class='icon-jumbotron' src="{{asset('img/human4.png')}}" alt="">
                </div>
            </div>
            <div class="py-4">
                <div class="row" style>
                    <div class="col-lg-12">
                        <p class='text-white' style='font-size:2vw;line-height:1.2;text-align:justify'>
                            Penjelasan tentang apa itu Profil Resiko Gue dan iming2 hadiah. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <div class="d-flex justify-content-center mt-4">
                            <a href='{{route('investamart.quizm',$id)}}' class="btn btn-primary" style='background-color:black;;font-size:2vw;'>MULAI SEKARANG &nbsp;<i class='fas fa-arrow-right'></i></a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    {{-- jumbotron - closed --}}
@endsection