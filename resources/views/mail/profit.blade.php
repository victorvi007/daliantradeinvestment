<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('img/logo.png')}}">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <title>update</title>
    <style>
        body{
            box-sizing: border-box; 
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; 
            -webkit-text-size-adjust: none; 
            height: 100%; line-height: 1.4;
             margin: 0; 
             padding: 0; 
             width: 100% !important;
        }

        .container{
            overflow-x: hidden;
            padding:10px;
        }
        .logo{
            box-sizing: border-box; 
            font-family: -apple-system, 
            BlinkMacSystemFont, 'Segoe UI', 
            Roboto, 
            Helvetica, 
            Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; 
            position: relative; 
            max-width: 100%; 
            border: none; 
            height: 100%; 
            /* max-height: 75px; 
            width: 75px; */
        }
        header{
            width:100%;
            display:flex;
            justify-content: center;
            height:80px;
            /* margin:10px 5px; */
        }

        .button{
                display:block;
                text-decoration: none;
                margin:auto 5px;
                font-size: 1.2rem;
                background-color:#2C4E9A;
                border:0px;
                color:#fff;
                border-radius:5px;
                box-shadow: 0 5px 10px 0 rgb(44,78,154); 
                 padding:10px;
                
                
        }
        .content-button{
                display:block;
                text-decoration: none;
                margin:auto 5px;
                font-size: 1.2rem;
                background-color: #2C4E9A;
                text-align: center;
                color:#fff;
                border-radius:5px;
                /* box-shadow: 0 5px 10px 0 rgb(44,78,154);  */
                 padding:5px 10px;
        }
        .content{
            width:100%;
            
            padding:5px;
            margin:0px 0px;
        }
        .img-para{
            width:100%;
        }

        .img-para .img{
            height:100%;
            width:100%;
        }
        h1{
            margin-top:10px;
        }
        @media(min-width:768px){
           body{
               display:flex;
               justify-content: center;
               
           }
           .container{
               max-width:768px;
           }
        }

    </style>
</head>
<body>

 <div class="container">
     <header>
        <img src="{{ asset('img/logo1.png') }}" class="logo" alt="" style="">
        
     </header>
     <br>
     <div class="content">
         <h2>Daliantradeinvestment Daily Profit Notification</h2>

         <h4>Dear <strong>{{ $name }}</strong> </h4>
         <p>Your daily investment profit of <strong>${{ $amount }}</strong> has been deposited into your <strong>{{ $asset }}</strong> asset account. Thank you for placing your trust in daliantradeinvestment. To see your current profit, Login to your user dashboard.
             
         </p>
         <p class="img-para">
             <img src="{{ asset('img/daily-profit.png') }}" alt="daily profit" class="img">
         </p>
         <p>To invest, review your investment, or withdraw your investment profits. Log in to your account dashboard. Keep track of your login information at all times.

         </p>
         <p>
             <a href="https://www.daliantradeinvestment.com/login" class="content-button">Log into Dashboard </a>
         </p>

         <br>
         <p>
            For help and enquires contact our  <a href="mailto:Support@Daliantradeinvestments.com">support</a> team
         </p>
     </div>
     <footer>
        @component('mail::footer')
        © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
     </footer>

 </div>

      
</body>
</html>

