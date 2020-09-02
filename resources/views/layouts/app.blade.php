<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investamrt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{asset('font-awesome/css/all.css')}}" rel="stylesheet"> <!--load all styles -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>    
    <script src="{{asset('js/sweetalert/sweetalert.min.js')}}"></script>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <style>
        @font-face {
            font-family: CustomFont;
            src: url("{{asset('fonts/Raleway-Medium 2.ttf')}}");
        }
        body{
            font-family: CustomFont;
        }
    </style>
    @yield('style_custom')
</head>
<body>
    @include('layouts/particals/navbar')
    @yield('content')

    {{-- JS --}}
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['1', '2', '3', '4', '5', '6', '7','8','9','10','11','12'],
                datasets: [{
                    label: 'Modal',
                    borderColor: 'rgba(255, 47, 9,100)',
                    data: [0, 5, 8, 10, 12, 20, 15,30,25,26,28,35]
                },{
                    label: 'Keuntungan',
                    borderColor: 'rgb(230, 255, 153)',
                    data: [0, 8, 5, 12, 10, 25, 20,15,12,16,20,25]
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/chartjs.min.js')}}"></script>
    
</body>
</html>