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
                            <td class="px-4 py-3">
                                {{ \Illuminate\Support\Str::limit($message->project_details, 40, '...') }}
                                <button
                                    class="text-blue-600 hover:text-blue-800 ml-2"
                                    onclick="openDetailsModal(`{{ $message->project_details }}`)"
                                    title="View full details"
                                >
                                    <i class="fa fa-eye"></i>
                                </button>
                            </td>
                            <td class="px-4 py-3">{{ $message->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- Modal -->
                <div id="detailsModal" class="hidden fixed inset-0 flex items-center justify-center z-50">
                    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
                        <h2 class="text-xl font-semibold mb-4">Project Details</h2>
                        <p id="modalDetails" class="text-gray-700"></p>
                        <div class="mt-6 text-right">
                            <button
                                onclick="closeDetailsModal()"
                                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-info text-center">
                <h5>No message found.</h5>
                <p class="mb-0">There are no message submitted yet.</p>
            </div>
        @endif
    </div>
@endsection
@push('scripts')
    <script>
        function openDetailsModal(details) {
            document.getElementById('modalDetails').textContent = details;
            document.getElementById('detailsModal').classList.remove('hidden');
        }

        function closeDetailsModal() {
            document.getElementById('detailsModal').classList.add('hidden');
        }
    </script>
@endpush
