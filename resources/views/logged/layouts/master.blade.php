<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon" type="image/x-icon">

    <title>Dubai Laywers - Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Summernote CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" rel="stylesheet">

    <style>
        #toast-container > .toast-success {
            background-color: #28a745 !important; /* green background */
            color: #fff !important; /* white text */
        }

        #toast-container > .toast-error {
            background-color: #dc3545 !important; /* red background */
            color: #fff !important;
        }

        #toast-container > .toast-info {
            background-color: #17a2b8 !important;
            color: #fff !important;
        }

        #toast-container > .toast-warning {
            background-color: #ffc107 !important;
            color: #212529 !important; /* dark text on yellow */
        }
        .sidebar .sidebar-brand {
            height: 8rem;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('logged.layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            @include('logged.layouts.head')
            @yield('content')
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    @include('logged.layouts.footer')
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <script>
        $('.summernote').summernote({
            height: 200,
            placeholder: 'Write blog content here...',
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['fontsize', 'color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": "4000",
            "extendedTimeOut": "2000",
            "positionClass": "toast-top-right"
        };

        @if(session('success'))
            toastr.success("{{ session('success') }}", "Success");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}", "Error");
        @endif

        @if(session('warning'))
            toastr.warning("{{ session('warning') }}", "Warning");
        @endif

        @if(session('info'))
            toastr.info("{{ session('info') }}", "Info");
        @endif
    </script>
    @yield('js')
</body>
</html>