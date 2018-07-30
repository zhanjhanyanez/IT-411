<h1> NEW PAGE </h1>

<a href="{{route('new-page1')}}"> New Page1 </a> &nbsp;
<a href="{{route('new-page2')}}"> New Page2 </a><br>
<a href="{{route('shoutout', array('text'=> 'arrah'))}}"> Shoutout </a>
<br>
@foreach($names as $name)
<a href="{{route('shoutout', array('text'=>$name))}}">{{$name}}</a>
<br>
@endforeach