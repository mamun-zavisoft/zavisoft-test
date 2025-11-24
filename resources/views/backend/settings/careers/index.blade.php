@extends('backend.layouts.dashboard')
@section('title', 'Careers')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="flex justify-between">
        <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Careers</h1>
        <a class="text-base" href="{{ route('admin.settings.careers.create') }}">Add new</a>

    </div>
    <div class="">
        @foreach ($careers as $career)
            <div class="flex flex-col gap-2">
                <p> {{ $career->name }}</p>
                <p> {{ $career->type }}</p>
                <p> {{ $career->experience }}</p>
                <p> {{ $career->salaryrange }}</p>
                <p> {{ $career->address }}</p>
                <div > 
                   <p> {{!! $career->description !!}}</p>
                </div>
                <div >
                    <p> {{!! $career->responsibilities !!}}</p>
                    </div>
                <div > 
                    <p>{{!! $career->requirement !!}}</p>
                </div>
               <div >
                    <p>
                        {!! $career->aboutcompany !!}
                    </p>

                </div>

            </div>
        @endforeach
    </div>
@endsection
