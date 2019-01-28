<div class="col-sm-12 col-md-3 col-lg-4 post p-2">
    <div class="card text-left sub-post2">
        <div class="card-body">

               <!-- <img src="{{ $post->pathAttachment() }}" />-->
            <h5 class="card-title">{{$post->name}}</h5>
            <p class="card-text">{{str_limit($post->description, 100)}}</p>
            <a href="{{ route('posts.card-posts', $post->slug)}}" class="btn btn-post">Leer más</a>
        </div>
    </div>
</div>
