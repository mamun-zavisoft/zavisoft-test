@extends('backend.layouts.dashboard')
@section('title', 'Applications')

@section('content')
    <h4>Job Applications</h4>

    <div class="application-table bg-white p-4 rounded mt-3">
        @if ($applications->count() > 0)
            <div class="relative overflow-x-auto  border blade-career">
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
                        </tr>
                    </thead>
                    <tbody class="font-normal text-neutral-500">
                        @foreach ($applications as $application)
                            <tr class="border-b last:border-b-0">
                                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3">
                                    {{ $application['job']['name'] }}
                                </td>
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
                                    <a href="{{ route('admin.download.cv',$application['id']) }}" class="btn btn-sm btn-success text-white">
                                        <i class="fas fa-download"></i> Download CV
                                    </a>
                                </td>
                            </tr>
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
