@extends('backend.layouts.dashboard')
@section('title', 'Job Post')

@section('content')

    @if (session('success'))
        <div id="successAlert" class="flex items-center justify-between p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg"
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
            href="{{ route('admin.careers.create') }}">Add new</a>
    </div>

    <div class="bg-white rounded p-4">

        {{-- //show not found message --}}
        @if (count($careers) == 0)
            <div class="alert alert-danger flex items-center justify-center text-xl">No job post found</div>
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
                                <td>
                                    <i class="fas {{ $career->status === 1 ? 'fa-toggle-on text-green-500' : 'fa-toggle-off text-red-500' }} text-2xl cursor-pointer toggle-icon"
                                        data-id="{{ $career->id }}"></i>
                                </td>
                                <td class="px-4 py-3">
                                    <a href="{{route('admin.careers.edit', $career->id)}}" class=" text-fg-brand hover:underline"><i
                                            class="fa fa-edit"></i></a>
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
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.toggle-icon').forEach(icon => {
                icon.addEventListener('click', async function () {
                    const careerId = this.dataset.id;
                    if (!careerId) return;

                    try {
                        const res = await fetch(`/admin/careers/${careerId}/toggle-status`, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            }
                        });

                        const data = await res.json();

                        if (data.success) {
                            // Toggle classes dynamically
                            this.classList.toggle('fa-toggle-on', data.status === 1);
                            this.classList.toggle('text-green-500', data.status === 1);
                            this.classList.toggle('fa-toggle-off', data.status !== 1);
                            this.classList.toggle('text-red-500', data.status !== 1);

                            showToast(`Status updated to ${data.status === 1 ? 'Active' : 'Inactive'}`, 'success');
                        } else {
                            showToast('Failed to update status', 'error');
                        }
                    } catch (error) {
                        showToast('Request failed', 'error');
                    }
                });
            });
        });

        function showToast(message, type = 'success') {
            const toast = document.getElementById('toast');
            const msg = document.getElementById('toast-message');

            if (!toast || !msg) return;

            // Color variants
            toast.classList.remove('bg-gray-800', 'bg-green-600', 'bg-red-600', 'bg-blue-600');
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