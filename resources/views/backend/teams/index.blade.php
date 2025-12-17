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
        <div class="flex items-center gap-4">
            <a class="text-white bg-primary-500  border border-transparent hover:bg-primary-500 hover:text-white focus:ring-0  rounded text-base px-4 py-2 focus:outline-none flex items-center"
                href="{{ route('admin.teams.create') }}">Add new team</a>
            <a class="text-white bg-primary-500  border border-transparent hover:bg-primary-500 hover:text-white focus:ring-0  rounded text-base px-4 py-2 focus:outline-none flex items-center"
                href="{{ route('admin.teams.create', ['type' => 'ceo']) }}">Add CEO</a>
        </div>
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
                                    <label for="profile{{ $team->id }}" class="inline-flex items-center cursor-pointer">

                                        <input type="checkbox" class="sr-only peer team-status-toggle"
                                            id="profile{{ $team->id }}" data-id="{{ $team->id }}"
                                            data-status="{{ $team->status }}" @checked($team->status == 1)>
                                        <div
                                            class="relative w-9 h-5 bg-neutral-300 peer-focus:outline-none
                                             peer-focus:ring-0 peer-focus:ring-brand-soft  rounded-full peer 
                                             peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full
                                              peer-checked:after:border-buffer after:content-[''] after:absolute after:top-0.5
                                               after:start-0.5 after:bg-white after:rounded-full 
                                               after:h-4 after:w-4 after:transition-all peer-checked:bg-primary-500">
                                        </div>

                                    </label>

                                </td>

                                <td class="px-4 py-3 ">
                                    <div class="flex gap-4 items-center">
                                        <a href="{{ route('admin.teams.edit', $team->id) }}"
                                            class=" text-fg-brand hover:underline"><i class="fa fa-edit"></i>
                                        </a>
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

            const csrfMeta = document.querySelector('meta[name="csrf-token"]');

            if (!csrfMeta) {
                console.error('CSRF token missing');
                return;
            }

            document.querySelectorAll('.team-status-toggle').forEach(toggle => {
                const status = Number(toggle.dataset.status);
                toggle.checked = status === 1;


                toggle.addEventListener('change', async function() {

                    const teamId = this.dataset.id;
                    const newStatus = this.checked ? 1 : 0;

                    if (!teamId) {
                        showToast('Invalid team ID', 'error');
                        this.checked = !this.checked;
                        return;
                    }

                    try {
                        const res = await fetch(`/admin/teams/${teamId}/toggle-status`, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': csrfMeta.content,
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                status: newStatus
                            })
                        });

                        if (!res.ok) {
                            throw new Error(`Server error (${res.status})`);
                        }

                        const data = await res.json();

                        if (data.success) {
                            showToast(
                                `Status changed to ${newStatus === 1 ? 'Active' : 'Inactive'}`,
                                'success'
                            );


                            this.dataset.status = newStatus;
                        } else {
                            throw new Error('Update failed');
                        }

                    } catch (error) {
                        console.error(error);


                        this.checked = !this.checked;

                        showToast('Failed to update status', 'error');
                    }
                });
            });
        });

        /* ================= TOAST FUNCTION ================= */

        function showToast(message, type = 'success') {
            const toast = document.getElementById('toast');
            const msg = document.getElementById('toast-message');

            if (!toast || !msg) return;

            toast.classList.remove(
                'bg-gray-800',
                'bg-green-600',
                'bg-red-600',
                'bg-blue-600'
            );

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
