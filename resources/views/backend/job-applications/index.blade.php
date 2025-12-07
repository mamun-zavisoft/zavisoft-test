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
                            <th class="px-4 py-3">CV</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Update</th>
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
                                    <a href="{{ route('admin.download.cv', $application['id']) }}"
                                        class="btn btn-sm btn-success text-white">
                                        <i class="fas fa-download"></i> Download CV
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
                                            <span class="px-2 py-1 text-xs rounded bg-blue-200 text-blue-800">Interview
                                                Scheduled</span>
                                        @break

                                        @case('interviewed')
                                            <span class="px-2 py-1 text-xs rounded bg-purple-200 text-purple-800">Interviewed</span>
                                        @break

                                        @case('hired')
                                            <span class="px-2 py-1 text-xs rounded bg-primary-200 text-primary-800">Hired</span>
                                        @break
                                    @endswitch
                                </td>

                                {{-- Status Update Form --}}
                                <td class="px-4 py-3">
                                    {{-- <button data-modal-target="applicant{{ $application['id'] }}"
                                        data-modal-toggle="applicant{{ $application['id'] }}"
                                        class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                                        Update {{ $application['id'] }}
                                    </button> --}}

                                    <button data-modal-target="applicant-modal-{{ $application['id'] }}"
                                        data-modal-toggle="applicant-modal-{{ $application['id'] }}"
                                        class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                                        Update
                                    </button>
                                    {{-- Status Update Form in a modal --}}

                                </td>
                            </tr>
                            <div id="applicant-modal-{{ $application['id'] }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update {{ $application['id'] }}</h5>
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
                                                                placeholder="Interview Mark" min="0" max="100">
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
