@foreach($users as $user)
  <h1>{{ $user->name }} </h1>

   @foreach($user->posts as $post)
      <p>{{ $post->title }} </p>
    @endforeach

@endforeach