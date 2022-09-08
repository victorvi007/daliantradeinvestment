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

        a{
            color: #2C4E9A;
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
        strong{
            color:#2C4E9A;
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
         <h1>Hi, Welcome to Daliantradeinvestment {{ $name }}</h1>
         <p>
             Welcome to <strong>Daliantradeinvestment</strong>, the <strong>Daliantradeinvestment</strong> investment platform!
         </p>
         <p>
            We are delighted that you have decided to join <strong>Daliantradeinvestment</strong>, and we would like to use this opportunity to extend a warm welcome to you to our unique <strong>Daliantradeinvestment</strong>! 
         </p>
         <p>
            To take advantage of the perks and benefits of being a profitable member, you must first sign in and select an investment plan.
         </p>
         <p>To invest, review your investment, or withdraw your investment profits. Log in to your account dashboard. Keep track of your login information at all times.

         </p>
         <p>
             <a href="https://www.daliantradeinvestment.com/login" class="content-button">Login </a>
         </p>
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

