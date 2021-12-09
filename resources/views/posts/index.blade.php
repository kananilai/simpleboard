<h1>Posts</h1>

@foreach($posts as $post)
    <a href="/posts/{{ $post ->id }}">{{ $post->title }}</a>
    <a href="/posts/{{ $post ->id }}/edit">Edit</a>

    <form method="POST" action="/posts/{{ route('$post->id') }}" onsbmit="if(confirm('Delete?  Are you sure?')) {return true} else {return false}";>
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <nutton type="submit">Delete</nutton>
@endforeach

<a href="/posts/create">New Post</a>
