@extends('backend.layouts.dashboard')

@section('title', 'Create Benefits')

@section('content')
    <div>
        <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Basics Benefits</h1>

        <div class="">
            <form action="{{ route('admin.basics-benefits.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0">
                    <div class="col-span-1 md:col-span-2">
                        <div id="benefits-container">
                            <!-- Initial Row -->
                            <div class="benefits-form benefit-row">
                                <div class="flex justify-between gap-3">
                                    <div class="flex gap-3 flex-1">
                                        <!-- Icon Upload -->
                                        <div class="form-group flex-shrink">
                                            <div class="image-upload m-0!">
                                                <input type="file" name="benefifts[][icon]" accept="image/*"
                                                    class="icon-input">
                                                <div
                                                    class="image-uploads w-full h-full flex flex-col items-center justify-center">
                                                    <img src="{{ asset('assets/images/icons/upload.svg') }}" alt="upload"
                                                        class="w-7 h-7">
                                                </div>
                                            </div>
                                            @error('benefifts.*.icon')
                                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                            <span
                                                class="icon-file-name mt-2 text-sm text-gray-600 hidden line-clamp-1 max-w-20"></span>
                                        </div>

                                        <!-- Short Description -->
                                        <div class="form-group flex-1">
                                            <input type="text" name="benefifts[][short_description]"
                                                placeholder="Enter short description"
                                                class="w-full px-4 py-3 border rounded-lg" />
                                            @error('benefifts.*.short_description')
                                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-action-btn">
                                        <div class="delete-btn hidden">
                                            <button type="button"
                                                class="w-16 h-10 rounded bg-red-500 text-white hover:bg-red-600">
                                                Delete
                                            </button>
                                        </div>
                                        <div class="add-btn">
                                            <button type="button" class="btn btn-submit h-10 py-2 px-6">
                                                Add more
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <div class="flex justify-end mt-6">
                            <button type="submit" class="btn btn-submit mr-2">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const container = document.getElementById('benefits-container');


        function createNewRow() {
            const row = document.createElement('div');
            row.className = 'benefits-form benefit-row';
            row.innerHTML = `
                <div class="flex justify-between gap-3">
                    <div class="flex gap-3 flex-1">
                        <div class="form-group flex-shrink">
                            <div class="image-upload m-0!">
                                <input type="file" name="benefifts[][icon]" accept="image/*" class="icon-input">
                                <div class="image-uploads w-full h-full flex flex-col items-center justify-center">
                                    <img src="{{ asset('assets/images/icons/upload.svg') }}" alt="upload" class="w-7 h-7">
                                </div>
                            </div>
                            <span class="icon-file-name mt-2 text-sm text-gray-600 hidden line-clamp-1 max-w-20"></span>
                        </div>
                        <div class="form-group flex-1">
                            <input type="text" name="benefifts[][short_description]" placeholder="Enter short description"
                                class="w-full px-4 py-3 border rounded-lg" />
                        </div>
                    </div>
                    <div class="form-action-btn">
                        <div class="delete-btn hidden">
                            <button type="button"
                                class="w-16 h-10 rounded bg-red-500 text-white hover:bg-red-600">
                                Delete
                            </button>
                        </div>
                        <div class="add-btn">
                            <button type="button" class="btn btn-submit h-10 py-2 px-6">
                                Add more
                            </button>
                        </div>
                    </div>
                </div>
            `;
            container.appendChild(row);
            updateButtons();
        }

        function updateButtons() {
            const rows = container.querySelectorAll('.benefit-row');
            rows.forEach((row, index) => {
                const deleteBtn = row.querySelector('.delete-btn');
                const addBtn = row.querySelector('.add-btn');
                const isLast = index === rows.length - 1;

                addBtn.style.display = isLast ? 'block' : 'none';

                if (rows.length > 1) {
                    deleteBtn.classList.toggle('hidden', isLast);
                } else {
                    deleteBtn.classList.add('hidden');
                }
            });
        }

        function handleFileNameDisplay(input) {
            const fileNameSpan = input.closest('.form-group').querySelector('.icon-file-name');

            if (input.files && input.files[0]) {
                fileNameSpan.textContent = input.files[0].name;
                fileNameSpan.classList.remove('hidden');
            } else {
                fileNameSpan.textContent = '';
                fileNameSpan.classList.add('hidden');
            }
        }

        // Event Delegation: Add, Delete, File Change
        container.addEventListener('click', function(e) {
            // Add more button
            if (e.target.closest('.add-btn button')) {
                createNewRow();
            }

            // Delete button
            if (e.target.closest('.delete-btn button')) {
                e.target.closest('.benefit-row').remove();
                updateButtons();
            }
        });

        // File input change event (delegated)
        container.addEventListener('change', function(e) {
            if (e.target.classList.contains('icon-input')) {
                handleFileNameDisplay(e.target);
            }
        });

        // Initial state setup
        updateButtons();

        document.querySelectorAll('.icon-input').forEach(input => {
            handleFileNameDisplay(input);
        });
    </script>
@endpush
