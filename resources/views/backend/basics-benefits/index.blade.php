@extends('backend.layouts.dashboard')
@section('title', 'Basics Benefits')

@section('content')
    <div>
        <h1 class="text-base lg:text-xl font-bold text-primary-600 mb-4">Basics Benefits</h1>

        <div class="">
            <form action="">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-0">
                    <div class="col-span-1 md:col-span-2">
                        <div id="benefits-container">
                            <!-- Initial Row -->
                            <div class="benefits-form benefit-row mb-6">
                                <div class="flex justify-between gap-3">
                                    <div class="flex gap-3 flex-1">
                                        <div class="form-group flex-shrink">
                                            <div class="image-upload m-0!">
                                                <input type="file" name="images[]" accept="image/*">
                                                <div
                                                    class="image-uploads w-full h-full flex flex-col items-center justify-center">
                                                    <img src="{{ asset('assets/images/icons/upload.svg') }}" alt="upload"
                                                        class="w-7 h-7">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group flex-1">
                                            <input type="text" name="short-descriptions[]" placeholder="Enter short description"
                                                class="w-full px-4 py-3 border rounded-lg" />
                                        </div>
                                    </div>
                                    <div class="form-action-btn">
                                        <!-- Delete button will be injected here by JS when needed -->
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
                            <button class="btn btn-submit mr-2">Submit</button>
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
            row.className = 'benefits-form benefit-row mb-6';
            row.innerHTML = `
            <div class="flex justify-between gap-3">
                <div class="flex gap-3 flex-1">
                    <div class="form-group flex-shrink">
                        <div class="image-upload m-0!">
                            <input type="file" name="images[]" accept="image/*">
                            <div class="image-uploads w-full h-full flex flex-col items-center justify-center">
                                <img src="{{ asset('assets/images/icons/upload.svg') }}" class="w-7 h-7">
                            </div>
                        </div>
                    </div>
                    <div class="form-group flex-1">
                        <input type="text" name="titles[]" placeholder="Enter Title"
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

                // Add more → only last row
                addBtn.style.display = isLast ? 'block' : 'none';

                // Delete logic
                if (rows.length === 1) {
                    deleteBtn.classList.add('hidden');
                } else {
                    deleteBtn.classList.toggle('hidden', isLast);
                }
            });
        }

        /* EVENT DELEGATION (KEY FIX) */
        container.addEventListener('click', function(e) {
            // ADD MORE
            if (e.target.closest('.add-btn button')) {
                createNewRow();
            }

            // DELETE
            if (e.target.closest('.delete-btn button')) {
                e.target.closest('.benefit-row').remove();
                updateButtons();
            }
        });

        // Initial state
        updateButtons();
    </script>
@endpush
