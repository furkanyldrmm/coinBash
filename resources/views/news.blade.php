@extends('fronts.master')

@section('content')
    <head><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Cousine" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"><link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css"><link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"><link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><link href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <style>
        .dene{
            font-family: "Courier New", Courier, monospace;
            /*   font-family: 'Merriweather', serif; */
            font-size: 18px;
        }

        body{

            background-color: black;
        }
        .row {
            min-height:1000px;;
            background-color: white;
        }

        .dene a, a:active{
            text-decoration: underline;
            color: black;
        }

        .dene a:hover{
            color: grey;
        }

        mark{
            background-color: lightgrey;
            color:black;
        }

        pre{
            padding-left: 20px;
            background-color: black;
            color: grey;
        }

        .pageNav a, .pageNav a:active{
            font-family: "", sans-serif, monospace;
            font-size: 18px;
            text-decoration: none;
            color: black;
        }


        body {background-color: #f7f7f7; color: #494949;}
        .postx-bg {background-color: #fefefe; padding: 60px 30px; border: 1px solid #dbdbdb;}
        .postx-lyrics {margin: 0px 30px; border: 1px solid #343a40; padding: 20px; font-family: poppins;   color: #f49200; text-align: center; line-height: 15px; font-weight: 700; letter-spacing: 1px;}
        .postx-postbg {border-bottom: 1px solid #343a40; margin: 20px 30px 10px 30px; padding-bottom: 20px;}
        .postx-post { margin: 0px 20px; padding-right: 10px; font-family: open sans; font-size: 13px; line-height: 180%; text-align: justify;}
        .postx-post b {font-family: poppins;  padding: 3px; color: #f49200;}
        .postx-notes {font-family: cousine; font-size: 9px; margin: 0px 50px;}
        .postx-notes n {color: #f49200;}
        .postx-post::-webkit-scrollbar {width: 5px;  background:#fff;}
        .postx-post::-webkit-scrollbar-thumb {background:#f49200;}
        .postx-post::-webkit-scrollbar-corner {background:#fff;}


    </style>

        <div class="container">
            <div class="tablo">
            <div class="postx-bg">
                <div class="postx-lyrics">
                    Bitcoin Price Drops 18%, Fed Discusses 'Soft' Inflation, Analyst Says BTC Sell-Off Attracts More Investors</div>

                <div class="postx-postbg">
                    <div class="postx-post">
                        <img src="{{asset('/assets/images/down.webp')}} " style="width: 100%">
                       <p>  Digital asset markets are seeing some turbulence on Tuesday as the entire crypto market capitalization has lost 11% in value during the last 24 hours. Bitcoin has slid to a low of $44,846 during the morning trading sessions (EST) losing more than 18% during the last day.
                       </p>
                        <p>
                           Bitcoin Price Dips Over 18% and Quickly Regains Some of the Losses
                           Cryptocurrency proponents are watching markets closely after the price of bitcoin (BTC) started sliding early Sunday morning after coasting along at the $55k range. 12 hours prior the crypto asset had reached an all-time high at $58,354 per unit. Since then BTC touched a low of $44,846 on Tuesday and has been very volatile during the last 24 hours.

                       </p>

                    </div>
                </div>


            </div>
            </div>
        </div>

@endsection

