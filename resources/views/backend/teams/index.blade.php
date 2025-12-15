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
                                SL No
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Name
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Designation
                            </th>
                            <th scope="col" class="px-4 py-3 ">
                                Image
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
                        @foreach ($teams as $team)
                            <tr class="border-b last:border-b-0">
                                <td class="px-4 py-3">
                                    {{ $team->sl_no }}
                                </td>

                                <td class="px-4 py-3 flex items-center gap-2">
                                    {{ $team->name }}
                                </td>
                                <td class="px-4 py-3">
                                    {{ $team->designation }}
                                </td>
                                <td class="px-4 py-3">
                                    <img src="{{ Storage::url($team->image) }}" alt="{{ $team->name }}"
                                        class="w-12 h-12 object-cover rounded">
                                </td>
                                <td class="px-4 py-3">

                                    <i class="fas {{ $team->status === 1 ? 'fa-toggle-on text-green-500' : 'fa-toggle-off text-red-500' }} text-2xl cursor-pointer toggle-icon"
                                        data-id="{{ $team->id }}"></i>
                                </td>
                                <td class="px-4 py-3 ">
                                    <div class="flex gap-4 items-center">
                                        <a href="{{ route('admin.teams.edit', $team->id) }}"
                                            class=" text-fg-brand hover:underline"><i class="fa fa-edit"></i></a>

                                        <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST"
                                            >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-white bg-danger box-border border border-transparent hover:bg-danger-strong focus:ring-0 focus:ring-danger-medium  font-medium leading-5 rounded text-sm px-3 py-1.5 focus:outline-none">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

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

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Debug: Check if icons are found
            const icons = document.querySelectorAll('.toggle-icon');
            console.log('Found toggle icons:', icons.length);

            icons.forEach(icon => {
                icon.addEventListener('click', async function() {
                    const teamId = this.dataset.id;
                    console.log('Clicked icon with team ID:', teamId);

                    if (!teamId) {
                        console.error('No team ID found');
                        showToast('No team ID specified', 'error');
                        return;
                    }

                    // Get CSRF token
                    const csrfMeta = document.querySelector('meta[name="csrf-token"]');
                    if (!csrfMeta) {
                        console.error('CSRF token meta tag not found');
                        showToast('Security token missing', 'error');
                        return;
                    }

                    try {
                        console.log('Sending request to:',
                            `/admin/teams/${teamId}/toggle-status`);

                        const res = await fetch(`/admin/teams/${teamId}/toggle-status`, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': csrfMeta.content,
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                _method: 'POST'
                            }) // Optional, but good practice
                        });

                        console.log('Response status:', res.status);

                        // Check if response is OK
                        if (!res.ok) {
                            const errorText = await res.text();
                            console.error('Server error:', errorText);
                            showToast(`Server error: ${res.status}`, 'error');
                            return;
                        }

                        const data = await res.json();
                        console.log('Response data:', data);

                        if (data.success) {
                            // Update icon appearance
                            if (data.status === 1) {
                                this.classList.remove('fa-toggle-off', 'text-red-500');
                                this.classList.add('fa-toggle-on', 'text-green-500');
                            } else {
                                this.classList.remove('fa-toggle-on', 'text-green-500');
                                this.classList.add('fa-toggle-off', 'text-red-500');
                            }

                            showToast(
                                `Status updated to ${data.status === 1 ? 'Active' : 'Inactive'}`,
                                'success');
                        } else {
                            showToast('Failed to update status', 'error');
                        }
                    } catch (error) {
                        console.error('Fetch error:', error);
                        showToast('Request failed: ' + error.message, 'error');
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
