@extends('dashboard.dashboard')

@section('product')

<div class="col-12">
    <div class="row justify-content-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-12 text-center mt-4">
            <h4>Colores</h4>
        </div>

        @include('dashboard.colors.add')
        
        @include('dashboard.colors.list')


    </div>
</div>

@endsection