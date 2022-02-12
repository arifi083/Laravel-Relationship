<p>one to many relationship</p>
<br>
@foreach($useres as $user)
<h2>{{ $user->name }} </h2>
     @foreach($user->addressses as $address)
       <p>{{ $address->country }} </p>
    @endforeach
  
@endforeach