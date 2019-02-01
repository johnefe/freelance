@extends('layouts.app')

@section('content')
@include('layouts.css-header')
<main class="section-2">
    <hr class="my-4">
    <div class="col-lg-12 text-center  my-5 py-3 gray-2-bg" align="justify">
        <a href="" class="color-gay-p link-categoria">Todos</a>
        <a href="" class="color-gay-p link-categoria">Desarrollo web</a>
        <a href="" class="color-gay-p link-categoria">Desarrollo movil</a>
        <a href="" class="color-gay-p link-categoria">Diseño</a>
        <a href="" class="color-gay-p link-categoria">Actualidad</a>
        <a href="" class="color-gay-p link-categoria">Emprendimiento</a>
    </div>

</main>
<main class="">
    <div class="container">
            <div class="row text-center mb-5">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Plan</th>
                                    <th>ID Suscripcion</th>
                                    <th>Cantidad</th>
                                    <th>Alta</th>
                                    <th>Finaliza en</th>
                                    <th>Cancelar / Reanudar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($subscriptions as $subscription)
                                    <td class="text-center">{{$subscription->id}}</td>
                                    <td>{{$subscription->name}}</td>
                                    <td>{{$subscription->stripe_plan}}</td>
                                    <td>{{$subscription->quantity}}</td>
                                    <td> {{$subscription->ends_at ? $subscription->ends_at->format('d/m/y'): "suscripcion activa"}}</td>
                                    <td>
                                        @if($subscription->ends_at)
                                            <form action="{{route('subscriptions.resume')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="plan" value="{{$subscription->name}}"/>
                                                <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-user"></i> Reanudar
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{route('subscriptions.cancel')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="plan" value="{{$subscription->name}}"/>
                                                <button type="button" rel="tooltip" title="View Profile" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i> Cancelar
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                    @empty
                                    <tr>
                                        <td colspan="8">
                                        No hay ninguna suscripciones disponibles
                                        </td>
                                    </tr>
                                @endforelse

                                    <!--<td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-user"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>-->

                            </tbody>
                        </table>
            </div>
    </div>
</main>
@include('layouts.section-subscripcion')
@endsection
