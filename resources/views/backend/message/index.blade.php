@extends('backend.layouts.dashboard')
@section('title', 'Applications')

@section('content')
    <h4>Messages</h4>

    <div class="application-table bg-white p-4 rounded mt-3">
        @if ($data->count() > 0)
            <div class="relative overflow-x-auto  border blade-career">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="bg-neutral-50 border-b border-default font-semibold">
                    <tr>
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Service Name</th>
                        <th class="px-4 py-3">Project Details</th>
                        <th class="px-4 py-3">Created At</th>
                    </tr>
                    </thead>
                    <tbody class="font-normal text-neutral-500">
                    @foreach ($data as $message)
                        <tr class="border-b last:border-b-0">
                            <td class="px-4 py-3">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3">{{ $message->name }}</td>
                            <td class="px-4 py-3">{{ $message->email }}</td>
                            <td class="px-4 py-3">{{ $message->service_name }}</td>
                            <td class="px-4 py-3">{{ Str::limit($message->project_details, 40, '...') }}
                            </td>
                            <td class="px-4 py-3">{{ $message->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info text-center">
                <h5>No message found.</h5>
                <p class="mb-0">There are no message submitted yet.</p>
            </div>
        @endif
    </div>
@endsection
