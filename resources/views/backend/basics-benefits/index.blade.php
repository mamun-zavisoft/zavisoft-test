@extends('backend.layouts.dashboard')

@section('title', 'Basics Benefits')

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

    <div>
        <div class="flex justify-between mb-3">
            <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Basics Benefits</h1>
            <a class="text-white bg-primary-500 border border-transparent hover:bg-primary-500 hover:text-white focus:ring-0 rounded text-base px-4 py-2 focus:outline-none flex items-center"
                href="{{ route('admin.basics-benefits.create') }}">Add new</a>
        </div>

        <div class="bg-white rounded p-4">
            @if (count($benefits) == 0)
                <div class="alert alert-danger flex items-center justify-center text-xl">No benefits found</div>
            @else
                <div class="relative overflow-x-auto border blade-career">
                    <table class="w-full text-sm text-left rtl:text-right text-body">
                        <thead class="bg-neutral-50 border-b border-default font-semibold">
                            <tr>
                                <th scope="col" class="px-4 py-3">Icon</th>
                                <th scope="col" class="px-4 py-3">Title</th>
                                <th scope="col" class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="font-normal text-neutral-500">
                            @foreach ($benefits as $benefit)
                                <tr class="border-b last:border-b-0">
                                    <th scope="row" class="px-4 py-3 text-heading whitespace-nowrap">
                                        <img src="{{ asset('storage/' . $benefit->icon) }}" alt="Icon"
                                            class="w-6 h-6 object-cover rounded">
                                    </th>
                                    <th scope="row" class="px-4 py-3 text-heading whitespace-nowrap">
                                        {{ $benefit->short_description }}
                                    </th>
                                    <td class="px-4 py-3" style="width: 120px">
                                        <div class="flex gap-4">
                                            <button data-modal-target="benefit-modal-{{ $benefit->id }}"
                                                data-modal-toggle="benefit-modal-{{ $benefit->id }}"
                                                class="btn btn-submit benefit-btns" type="button">
                                                Edit
                                            </button><button data-modal-target="benefit-delete-modal-{{ $benefit->id }}"
                                                data-modal-toggle="benefit-delete-modal-{{ $benefit->id }}"
                                                class="btn btn-submit benefit-delete-btn" type="button">
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div id="benefit-modal-{{ $benefit->id }}" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Benefits</h5>
                                                <button type="button"
                                                    class="close p-1.5 w-6 h-6 flex justify-center items-center bg-neutral-50"
                                                    data-modal-hide="benefit-modal-{{ $benefit->id }}" aria-label="Close">
                                                    <span class="text-base" aria-hidden="true">X</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.basics-benefits.update', $benefit->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PATCH')

                                                    <!-- Icon Upload -->
                                                    <div class="form-group">
                                                        <div class="image-upload">
                                                            <input type="file" name="icon"
                                                                id="icon-input-{{ $benefit->id }}" accept="image/*">
                                                            <div
                                                                class="image-uploads w-full h-full flex flex-col items-center justify-center">
                                                                <img src="{{ asset('assets/images/icons/upload.svg') }}"
                                                                    alt="upload" class="w-7 h-7">
                                                            </div>
                                                        </div>

                                                        @error('icon')
                                                            <div class="text-danger-500 mt-1">{{ $message }}</div>
                                                        @enderror

                                                        <span id="image-file-name-{{ $benefit->id }}"
                                                            class="mt-2 text-sm text-gray-600 hidden"></span>
                                                    </div>

                                                    <!-- Image Preview Container -->
                                                    <div class="image-container mt-3 flex gap-2">
                                                        @if (!empty($benefit->icon))
                                                            <div id="old-image-{{ $benefit->id }}">
                                                                <img src="{{ asset('storage/' . $benefit->icon) }}"
                                                                    alt="Current Image"
                                                                    class="w-10 h-10 object-cover rounded border shadow-sm">
                                                            </div>
                                                        @endif

                                                        <div id="new-image-preview-{{ $benefit->id }}" class="hidden">
                                                            <img id="preview-image-{{ $benefit->id }}" src=""
                                                                alt="Preview"
                                                                class="w-10 h-10 object-cover rounded border shadow-sm">
                                                        </div>
                                                    </div>

                                                    <!-- Short Description -->
                                                    <div class="form-group flex-1 mt-4">
                                                        <input type="text" name="short_description"
                                                            value="{{ $benefit->short_description }}"
                                                            placeholder="Enter short description"
                                                            class="w-full px-4 py-3 border rounded-lg" />
                                                        @error('short_description')
                                                            <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="flex justify-end mt-6">
                                                        <button type="submit" class="btn btn-submit mr-2">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="benefit-delete-modal-{{ $benefit['id'] }}" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirm Delete</h5>
                                                <button type="button"
                                                    class="absolute top-3 end-2.5 text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                                                    data-modal-hide="benefit-delete-modal-{{ $benefit['id'] }}">
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
                                                    <svg class="mx-auto mb-4 text-fg-disabled w-12 h-12 "
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                    <h3 class="mb-6 text-body">Are you sure you want to delete this benefit
                                                    </h3>
                                                    <div class="flex items-center space-x-4 justify-center">

                                                        <form
                                                            action="{{ route('admin.basics-benefits.destroy', $benefit['id']) }}"
                                                            method="POST" class="space-y-3">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="text-white bg-danger box-border border border-transparent hover:bg-danger-strong focus:ring-0 focus:ring-danger-medium  font-medium leading-5 rounded text-sm px-4 py-2.5 focus:outline-none">
                                                                Yes, I'm sure
                                                            </button>
                                                        </form>

                                                        <button
                                                            data-modal-hide="benefit-delete-modal-{{ $benefit['id'] }}"
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
            @endif
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('input[type="file"][name="icon"]').forEach(function(input) {
                input.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    const benefitId = this.id.split('-').pop();

                    const fileNameSpan = document.getElementById('image-file-name-' + benefitId);
                    const oldImageDiv = document.getElementById('old-image-' + benefitId);
                    const newPreviewDiv = document.getElementById('new-image-preview-' + benefitId);
                    const previewImg = document.getElementById('preview-image-' + benefitId);

                    if (file) {
                        if (fileNameSpan) {
                            fileNameSpan.textContent = file.name;
                            fileNameSpan.classList.remove('hidden');
                        }

                        if (oldImageDiv) {
                            oldImageDiv.classList.add('hidden');
                        }

                        const reader = new FileReader();
                        reader.onload = function(e) {
                            previewImg.src = e.target.result;
                            newPreviewDiv.classList.remove('hidden');
                        };
                        reader.readAsDataURL(file);
                    } else {
                        if (fileNameSpan) {
                            fileNameSpan.textContent = '';
                            fileNameSpan.classList.add('hidden');
                        }
                        if (newPreviewDiv) {
                            newPreviewDiv.classList.add('hidden');
                        }
                        if (oldImageDiv) {
                            oldImageDiv.classList.remove('hidden');
                        }
                    }
                });
            });
        });
    </script>
@endpush
