@auth
@can('opt_for_post', $post)
    @can('postule',\App\Post::class)
<a class="btn btn-subscribe btn-bottom btn-block" href="{{route('subscriptions.plans')}}">
            <i class="fa fa-bolt"> Subscribirme</i>
        </a>
    @else
        @can('inscribe', $post)
        <a class="btn btn-subscribe btn-bottom btn-block" href="{{route('posts.inscribe', ['slug' =>$post->slug])}}">
            <i class="fa fa-bolt">Inscribirme</i>
        </a>
        @else
        <a class="btn btn-subscribe btn-bottom btn-block" href="#">
            <i class="fa fa-bolt">Inscrito</i>
        </a>
        @endcan
    @endcan
@else
<a class="btn btn-subscribe btn-bottom btn-block" href="#">
    <i class="fa fa-user"> Soy autor</i>
</a>
@endcan
@else
<a class="btn btn-subscribe btn-bottom btn-block" href="{{ route('login')}}">
    <i class="fa fa-user">Acceder</i>
</a>
@endauth
