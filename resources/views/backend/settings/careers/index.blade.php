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
                                Position Name
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
                            <th scope="col" class="px-4 py-3 ">
                                Status
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Action
                            </th>
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
                                <td class="px-4 py-3">
                                    <button class="toggle-status px-3 py-1 rounded
                               {{ $career->status == 1 ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}"
                                        data-id="{{ $career->id }}">
                                        {{ $career->status === 1 ? 'Active' : 'Inactive' }}
                                    </button>
                                </td>
                                <td class="px-4 py-3">
                                    <a href="{{route('admin.settings.careers.edit',$career->id)}}" class=" text-fg-brand hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        @endif
    </div>
@endsection
@push('scripts')
    <script>
        document.querySelectorAll('.toggle-status').forEach(button => {
            button.addEventListener('click', function() {
                let jobId = this.dataset.id;

                fetch(`/admin/careers/${jobId}/toggle-status`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    }
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            // Update UI
                            this.textContent = data.status === 1 ? 'Active' : 'Inactive';
                            this.classList.toggle('bg-green-500', data.status === 1);
                            this.classList.toggle('bg-red-500', data.status === 0);

                            // Toast
                            showToast(`Status updated to ${data.status === 1 ? 'Active' : 'Inactive'}`, 'success');
                        } else {
                            showToast('Failed to update status', 'error');
                        }
                    })
                    .catch(() => showToast('Request failed', 'error'));
            });
        });

        function showToast(message, type = 'success') {
            const toast = document.getElementById('toast');
            const msg = document.getElementById('toast-message');

            if (!toast || !msg) return;

            // Color variants
            toast.classList.remove('bg-gray-800','bg-green-600','bg-red-600','bg-blue-600');
            if (type === 'success') toast.classList.add('bg-green-600');
            else if (type === 'error') toast.classList.add('bg-red-600');
            else if (type === 'info') toast.classList.add('bg-blue-600');
            else toast.classList.add('bg-gray-800');

            msg.textContent = message;

            toast.classList.remove('hidden', 'opacity-0');
            toast.classList.add('opacity-100');

            clearTimeout(window.__toastTimer);
            window.__toastTimer = setTimeout(() => {
                toast.classList.add('opacity-0');
                setTimeout(() => toast.classList.add('hidden'), 300);
            }, 3000);
        }


    </script>
@endpush
