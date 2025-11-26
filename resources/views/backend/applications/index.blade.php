@extends('backend.layouts.dashboard')
@section('title', 'Applications')

@section('content')
    <h4>Job Applications</h4>

    <div class="application-table bg-white p-4 rounded mt-3">
        @if ($applications->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Job Title</th>
                            <th>Applicant Name</th>
                            <th>Email</th>
                            <th>GitHub</th>
                            <th>LinkedIn</th>
                            <th>CV</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $application)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $application['job']['name'] }}
                                </td>
                                <td>{{ $application['name'] }}</td>
                                <td>{{ $application['email'] }}</td>
                                <td>
                                    @if ($application['github'])
                                        <a href="{{ $application['github'] }}" target="_blank" class="text-decoration-none">
                                            <i class="fab fa-github"></i> GitHub
                                        </a>
                                    @else
                                        <span class="text-muted">N/A</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($application['linkedin'])
                                        <a href="{{ $application['linkedin'] }}" target="_blank" class="text-decoration-none">
                                            <i class="fab fa-linkedin"></i> LinkedIn
                                        </a>
                                    @else
                                        <span class="text-muted">N/A</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ asset($application['cv']) }}" target="_blank"
                                        class="btn btn-sm btn-success text-white">
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
