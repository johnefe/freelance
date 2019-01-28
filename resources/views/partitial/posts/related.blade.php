<main class=" gray-2-bg py-5">
    <div class="container">
        <div class="row">

            @forelse($related as $relatedPost)

            <div class="col-sm-12 col-md-3 col-lg-4 post p-2">
                    <div class="card text-left sub-post2">
                        <div class="card-body">

                               <!-- <img src="{{ $relatedPost->pathAttachment() }}" />-->
                            <h5 class="card-title">{{$relatedPost->name}}</h5>
                            <p class="card-text">{{str_limit($relatedPost->description, 100)}}</p>
                        <a href="{{ route('posts.card-posts', $relatedPost->slug)}}" class="btn btn-post">Leer más</a>
                        </div>
                    </div>
                </div>
            @empty

            @endforelse



        </div>
    </div>
</main>
