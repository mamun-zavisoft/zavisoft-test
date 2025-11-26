@extends('backend.layouts.dashboard')
@section('title', 'Careers')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="flex justify-between mb-3">
        <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Careers</h1>
        <a class="text-white bg-primary-500  border border-transparent hover:bg-primary-500 hover:text-white focus:ring-0  rounded text-base px-4 py-2 focus:outline-none flex items-center"
            href="{{ route('admin.settings.careers.create') }}">Add
            new</a>

    </div>

    <div class="bg-white rounded p-4">

        {{-- //show not found message --}}
        @if (count($careers) == 0)
            <div class="alert alert-danger flex items-center justify-center text-xl">No careers found</div>
        @else
            <div class="relative overflow-x-auto  border blade-career">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="bg-neutral-50 border-b border-default font-semibold">
                        <tr>
                            <th scope="col" class="px-4 py-3 ">
                                Possition Name
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Type
                            </th>
                            <th class="px-4 py-3">
                                Location Type
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Salary Range
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Experience
                            </th>
                            {{--<th scope="col" class="px-4 py-3 ">
                                Action
                            </th>--}}
                        </tr>
                    </thead>
                    <tbody class="font-normal text-neutral-500">
                        @foreach ($careers as $career)
                            <tr class="border-b last:border-b-0">
                                <th scope="row" class="px-4 py-3 f text-heading whitespace-nowrap">
                                    {{ $career->name }}
                                </th>
                                <td class="px-4 py-3">
                                    {{ $career->type }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $career->location_type }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $career->salary_range }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $career->experience }}
                                </td>
                               {{-- <td class="px-4 py-3">
                                    <a href="#" class=" text-fg-brand hover:underline">Edit</a>
                                </td>--}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        @endif
    </div>
@endsection
