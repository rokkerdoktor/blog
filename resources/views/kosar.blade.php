
<table>
<th>
<td>name</td>
<td>qty</td>
</th>

@foreach($kosar as $kosar)
   @foreach($kosar as $kosar)
   <tr>
<td>{{$kosar["id"]}}</td>
<td>{{$kosar["amount"]}}</td>
<td>Delete</td>
</tr>
   @endforeach
@endforeach

</table>


               
<div class="title m-b-md"> Termékek </div>