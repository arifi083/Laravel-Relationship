@foreach($tags as $tag)
  <h1>{{ $tag->name }} </h1>
  
   <ul>
     @foreach($tag->posts as $post)
       <li>{{ $post->title }}
     @endforeach
   </ul>

@endforeach