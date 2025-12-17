@extends('backend.layouts.dashboard')
@section('title', 'Dashboard')

@section('content')
    <h4>Dashboard</h4>
    <div class="grid grid-cols-4 gap-6">
        <!-- Total Job Post -->
        <div class="bg-white shadow rounded-lg p-4 flex flex-col">
            <div class="flex items-center justify-between mb-3">
                <span class="flex items-center justify-center w-10 h-10 rounded bg-zavisoft text-white">
                    <i class="fa-regular fa-file"></i>
                </span>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-semibold">{{ $jobCount }}</h2>
                    <p class="text-xs text-gray-500">Total Job Post</p>
                </div>
            </div>
        </div>

        <!-- Total CV -->
        <div class="bg-white shadow rounded-lg p-4 flex flex-col">
            <div class="flex items-center justify-between mb-3">
                <span class="flex items-center justify-center w-10 h-10 rounded bg-zavisoft text-white">
                    <i class="fa fa-file-signature text-600 text-xl"></i>
                </span>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-semibold">{{ $cvCount }}</h2>
                    <p class="text-xs text-gray-500">Total CV</p>
                </div>
            </div>
        </div>

        <!-- Total Messages -->
        <div class="bg-white shadow rounded-lg p-4 flex flex-col">
            <div class="flex items-center justify-between mb-3">
                <span class="flex items-center justify-center w-10 h-10 rounded bg-zavisoft text-white">
                    <i class="fa fa-bell text-600 text-xl"></i>
                </span>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-semibold">{{ $messageCount }}</h2>
                    <p class="text-xs text-gray-500">Total Messages</p>
                </div>
            </div>
        </div>

        <!-- Example 4th card -->
        <div class="bg-white shadow rounded-lg p-4 flex flex-col">
            <div class="flex items-center justify-between mb-3">
                <span class="flex items-center justify-center w-10 h-10 rounded bg-zavisoft text-white">
                    <i class="fa fa-diagram-project text-600 text-xl"></i>
                </span>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-semibold">{{ $projectCount }}</h2>
                    <p class="text-xs text-gray-500">Total Projects</p>
                </div>
            </div>
        </div>
    </div>
@endsection
