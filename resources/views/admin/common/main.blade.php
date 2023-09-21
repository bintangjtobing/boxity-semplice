@include('admin.common.header')

<body class="layout-light side-menu overlayScroll">
    <div class="mobile-search">
        <form class="search-form">
            <span data-feather="search"></span>
            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
        </form>
    </div>

    <div class="mobile-author-actions"></div>
    @include('admin.common.topbar')
    <main class="main-content">

        @include('admin.common.sidebar')

        <div class="contents">

            <div class="container-fluid">
                {!! $content !!}
                <!-- ends: .row -->
            </div>
            <form id="formData" enctype="multipart/form-data">
                @csrf
                @include('admin.modal.urlSemplice')
                @include('admin.modal.steps.main')
            </form>
        </div>
        @include('admin.common.footer')
    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <div class="overlay-dark-sidebar"></div>
    @include('admin.common.script')
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })


        $(document).ready(function() {
            var currentStep = 1;
            var totalSteps = 10;

            $('#urlSempliceModal').modal('show');
            $("#btnBack").hide();

            $("#btnNext").click(function() {
                if (currentStep < totalSteps) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            $("#btnBack").click(function() {
                if (currentStep > 1) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            var arrayData = [
                'Profil Singkat - Owner',
                'Tentang Bisnis',
                'Lokasi Bisnis',
                'Testimoni Bisnis',
                'Produk Bisnis',
                'Kontak Bisnis',
                'Situs Web dan Media Bisnis',
                'Marketplace Bisnis',
                'Promo / Event Bisnis',
                '',
            ];

            function showStep(step) {
                if (step > 1) {
                    $("#btnBack").show();
                } else {
                    $("#btnBack").hide();
                }

                if (step === totalSteps) {
                    $("#btnNext").hide();
                } else {
                    $("#btnNext").show();
                }
                $('#titleModal').html(arrayData[step - 1]);
                for (var i = 1; i <= totalSteps; i++) {
                    if (i == step) {
                        if (i == 10) {
                            $('#step1ModalLabel').html('');
                            $('#pageId').attr('hidden', true);
                        } else {
                            $("#titlePage").html(i);
                            $('#pageId').attr('hidden', false);
                            $('#step1ModalLabel').html('Informasi Bisnis');
                        }
                        $("#steps-" + i).show();
                    } else {
                        $("#steps-" + i).hide();
                        $(".atbd-steps__item").eq(i - 1).removeClass("active");
                    }
                }
            }

            showStep(currentStep);
        });

        $('#btnOpenSteps1').on('click', function() {
            var urlSemplice = $('#url_semplice').val();
            clearSingleError('url_semplice');
            if (urlSemplice == '') {
                showSingleError('url_semplice', 'Url Semplice tidak boleh kosong')
                return false;
            }
            $('#urlSempliceModal').modal('hide');
            $('#step1Modal').modal('show');
        })

        $('#formData').submit(function(e) {
            $(".submit").prop('disabled', true);
            e.preventDefault();
            $('.is-invalid').each(function() {
                $('.is-invalid').removeClass('is-invalid');
            });

            var formData = new FormData(this);

            myDropzone.files.forEach(function(file) {
                formData.append('file_product[]', file);
            });

            $.ajax({
                url: "{{ route('dashboard_add_data') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    toastr['success']("Data Berhasil di Tambahkan");
                    window.location.reload();
                },
                error: function(res) {
                    $(".submit").prop('disabled', false);
                    if (res.status != 422)
                        toastr['error']("Something went wrong");
                    showError(res.responseJSON.errors, "#formData");
                    $.each(res.responseJSON.errors, function(idx, item) {
                        toastr['error'](idx = item);
                    });
                }
            });
            return false;
        });
    </script>
</body>

</html>
