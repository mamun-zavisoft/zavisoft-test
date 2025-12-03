@extends('backend.layouts.dashboard')
@section('title', 'Projects')

@section('content')

    @if (session('success'))
        <div id="successAlert" class="flex items-center justify-between p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
            <span>{{ session('success') }}</span>
            <button onclick="document.getElementById('successAlert').remove()" class="text-green-700 hover:text-green-900 font-bold">
                ✕
            </button>
        </div>
    @endif

    <div class="flex justify-between mb-3">
        <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Projects List</h1>
        <a class="text-white bg-primary-500  border border-transparent hover:bg-primary-500 hover:text-white focus:ring-0  rounded text-base px-4 py-2 focus:outline-none flex items-center"
           href="{{ route('admin.project.create') }}">Add new</a>
    </div>

    <div class="bg-white rounded p-4">
        @if (count($projects) == 0)
            <div class="alert alert-danger flex items-center justify-center text-xl">No project found</div>
        @else
            <div class="relative overflow-x-auto  border blade-career">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="bg-neutral-50 border-b border-default font-semibold">
                    <tr>
                        <th scope="col" class="px-4 py-3 ">
                            Category
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Project Title
                        </th>
                        <th scope="col" class="px-4 py-3 ">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody class="font-normal text-neutral-500">
                    @foreach ($projects as $project)
                        <tr class="border-b last:border-b-0">
                            <th scope="row" class="px-4 py-3 f text-heading whitespace-nowrap">
                                {{ $project->category->name }}
                            </th>
                            <th scope="row" class="px-4 py-3 f text-heading whitespace-nowrap">
                                {{$project->title}}
                            </th>
                            <td class="px-4 py-3">
                                <a href="{{route('admin.project.edit',$project->id)}}" class=" text-fg-brand hover:underline"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        @endif
    </div>
@endsection
