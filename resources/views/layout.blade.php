<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   <title>Dream4sys Blog</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          @yield('header')
        </div>
      </div>
      <div class="row">
        <div class="col">
         @yield('content')
        </div>
      </div>
      @if(session()-> has('successCreate'))
            <p class="fixed-top bg-success text-white col-2">{{session()->get('successCreate')}}</p>
      
      @elseif(session()-> has('successEdit'))
            <p class="fixed-top bg-success text-white col-2">{{session()->get('successEdit')}}</p>

      @elseif(session()-> has('successDelete'))
            <p class="fixed-top bg-success text-white col-2">{{session()->get('successDelete')}}</p>
      @elseif(session()-> has('notFound'))
            <p class="fixed-top bg-success text-white col-2">{{session()->get('notFound')}}</p>
      @elseif(session()-> has('failLogin'))
            <p class="fixed-top bg-success text-white col-2">{{session()->get('failLogin')}}</p>
      @elseif(session()-> has('welcome'))
            <p class="fixed-top bg-success text-white col-2">{{session()->get('welcome')}}</p>
      @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        $('.js-example-basic-multiple').select2({
        tags: true
        });
      });
    </script>  

  </body>
</html>