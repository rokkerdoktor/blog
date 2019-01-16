<style>
.torles {color:red; cursor:pointer;}
</style>
@if($kosar=="Your cart is empty")
Ures a kosarad!
@else
<table id="kosaram">
<tr>
<td>name</td>
<td>qty</td>
<td>delete</td></tr>



@foreach($kosar as $kosar)

   <tr>
<td>{{$kosar["name"]}}</td>
<td>
<input type="number" value="{{$kosar['qty']}}" id="update{{$kosar['id']}}">

</td>

<td  class="torles" id="delete{{$kosar['id']}}">Delete</td>
</tr>

<script type="text/javascript">
            $(document).ready(function()
            {
            $( "#update{{$kosar['id']}}" ).change(function() { 
               var ertek = $(this).val();
               var idja = {{$kosar['id']}}
               $.ajax({
               type:'post',
               url:'api/update',
               data: {ertek:ertek , id:idja},
               success:function(data) {
                  alert(data);
                $("#kosaram").load(location.href + " #kosaram");
               }
            });
            });


                $( "#delete{{$kosar['id']}}" ).click(function() { 
                $.ajax({
               type:'get',
               url:'api/remove/{{$kosar['id']}}',
               success:function(data) {
                $("#kosaram").load(location.href + " #kosaram");
               }
            });
        });
            });

        </script>
@endforeach
@endif
</table>


               
<div class="title m-b-md"> Termékek </div>