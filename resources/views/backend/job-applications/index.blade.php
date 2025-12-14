@extends('backend.layouts.dashboard')
@section('title', 'Applications')

@section('content')
    {{-- x-cloak style to hide until Alpine is ready --}}
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    {{-- Alpine.js (include once in your layout ideally) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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

    <h4>Job Applications</h4>


    <div class="application-table bg-white p-4 rounded mt-3">
        @if ($applications->count() > 0)
            <div class="relative overflow-x-auto border blade-career">
                <table class="w-full text-sm text-left rtl:text-right text-body">
                    <thead class="bg-neutral-50 border-b border-default font-semibold">
                        <tr>
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Job Title</th>
                            <th class="px-4 py-3">Applicant Name</th>
                            <th class="px-4 py-3">Phone No</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">GitHub</th>
                            <th class="px-4 py-3">LinkedIn</th>
                            <th class="px-4 py-3">Resume/CV</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="font-normal text-neutral-500">
                        @foreach ($applications as $application)
                            <tr class="border-b last:border-b-0">
                                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3">{{ $application['job']['name'] }}</td>
                                <td class="px-4 py-3">{{ $application['name'] }}</td>
                                <td class="px-4 py-3">{{ $application['phone'] }}</td>
                                <td class="px-4 py-3">{{ $application['email'] }}</td>

                                <td class="px-4 py-3">
                                    @if ($application['github'])
                                        <a href="{{ $application['github'] }}" target="_blank" class="text-decoration-none">
                                            <i class="fab fa-github"></i> GitHub
                                        </a>
                                    @else
                                        <span class="text-muted">N/A</span>
                                    @endif
                                </td>

                                <td class="px-4 py-3">
                                    @if ($application['linkedin'])
                                        <a href="{{ $application['linkedin'] }}" target="_blank"
                                            class="text-decoration-none">
                                            <i class="fab fa-linkedin"></i> LinkedIn
                                        </a>
                                    @else
                                        <span class="text-muted">N/A</span>
                                    @endif
                                </td>

                                <td class="px-4 py-3">
                                    <a href="{{ route('admin.view.cv', $application['name']) }}" target="_blank"
                                        class="btn btn-sm btn-primary">
                                        View CV
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                {{-- Status Badge --}}
                                <td class="px-4 py-3">
                                    @switch($application['status'])
                                        @case('pending')
                                            <span class="px-2 py-1 text-xs rounded bg-yellow-400 text-white">Pending</span>
                                        @break

                                        @case('shortlisted')
                                            <span class="px-2 py-1 text-xs rounded bg-yellow-400 text-white">Shortlisted</span>
                                        @break

                                        @case('interview_scheduled')
                                            <div class="flex flex-col gap-1">
                                                <span class="px-2 py-1 text-xs rounded bg-blue-200 text-blue-800">Interview
                                                    Scheduled</span>
                                                <span class="text-xs">({{ $application['interview_date'] }})</span>
                                            </div>
                                        @break

                                        @case('interviewed')
                                            <div class="flex flex-col gap-1">
                                                <span class="px-2 py-1 text-xs rounded bg-purple-200 text-purple-800">Interviewed
                                                    ({{ $application['interview_mark'] }})
                                                </span>
                                                <span class="text-xs">({{ $application['interview_date'] }})</span>
                                            </div>
                                        @break

                                        @case('hired')
                                            <div class="flex flex-col gap-1">
                                                <span class="px-2 py-1 text-xs rounded bg-primary-200 text-primary-800">Hired</span>
                                                <span class="text-xs">({{ $application['interview_date'] }})</span>
                                            </div>
                                        @break
                                    @endswitch
                                </td>

                                {{-- Status Update Form --}}
                                <td class="px-4 py-3">
                                    <div class="flex gap-3">
                                        <button data-modal-target="applicant-modal-{{ $application['id'] }}"
                                            data-modal-toggle="applicant-modal-{{ $application['id'] }}"
                                            class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                                            Update
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn"
                                            data-modal-target="applicant-delete-modal-{{ $application['id'] }}"
                                            data-modal-toggle="applicant-delete-modal-{{ $application['id'] }}">
                                            <i class="fas fa-trash"></i>
                                        </button>


                                    </div>
                                </td>
                            </tr>
                            <div id="applicant-modal-{{ $application['id'] }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update
                                                {{ ucwords(str_replace('_', ' ', $application['status'])) }} Status</h5>
                                            <button type="button"
                                                class="close p-1.5 w-6 h-6 flex justify-center items-center bg-neutral-50"
                                                data-modal-hide="applicant-modal-{{ $application['id'] }}"
                                                aria-label="Close">
                                                <span class="text-base" aria-hidden="true">X </span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div x-data="{ status: '{{ $application['status'] }}' }">
                                                <form
                                                    action="{{ route('admin.job-applications.update', $application['id']) }}"
                                                    method="POST" class="space-y-3">
                                                    @csrf
                                                    @method('PUT')

                                                    {{-- Status Dropdown --}}
                                                    <div class="form-group mb-3">
                                                        <select name="status" x-model="status"
                                                            class="w-full border rounded p-2 text-sm">
                                                            <option value="pending"
                                                                {{ $application['status'] === 'pending' ? 'selected' : '' }}>
                                                                Pending</option>
                                                            <option value="shortlisted"
                                                                {{ $application['status'] === 'shortlisted' ? 'selected' : '' }}>
                                                                Shortlisted</option>
                                                            <option value="interview_scheduled"
                                                                {{ $application['status'] === 'interview_scheduled' ? 'selected' : '' }}>
                                                                Interview Scheduled</option>
                                                            <option value="interviewed"
                                                                {{ $application['status'] === 'interviewed' ? 'selected' : '' }}>
                                                                Interviewed</option>
                                                            <option value="hired"
                                                                {{ $application['status'] === 'hired' ? 'selected' : '' }}>
                                                                Hired
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="flex flex-col gap-3">
                                                        {{-- Interview Date (Scheduled, Interviewed, Hired) --}}
                                                        <div x-show="status === 'interview_scheduled' || status === 'interviewed' || status === 'hired'"
                                                            x-cloak>
                                                            <input type="datetime-local" name="interview_date"
                                                                class="w-full border rounded p-2 text-sm"
                                                                value="{{ old('interview_date', $application['interview_date']) }}">
                                                        </div>

                                                        {{-- Interview Mark (Interviewed only) --}}
                                                        <div x-show="status === 'interviewed'" x-cloak>
                                                            <input type="text" name="interview_mark"
                                                                class="w-full border rounded p-2 text-sm"
                                                                value="{{ old('interview_mark', $application['interview_mark']) }}"
                                                                placeholder="Interview Mark" min="0"
                                                                max="100">
                                                        </div>
                                                    </div>

                                                    <div class="flex justify-end">
                                                        <button type="submit"
                                                            class="bg-blue-600 text-white px-4 py-2.5 mt-6 rounded text-sm hover:bg-blue-700">
                                                            Update
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- application delete confirmation modal --}}
                            <div id="applicant-delete-modal-{{ $application['id'] }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirm Delete</h5>
                                            <button type="button"
                                                class="absolute top-3 end-2.5 text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                                                data-modal-hide="applicant-delete-modal-{{ $application['id'] }}">
                                                <svg class="w-5 h-5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18 17.94 6M18 18 6.06 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-fg-disabled w-12 h-12 " aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-6 text-body">Are you sure you want to delete this application
                                                </h3>
                                                <div class="flex items-center space-x-4 justify-center">

                                                    <form
                                                        action="{{ route('admin.job-applications.destroy', $application['id']) }}"
                                                        method="POST" class="space-y-3">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="text-white bg-danger box-border border border-transparent hover:bg-danger-strong focus:ring-0 focus:ring-danger-medium  font-medium leading-5 rounded text-sm px-4 py-2.5 focus:outline-none">
                                                            Yes, I'm sure
                                                        </button>
                                                    </form>

                                                    <button
                                                        data-modal-hide="applicant-delete-modal-{{ $application['id'] }}"
                                                        type="button"
                                                        class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-0 focus:ring-neutral-tertiary  font-medium leading-5 rounded text-sm px-4 py-2.5 focus:outline-none">No,
                                                        cancel</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            
                        @endforeach

                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info text-center">
                <h5>No applications found.</h5>
                <p class="mb-0">There are no job applications submitted yet.</p>
            </div>
        @endif
    </div>


@endsection
