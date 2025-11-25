@extends('backend.layouts.dashboard')
@section('title', 'Careers')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="flex justify-between mb-3">
        <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Careers</h1>
        <a class="text-white bg-primary-500  border border-transparent hover:bg-primary-500 hover:text-white focus:ring-0  rounded text-base px-4 py-2.5 focus:outline-none "
            href="{{ route('admin.settings.careers.create') }}">Add
            new</a>

    </div>

    <div class="bg-white rounded p-4">

        {{-- //show not found message --}}
        @if (count($careers) == 0)
            <div class="alert alert-danger flex items-center justify-center text-xl">No careers found</div>
        @else
            <div class="relative overflow-x-auto  border">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="bg-neutral-secondary-soft border-b border-default">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Possition Name
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Salary Range
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Experience
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($careers as $career)
                            <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    {{ $career->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $career->type }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $career->salary_range }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $career->experience }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        @endif
    </div>
@endsection
