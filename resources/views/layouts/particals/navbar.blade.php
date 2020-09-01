<nav class="navbar navbar-light" style="background-color: #e3f2fd47 !important;">
        <a class="navbar-brand" href="#"><img src="{{asset('img/logo/logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto text-light">
            <li class="nav-item">
                <a class="nav-link" href="{{route('investamart.index')}}"><i class='fas fa-bacteria'></i>&nbsp;The Opportunity <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('investamart.optimistic')}}"><i class='far fa-thumbs-up'></i>&nbsp;The Optimistic</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="{{route('investamart.yolo')}}"><i class='far fa-object-group'></i>&nbsp;The Yolo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('investamart.quiz')}}"><i class='far fa-question-circle'></i>&nbsp;Quiz</a>
            </li>
        </div>
    </nav>