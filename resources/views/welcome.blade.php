<DOCTYPE html>
    <html>
        <head>
            <title> Title </TITLE>
            <meta charset="UFT-8">
            <link rel='stylesheet' href='{{asset('style.css')}}'>
            <link rel='stylesheet' href='{{asset('css/bootstrap.min.css')}}'>
            <script src="{{asset('jquery.min.js')}}" defer></script>
            <script src="{{asset('script.js')}}" defer></script>
        </head> 

        <BODY class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-xs-12 col-md-8 ">
                    <nav class="main-menu">
                        @include('menu')
                    </nav>
                </div>
                    <div class="col-md-2"></DIV>
            </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-xs-12 col-md-8 ">
                        <section class="main-section">
                            <article>
                                <nav class="main-contener">
                                    @yield('content')
                            </article>
                        </section>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            <footer>
                <button id="bgChanger" type="button" class="btn btn-danger" onclick="changeBg('{{asset("tlo2.jpg")}}','{{asset("tlo.png")}}')">change bg</button>
            </footer>
        </BODY>
    </html>

</DOCTYPE>