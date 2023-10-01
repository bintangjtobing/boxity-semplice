<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ ucfirst(Helper::changeRouteName()) }} Data</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <x-button-add href="{{ route('promo-or-event_add_view') }}" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body p-0">
                <div class="table4  p-25 bg-white mb-30">
                    <div class="table-responsive" style="white-space: nowrap">
                        <table class="table mb-0">
                            <thead>
                                <tr class="userDatatable-header">
                                    <th>
                                        <span class="userDatatable-title">No</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Nama Promo / Event</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Sub Judul Promo / Event</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Link Teks Tombol</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="data">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        searchData();
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            getData(page);
        })
    });

    function getData(page) {
        let formData = $('#formFilter').serialize();

        $.ajax({
            url: `promo-or-event/data?page=` + page,
            method: 'GET',
            data: formData,
            beforeSend: function(e) {
                $('#overlay').css("display", "block");
            },
            success: function(data) {
                $('#overlay').css("display", "none");
                $('#data').html(data);
            },
            error: function(error) {
                $('#overlay').css("display", "none");
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Something went wrong',
                    confirmButtonText: 'Close'
                })
            }
        })
    }

    function searchData() {
        let formData = $('#formFilter').serialize();

        $.ajax({
            url: `promo-or-event/data`,
            method: 'GET',
            data: formData,
            beforeSend: function(e) {
                $('#overlay').css("display", "block");
            },
            success: function(data) {
                $('#overlay').css("display", "none");
                $('#data').html(data)
            },
            error: function(error) {
                $('#overlay').css("display", "none");
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Something went wrong',
                    confirmButtonText: 'Close'
                })
            }
        })
    }

    function deleteData(id) {
        var url = `promo-or-event/delete/` + id;
        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `${url}`,
                        method: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        beforeSend: function(e) {
                            $('#overlay').css("display", "block");
                        },
                        success: function(res, data) {
                            $('#overlay').css("display", "none");
                            if (res.status == true) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your data has been deleted.',
                                    'success'
                                )
                                searchData();
                            } else {
                                console.log(res);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: res.error,
                                    confirmButtonText: 'Close'
                                })
                            }
                        },
                        error: function(error) {
                            $('#overlay').css("display", "none");
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Something went wrong',
                                confirmButtonText: 'Close'
                            })
                        }
                    })
                }
            });
    }
</script>
