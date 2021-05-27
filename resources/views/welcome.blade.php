<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
        <title>Laravel</title>
        <link rel="icon" type="image/svg+xml" href="image/logo.svg">
        <link rel="alternate icon" href="image/logo.ico">
        <link rel="mask-icon" href="/image/logo.svg" color="#ff8a01">
    
    
    <style>
    /* Style the video: 100% width and height to cover the entire window */
    #myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    z-index: -1;
    }

    /* Add some content at the bottom of the video/page */
    .main-container {
    margin: 0 auto;
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.85);
    color: #f1f1f1;
    width: 100%;
    
    height: 100%;
    overflow-y:auto; 
    
    }


        @media (min-width:43.75rem){
            .antialiased {
                width: 100%;
            
            }
        }
    


nav{
    top: 0;
    position: -webkit-sticky; /* Safari */
    position: sticky;
    background-color:rgba(0, 0, 0, 0.8)
}

main{
    text-align: center;
    background-color:rgba(145, 16, 91, 0.1)
}

header{
    text-align: center;
    width: :100%;
    background-color:rgba(0, 0, 0, 0.10)
}

header div{
    width: 100%;
    height:15rem;
    background: url('https://picsum.photos/2000.webp');
    background-size: cover;
    background-position:center;
    
}
    </style>

</head>
  <!-- The video -->

  
 
    <body class="antialiased">

        <video autoplay muted loop id="myVideo">
            <source src="image/draw.mp4" type="video/mp4">
          </video>

    <div class="main-container">  
     
        <header>
            <div>
           
            <div>
        </header>
        <main>
            <nav>              
                <div class="relative text-center ">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
    
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif        
                    </div>
            </nav> 
            <div style="padding-bottom:2000px">
              
            </div>

        </main>
    </div>    
   

    </body>
</html>
