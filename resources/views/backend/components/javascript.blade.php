<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('frontend/assets/js/header-ui.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/ajax.js')}}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
<script>
    // Khởi tạo CKEditor 5 cho từng textarea
    ClassicEditor
        .create(document.querySelector('#tour-schedule'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#policy'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#notes'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#payment'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#event'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#price-details'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#tour-overview'))
        .catch(error => {
            console.error(error);
        });
</script>

<script src="{{ asset('frontend/assets/js/main.js') }}"></script>