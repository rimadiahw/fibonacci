<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fibonacci</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                color: #000000;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .blue{
                color: blue;
            }
            .left{
                float: left;
            }
            .right{
                float: right;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content" >
                <a href="{{URL::to('/')}}" alt="Home"><i class="fa fa-home"></i></a><h1>Bilangan Fibonacci</h1>
                <hr><br><br>
                    @foreach($fibonaccis as $fibonacci)
                        @if( $fibonacci%2 == 0 )
                            <b class="blue">{{ $fibonacci }}, </b>
                        @else
                            {{ $fibonacci }}, 
                        @endif
                    @endforeach

                    <br><br>
                    <div class="left">
                        @if($jums>10)
                            <form method="POST" action="{{URL::to('/')}}/prevFibonacci">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                <input type="hidden" name="bil" value="{{$jums}}">
                                <input type="submit" name="prev" value="< PREV">
                            </form>
                        @endif
                    </div>
                    
                    <div class="right">
                        <form method="POST" action="{{URL::to('/')}}/nextFibonacci">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <input type="hidden" name="bil" value="{{$jums}}">
                            <input type="submit" name="next" value="NEXT >">
                        </form>
                    </div>

            </div>
        </div>
    </body>
</html>
