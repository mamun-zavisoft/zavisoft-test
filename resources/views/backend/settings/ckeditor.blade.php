<div class="bg-white quill-wrapper">
    <input type="hidden" name="{{ $name }}" class="quill-input" value="{{ $value ?? '' }}"
        data-placeholder="{{ $placeholder ?? 'Write here...' }}" />
    <div class="quill-editor"></div>
</div>

@once
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toolbarOptions = [
                    [{
                        'font': []
                    }, {
                        'size': ['small', false, 'large', 'huge']
                    }],
                    [{
                        'header': [1, 2, 3, 4, 5, 6, false]
                    }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        'color': []
                    }, {
                        'background': []
                    }],
                    [{
                        'align': []
                    }],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }, {
                        'indent': '-1'
                    }, {
                        'indent': '+1'
                    }],
                    ['blockquote', 'code-block'],
                    ['link', 'image', 'video'],
                    ['clean']
                ];

                // Initialize all editors
                const wrappers = document.querySelectorAll('.quill-wrapper');

                wrappers.forEach(function(wrapper) {
                    const editorEl = wrapper.querySelector('.quill-editor');
                    const hiddenInput = wrapper.querySelector('.quill-input');

                    const quill = new Quill(editorEl, {
                        theme: 'snow',
                        placeholder: hiddenInput.getAttribute('data-placeholder') || 'Description...',
                        modules: {
                            toolbar: toolbarOptions
                        }
                    });

                    // Set initial value from hidden input (for edit forms)
                    if (hiddenInput.value) {
                        quill.root.innerHTML = hiddenInput.value;
                    }

                    // Store a reference so we can find it later on submit
                    editorEl._quillInstance = quill;
                });

                // Attach submit handler to ALL forms on the page
                document.querySelectorAll('form').forEach(function(form) {
                    form.addEventListener('submit', function() {
                        form.querySelectorAll('.quill-wrapper').forEach(function(wrapper) {
                            const editorEl = wrapper.querySelector('.quill-editor');
                            const hiddenInput = wrapper.querySelector('.quill-input');
                            const quill = editorEl._quillInstance;

                            if (quill) {
                                hiddenInput.value = quill.root.innerHTML;
                            }
                        });
                    });
                });
            });
        </script>
    @endpush
@endonce
