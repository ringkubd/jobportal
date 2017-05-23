<div class="well">
<h4>Find job by catagory</h4>
<ul>
@foreach($catagories as $cat )
	<li><a href="{{'/jobseeker/showjobs/'.$cat->id}}">{{$cat->catagoryname}}</a></li>
@endforeach
</ul>
</div>