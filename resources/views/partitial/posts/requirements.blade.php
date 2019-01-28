  <ul class="text-secondary">

    @forelse($requirements as $requirement)
        <li>{{$requirement->requiriment}}</li>
    @empty
        <li>No se han escrito responsabilidades para esta oferta</li>
    @endforelse
</ul>
