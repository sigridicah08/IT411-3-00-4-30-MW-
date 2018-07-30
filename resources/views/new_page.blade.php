<h1> NEW PAGE </h1>
<a href="{{route('new-page')}}"> New page </a> <br>
<a href="{{route('new-page1')}}"> New page1 </a><br>
<a href="{{route('new-page2')}}"> New page2 </a><br>
<a href="{{route('shoutout', array('text'=> 'sigrid'))}}"> Shoutout </a>
<br>
@foreach($names as $name)
<a href="{{route('shoutout', array('text'=>$name))}}"> {{$name}}</a>
<br>
@endforeach