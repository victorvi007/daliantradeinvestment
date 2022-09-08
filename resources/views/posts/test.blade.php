@extends('layout.index')

@section('content')
{{-- <section>	
    <script>
        baseUrl = "https://widgets.cryptocompare.com/";
        var scripts = document.getElementsByTagName("script");
        var embedder = scripts[scripts.length - 1];
        var cccTheme = { "General": { "enableMarquee": true } };
        (function() {
            var appName = encodeURIComponent(window.location.hostname);
            if (appName == "") { appName = "local"; }
            var s = document.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            var theUrl = baseUrl + 'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=BTC,USD,CNY,EUR';
            s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
            embedder.parentNode.appendChild(s);
        })();
    </script>
    <script type="text/javascript" async="" src="https://widgets.cryptocompare.com/serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&amp;tsyms=BTC,USD,CNY,EUR&amp;app=x-tradeinvestments.com">
    </script>

   
</section> --}}



                                        
                                        
                                        
                                        @endsection