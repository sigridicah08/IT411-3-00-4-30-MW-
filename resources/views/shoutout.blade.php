<h1> basic to: {{$text}}</h1>

	@if($text=="Cute")
		<h1>Cute</h1>

	@elseif($text=="Maot")
		<h1>Maot</h1>

	@endif
<table border = "1">
		<tr>	
		<th>#</th>
		<th> Color </th>
		<th> Description </th>
	</tr>
	@foreach($colors as $color => $description)
	    <tr>
	    <td> {{ $loop -> iteration }} </td>
		<td> {{ $color }} </td>
		<td>{{ $description }} </td> 
		</tr>

	</tr>
@endforeach
	</table>