<nav class="navbar navbar-default main-nav">
    <div class="container nav-container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="images/logo.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
<<<<<<< HEAD
                <li><a href="#">{{trans('main.menu.home')}}<span class="sr-only">(current)</span></a></li>
                <li><a href="#">{{trans('main.menu.aboutUs')}}</a></li>

            </ul>
            <ul class="nav navbar-nav">
                <li><a href="#">{{trans('main.menu.contactUs')}}</a></li>
=======
                <li><a href="#">صفحه نخست<span class="sr-only">(current)</span></a></li>
                <li><a href="">درباره ما</a></li>
                <li><a href="">اخبار </a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('contact')}}">تماس با ما</a></li>
>>>>>>> b8ab0265c46b279a081244f7ecb967794247b225
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{trans('main.menu.services.title')}}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">{{trans('main.menu.services.frit')}}</a></li>
                        <li><a href="#">{{trans('main.menu.services.requestQuota')}}</a></li>
                        <li><a href="#">{{trans('main.menu.services.transform')}}</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>