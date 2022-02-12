
@foreach($address as $add)
<h2>{{ $add->country }} </h2>
<p>{{ $add->user->name }} </p>

@endforeach
