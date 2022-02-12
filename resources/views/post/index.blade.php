@foreach($posts as $post)
  <h1>{{ $post->title }} </h1>
  <p>{{ $post->user->name }} </p>
   <ul>
     @foreach($post->tags as $tag)
       <li>{{ $tag->name }}
     @endforeach
   </ul>

@endforeach