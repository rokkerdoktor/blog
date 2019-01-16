<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

        <title>RestAPI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-top position-ref ">

            <div class="content">
                <div class="title m-b-md">
                 Kosaram tartalma
                </div>
                <div class="links">

                </div>
            </div>
        </div>


        <div class="flex-center position-ref ">
        <div class="content">
        @include('kosar')
         
                <div class="links">
                
                    @foreach($termek as $termek)
                    <script type="text/javascript">
            $(document).ready(function()
            {
                $( "#doit{{$termek->id}}" ).click(function() {
                var cucc = $("#qty{{$termek->id}}").val();     
                var id = $("#id{{$termek->id}}").val();      
                $.ajax({
               type:'post',
               url:'api/add',
               data: {cucc:cucc , id:id},
               success:function(data) {
                $("#kosaram").load(location.href + " #kosaram");
                $("#bezar").click();
               }
            });
        });
            });

        </script>

        
                    <div class="card" style="width: 18rem;">
<img class="card-img-top" src="https://vignette.wikia.nocookie.net/austinally/images/1/14/Random_picture_of_shark.png/revision/latest?cb=20150911004230" alt="Card image cap">
<div class="card-body">
    <h5 class="card-title">  {{$termek->name}}</h5>
    <a href="#{{$termek->id}}" rel="modal:open"> <button class="btn btn-primary">Kosárba</button></a>
</div>
</div>
<div id="{{$termek->id}}" class="modal">
<input type="hidden" id="id{{$termek->id}}" value="{{$termek->id}}">
<label>QTY: </label><input type="number" id="qty{{$termek->id}}">
<button class="btn btn-primary" id="doit{{$termek->id}}">Kosárba</button>
<br>
  <a href="#" id="bezar" rel="modal:close">Bezár</a>
</div>

                    @endforeach
                </div>
            </div>
        </div>

    </body>
</html>
