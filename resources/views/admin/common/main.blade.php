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
            <form id="formData">
                @csrf
                @include('admin.modal.urlSemplice')
                @include('admin.modal.step1.step1')
                @include('admin.modal.step2.step2')
                @include('admin.modal.step3.step3')
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
            $('#urlSempliceModal').modal('show');

            $(document).ready(function() {
                var currentStep = 1;
                var totalSteps = 12;

                // Sembunyikan tombol "Back" saat di langkah pertama
                $("#btnBack").hide();

                // Event handler untuk tombol "Next"
                $("#btnNext").click(function() {
                    if (currentStep < totalSteps) {
                        currentStep++;
                        showStep(currentStep);
                    }
                });

                // Event handler untuk tombol "Back"
                $("#btnBack").click(function() {
                    if (currentStep > 1) {
                        currentStep--;
                        showStep(currentStep);
                    }
                });

                // Event handler untuk tombol "Next"
                $("#btnNext2").click(function() {
                    if (currentStep < totalSteps) {
                        currentStep++;
                        showStep(currentStep);
                    }
                });

                // Event handler untuk tombol "Back"
                $("#btnBack2").click(function() {
                    if (currentStep > 1) {
                        currentStep--;
                        showStep(currentStep);
                    }
                });

                $("#btnNext3").click(function() {
                    if (currentStep < totalSteps) {
                        currentStep++;
                        showStep(currentStep);
                    }
                });

                $("#btnBack3").click(function() {
                    if (currentStep > 1) {
                        currentStep--;
                        showStep(currentStep);
                    }
                });

                function showStep(step) {
                    if (step > 1) {
                        $("#btnBack").show();
                    } else {
                        $("#btnBack").hide();
                    }

                    if (step === totalSteps) {
                        $("#btnNext").hide();
                        $("#btnSave").show();
                    } else {
                        $("#btnNext").show();
                    }
                    if (step === 12) {
                        $('#step1Modal').modal('hide');
                        $('#step2Modal').modal('hide');
                        $('#step3Modal').modal('show');
                    }
                    if (step === 7 || step === 11) {
                        $('#step1Modal').modal('hide');
                        $('#step2Modal').modal('show');
                        $('#step3Modal').modal('hide');
                    }
                    if (step === 6) {
                        $('#step1Modal').modal('show');
                        $('#step2Modal').modal('hide');
                        $('#step3Modal').modal('hide');
                    }

                    for (var i = 1; i <= totalSteps; i++) {
                        if (i == step) {
                            $("#steps-" + i).show();
                            $(".atbd-steps__item").eq(i - 1).addClass("active");
                        } else {
                            $("#steps-" + i).hide();
                            $(".atbd-steps__item").eq(i - 1).removeClass("active");
                        }
                    }
                }

                showStep(currentStep);
            });
        });

        $('#btnOpenSteps1').on('click', function() {
            var urlSemplice = $('#url_semplice').val();

            if (urlSemplice == '') {
                // $('#url_semplice')
                return false;
            }
            $('#step1Modal').modal('show');
        })

        $('#formData').submit(function(e) {
            $(".submit").prop('disabled', true);
            e.preventDefault();
            $('.is-invalid').each(function() {
                $('.is-invalid').removeClass('is-invalid');
            });
            $.ajax({
                url: "{{ route('dashboard_add_data') }}",
                type: "POST",
                data: $('#formData').serialize(),
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
        })
    </script>
</body>

</html>
