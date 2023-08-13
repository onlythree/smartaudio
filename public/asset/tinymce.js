
tinymce.init({
    selector: 'textarea.content',

    image_class_list: [
        { title: 'img-responsive', value: 'img-responsive' },
    ],
    height: 500,
    setup: function (editor) {
        editor.on('init change', function () {
            editor.save();
        });
    },
    plugins: [
        'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
        'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
        'insertdatetime', 'media', 'table', 'help', 'wordcount'
    ],
    toolbar: 'code | blocks |' +
        'fontsize bold italic | forecolor backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'anchor link unlink | image imagetools | table | removeformat',
   
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
    //valid_elements: 'strong/b,p,img[src],h1,h2,h3,h4,h5,table,tr,td,th,a[href],span[style]',
    color_cols: 5,

    image_title: true,
    automatic_uploads: true,
    images_upload_url: '/admin/upload',
    file_picker_types: 'image',
    file_picker_callback: function (cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
            var file = this.files[0];

            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), { title: file.name });
            };
        };
        input.click();
    },

    relative_urls: false,
    convert_urls: false,
    remove_script_host: false,

});