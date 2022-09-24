<x-layout>
    <div class="row p-0 m-0">
        <div class="col-3">
            <x-admin.navlist />
        </div>
        <div class="col-9">
        {{$slot}}
        </div>
    </div>
    
    <!-- ckeditor -->
    <script src="/ckeditor/ckeditor.js"></script>
    <script>ClassicEditor
            .create( document.querySelector( '.editor' ), {
                licenseKey: '',
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( error => {
                console.error( 'Oops, something went wrong!' );
                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                console.warn( 'Build id: eucamibllt8y-q0tmukny95ie' );
                console.error( error );
            } );
    </script>
</x-layout>