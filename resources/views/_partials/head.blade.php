<!-- Font Tags Start -->
<link rel="preconnect" href="https://fonts.gstatic.com"/>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet"/>
{{--<link rel="stylesheet" href="/font/CS-Interface/style.css"/>--}}
<!-- Font Tags End -->
<!-- Vendor Styles Start -->
@vite('resources/assets/scss/vendor.scss')

@stack('css')
<!-- Vendor Styles End -->
<!-- Template Base Styles Start -->
@vite(['resources/assets/scss/template.scss', 'resources/assets/scss/custom.scss'])
<!-- Template Base Styles End -->
<script src="{{ asset('js/theme/base/loader.js') }}"></script>
