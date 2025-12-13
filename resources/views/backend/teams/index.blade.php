@extends('backend.layouts.dashboard')
@section('title', 'Dashboard')

@section('content')
    @if (session('success'))
        <div id="successAlert"
            class="flex items-center justify-between p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
            <span>{{ session('success') }}</span>
            <button onclick="document.getElementById('successAlert').remove()"
                class="text-green-700 hover:text-green-900 font-bold">
                ✕
            </button>
        </div>
    @endif
    <div class="flex justify-between mb-3">
        <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Team Lists</h1>
        <a class="text-white bg-primary-500  border border-transparent hover:bg-primary-500 hover:text-white focus:ring-0  rounded text-base px-4 py-2 focus:outline-none flex items-center"
            href="{{ route('admin.teams.create') }}">Add new</a>
    </div>

    <div class="bg-white rounded p-4">
        @if (count($teams) == 0)
            <div class="alert alert-danger flex items-center justify-center text-xl">No team found</div>
        @else
            <div class="relative overflow-x-auto  border blade-career">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="bg-neutral-50 border-b border-default font-semibold">
                        <tr>
                            <th scope="col" class="px-4 py-3 ">
                                Name
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Designation
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Image
                            </th>
                            {{-- <th scope="col" class="px-4 py-3 ">
                                Status
                            </th> --}}
                            <th scope="col" class="px-4 py-3 ">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="font-normal text-neutral-500">
                        @foreach ($teams as $team)
                            <tr class="border-b last:border-b-0">
                                <td  class="px-4 py-3 flex items-center gap-2">
                                    {{ $team->name }}
                                </td>
                                <td  class="px-4 py-3">
                                    {{ $team->designation }}
                                </td>
                                <td class="px-4 py-3">
                                    <img src="{{ Storage::url($team->image) }}" alt="{{ $team->name }}"
                                        class="w-12 h-12 object-cover rounded">
                                </td>
                                {{-- <td class="px-4 py-3">
                                    @if ($team->status)
                                        <span class="text-green-600 font-semibold">Active</span>
                                    @else
                                        <span class="text-red-600 font-semibold">Inactive</span>
                                    @endif
                                </td> --}}
                                <td class="px-4 py-3 ">
                                    <div class="">
                                        <a href="{{ route('admin.teams.edit', $team->id) }}"
                                            class=" text-fg-brand hover:underline"><i class="fa fa-edit"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        @endif
    </div>

@endsection
