<!DOCTYPE html>
<html lang="pt-BR">
      <head>
            <title>Template Pessoas</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
           <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <style>
                  *[padding]        {     padding:10px;           }
                  *[padding-top]    {     padding-top:10px;       }
                  *[padding-right]  {     padding-right:10px;     }
                  *[padding-bottom] {     padding-bottom:10px;    }
                  *[padding-left]   {     padding-left:10px;      }
                  
                  *[margin]         {     margin:10px;            }
                  *[margin-top]     {     margin-top:10px;        }
                  *[margin-right]   {     margin-right:10px;      }
                  *[margin-bottom]  {     margin-bottom:10px;     }
                  *[margin-left]    {     margin-left:10px;       }    

                  *[right]          {     float: right;           }  
                  *[align-center]   {     text-align: center;     }
                  *[link-none]      {     text-decoration:none!important;   }
            </style>
      </head>
      <body>
            <nav class="navbar navbar-default">
                  <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="#">Agenda</a>
                        </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                          <a href=" {{ url('/pessoas')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contatos<span class="caret"></span></a>
                                          <ul class="dropdown-menu">
                                                <li><a href="{{ url('pessoas/novo') }}">Novo</a></li>
                                                <li><a href="{{ url('pessoas') }}">Listar</a></li>
                                          </ul>
                                    </li>
                              </ul>
                        </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
            </nav>
            
            <div class="container">
            
            <!-- APP ROOT -->
            @yield('content')
            
            </div><!-- container -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      </body>
</html>