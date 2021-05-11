@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <ul>
                @if ($companies)

                    @foreach ($companies as $company)
                        <li>Name: <strong> {{ $company->name }}</strong></li>
                        <li>Email:<strong> {{ $company->email }}</strong></li>
                        <li>{{ $company->logo }}</li>
                        <li>Website: <strong> {{ $company->website }}</strong></li>
                        <hr>
                        <br>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection