<DOCTYPE html>
    <html>
        <head>
            <title> Title </TITLE>
            <meta charset="UFT-8">
            <link rel='stylesheet' href='{{asset('style.css')}}'>
        </head> 
    
        <BODY>
            <nav class="main-menu">
                @include('menu')
            </nav>
        <selection>
            <article>
                <nav class="main-contener">
                @yield('content')
            </article>
        </selection>
        <footer></footer>
        </BODY>
    </html>
    
</DOCTYPE>