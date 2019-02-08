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
                                    <th>Fecha de suscripción</th>
                                    <th>Costo</th>
                                    <th>Cupón</th>
                                    <th>Descargar factura</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->date()->format('d/m/y')}}</td>
                                        <td>{{ $invoice->total}}</td>
                                        @if($invoice->hasDiscount())
                                            <td>
                                                {{__("Cupon")}} : ({{ $invoice->coupon()}}/{{$invoice->discount()}})
                                            </td>

                                        @else
                                            <td>
                                                No se ha utilizado un cupón
                                            </td>
                                        @endif
                                            <td>
                                            <a class="btn btn-primary" href="{{route('invoices.download', ['id' => $invoice->id])}}">
                                                    Descargar
                                                </a>
                                            </td>
                                    </tr>

                                @empty
                                    <tr>
                                    <td colspan="4">{{__("No hay ninguna factura disponible")}}</td>
                                    </tr>

                                @endforelse
                            </tbody>
                    </table>
            </div>
    </div>
</main>
@include('layouts.section-subscripcion')
@endsection
