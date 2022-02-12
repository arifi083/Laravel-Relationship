@foreach($users as $user)
<h2>{{ $user->name }} </h2>
<p>{{ $user->addresss->country }} </p>

@endforeach




