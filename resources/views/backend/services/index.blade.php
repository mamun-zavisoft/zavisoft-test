@extends('backend.layouts.dashboard')
@section('title', 'Careers')

@section('content')

    @if (session('success'))
        <div id="successAlert"
             class="flex items-center justify-between p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg"
             role="alert">
            <span>{{ session('success') }}</span>
            <button onclick="document.getElementById('successAlert').remove()"
                    class="text-green-700 hover:text-green-900 font-bold">
                ✕
            </button>
        </div>
    @endif

    <div class="flex justify-between mb-3">
        <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Service List</h1>
        <a class="text-white bg-primary-500  border border-transparent hover:bg-primary-500 hover:text-white focus:ring-0  rounded text-base px-4 py-2 focus:outline-none flex items-center"
           href="{{ route('admin.service.create') }}">Add new</a>
    </div>

    <div class="bg-white rounded p-4">

        {{-- //show not found message --}}
        @if (count($services) == 0)
            <div class="alert alert-danger flex items-center justify-center text-xl">No service found</div>
        @else
            <div class="relative overflow-x-auto  border blade-career">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="bg-neutral-50 border-b border-default font-semibold">
                    <tr>
                        <th scope="col" class="px-4 py-3 ">
                            Category
                        </th>
                        <th class="px-4 py-3">
                            Heading
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Description
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody class="font-normal text-neutral-500">
                    @foreach ($services as $service)
                        <tr class="border-b last:border-b-0">
                            <th scope="row" class="px-4 py-3 f text-heading whitespace-nowrap">
                                {{ $service->category->name }}
                            </th>
                            <td class="px-4 py-3">
                                {{ $service->heading }}
                            </td>
                            <td class="px-4 py-3">
                                {{ $service->short_description }}
                            </td>
                            <td class="px-4 py-3">
                                <a href="{{route('admin.service.edit',$service->id)}}" class=" text-fg-brand hover:underline"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        @endif
    </div>
@endsection
