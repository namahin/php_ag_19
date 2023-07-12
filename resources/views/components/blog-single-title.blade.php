<main>
    <section class="post-title-sec d-flex justify-content-center align-items-center" style="background-image: url('{{$post->image}}');">
        <div class="container text-center">
            <div class="title-content">
                <p class="text-white"><span>{{ $post->category->name }}</span> · {{ $post->created_at->format('F d, Y') }}</p>
                <h1 class="text-white mb-3">{{$post->title}}</h1>
                <div class="d-flex justify-content-center align-items-center">
                    <img class="rounded-circle" src="{{ $post->user->image }}" alt="{{ $post->user->name }}" style="width: 65px;">
                    <div class="p-3">
                        <div><a href="#" class="link-success link-underline-opacity-0 fs-5 text-white">{{ $post->user->name }}</a>
                        </div>
                        <div class="text-white">{{ $post->user->role }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
