<div class="bg-gray-50">
    <input type="hidden" id="description-input" />
    <div id="editor-description" class="">

    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {


        const toolbarOptions = [
            // Font family + size
            [{
                'font': []
            }, {
                'size': ['small', false, 'large', 'huge']
            }],

            // Headers
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }],

            // Basic styles
            ['bold', 'italic', 'underline', 'strike'],

            // Text color & background
            [{
                'color': []
            }, {
                'background': []
            }],

            // Text alignment
            [{
                'align': []
            }],

            // Lists & indentation
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }, {
                'indent': '-1'
            }, {
                'indent': '+1'
            }],

            // Block quotes & code blocks
            ['blockquote', 'code-block'],

            // Links, images, videos
            ['link', 'image', 'video'],

            // Clear formatting
            ['clean']
        ];


        // Initialize Quill for Description
        const quillDescription = new Quill('#editor-description', {
            theme: 'snow',
            placeholder: 'Description...',
            modules: {
                toolbar: toolbarOptions
            }
        });


        // Set initial values
        quillDescription.root.innerHTML = document.getElementById('description-input').value;

        // Sync both on form submit
        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById('description-input').value = quillDescription.root.innerHTML;
        });

    });
</script>
