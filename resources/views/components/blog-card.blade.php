@foreach ($posts as $post)
<div class="card mb-5 border-0">
    <div class="row g-4">
        <div class="col-md-4"><a href="{{route('pages.single-blog', $post->slug)}}" title="{{$post->title}}"><img
                    src="{{asset($post->image)}}" class="img-fluid rounded-3" alt="{{$post->title}}"></a></div>
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title"><a href="{{route('pages.single-blog', $post->slug)}}"
                                          class="link-success link-underline-opacity-0">{{$post->title}}</a></h2>
                <p class="card-text"><small class="text-body-secondary"><a
                            class="link-success link-underline-opacity-0" href="#">{{ $post->user->name }}</a> · {{ $post->created_at->format('F d, Y') }}</small></p>
                <p class="card-text">{{ Str::limit(strip_tags($post->content), 550) }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
