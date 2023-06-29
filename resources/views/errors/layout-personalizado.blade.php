<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href={{{URL::asset("img/logo.png")}}} rel="icon">
    <!-- /	Link dos Css do Bootstrap -->
    <link href={{URL::asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/quill/quill.snow.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/quill/quill.bubble.css")}} rel="stylesheet">
    <link href={{URL::asset("vendor/remixicon/remixicon.css")}} rel="stylesheet">

    {{--    Inicio da estilizacao da pagina  --}}
    <style>
        /*Formatacao global*/
        *{
            padding: 0;
            border: none;
            margin: 0;
        }

        /*Div global*/
        #area-not-f{
            background-color: #070b17;
            position: relative;
        }

        /*Inicio Div Numero do codigo*/
        .erro-numero{
            position: relative;
        }

        .erro-numero h1{
            position: absolute;
            color: #fff;
            font-size: 220px;
            transform: translate(-50%, 50%);
        }

        .erro-numero h1:nth-child(1){
            color: transparent;
            -webkit-text-stroke: 0.3px #3bd9d9;
        }

        .erro-numero h1:nth-child(2){
            color: rgb(128,198,255);
            -webkit-text-stroke: 1px #3bd9d9;
            animation: animation 3s ease-in-out infinite;
        }

        @keyframes animation{
            0%, 100%{
                clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
            }

            50%{
                clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
            }
        }

        /*Inicio da Area da mensagem de erro*/
        .erro-mensagen{
            position: relative;
            width: 100%;
            background: rgb(128,128,128, 0.8);
            color: #fff;
            text-align: left;
            box-sizing: border-box;
            padding: 40px;
            border-radius: 5px;
            font-size: 22px;
            text-transform: uppercase;
            font-weight: 700;
        }


        .erro-mensagen:after{ 
            right: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .erro-mensagen:after {
            border-right-color: rgb(128,128,128, 0.8);
            border-width: 20px;
            top: 30%;
            margin-top: -10px;
        }

        /*Inicio do botao voltar*/ 
        .btn-voltar{
            background-color: #174183;
            padding: 20px;
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            font-weight: 700;
            border-radius: 17px;
            transition: 0.5s;
            text-decoration: none;
        }

        .btn-voltar:hover{
            color: 174183;
            background-color: #fff;
            transition: 0.5s;
        }
    </style>
    {{--    Fim da estilizcao   --}}

</head>
<body>
<div id="area-not-f">
    <section class="section min-vh-100 py-4">
      <div class="container">
  
        <div class="row">
          <div class="col-lg-7" style="">
            <div class="erro-numero d-flex align-items-center justify-content-end">
              <h1>@yield('code')</h1>
              <h1>@yield('code')</h1> 
            </div>
            
          </div>
          <div class="col-lg-5 min-vh-50" style="padding-top: 75px;">
            <div class="d-flex   align-items-center justify-content-start">
              <div class="erro-mensagen">
                <span class="ms">@yield('message')</span>
                <div class="clearfix"></div>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>

      <br>
      <div class="area-btn-voltar" style="text-align: center; padding-top: 190px;">
        <a class="btn-voltar" href={{route('inicio')}}>Voltar no sistema</a>
        
      </div>
      
    </section>
  </div>
</body>
</html>