<div class="col-md">
    <div class="row">
        <div class="col-md mb-3 text-center">
            <span class="count_testimoni">0</span> of 3
        </div>
    </div>
    <div class="row">
        <div class="col-md text-center">
            <span class="text-danger" id="testimoni-error-data"></span>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md">
            <label for="show_on_theme_client">Tampilkan pada tema?</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="show_on_theme_client" value="1">
                <label class="custom-control-label" for="show_on_theme_client">On</label>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md">
            <label for="name_client">Nama Client / Customer</label>
            <input type="text" class="form-control" id="name_client" name="name_client">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md">
            <textarea name="testimoni_description" id="testimoni_description" class="form-control" cols="30" rows="10"
                placeholder="Pesan testimoni"></textarea>
        </div>
    </div>
    <div id="testimoni">

    </div>
    <div class="row mb-3">
        <div class="col-md">
            <a href="javascript:void(0)" class="btn btn-primary" style="width: 100%" onclick="addTestimoni()">Simpan &
                Tambah Testimoni</a>
        </div>
    </div>
</div>
<script>
    function addTestimoni() {
        var client_show = $('#show_on_theme_client').is(':checked') ? 1 : 0;
        var name_client = $('#name_client').val();
        var client_message = $('#testimoni_description').val();

        if (name_client == "") {
            showSingleError("name_client", "Nama Client / Customer Tidak Boleh Kosong");
            return false;
        }
        if (client_message == "") {
            showSingleError("testimoni_description", "Pesan Testimoni Tidak Boleh Kosong");
            return false;
        }

        if (name_client != "" && client_message != "") {
            $('#testimoni-error-data').html("");
            var currentCount = parseInt($('.count_testimoni').text());
            if (currentCount == 3) {
                $('#testimoni-error-data').html("Tidak Bisa Menambahkan testimoni lagi");
                return false;
            }
            $('.count_testimoni').text(currentCount + 1);

            // Buat elemen input baru dan tambahkan ke dalam "testimoni"
            var newInputShow = $('<input>').attr({
                type: 'hidden',
                name: 'client_testimoni_show[]',
                id: 'client_testimoni_show'
            }).val(client_show);

            var newInputName = $('<input>').attr({
                type: 'hidden',
                name: 'client_name[]',
                id: 'client_name'
            }).val(name_client);

            var newInputTestimoni = $('<input>').attr({
                type: 'hidden',
                name: 'client_testimoni[]',
                id: 'client_testimoni'
            }).val(client_message);

            $('#testimoni').append(newInputShow);
            $('#testimoni').append(newInputName);
            $('#testimoni').append(newInputTestimoni);

            // Clear nilai input
            $('#name_client').val('');
            $('#testimoni_description').val('');
        }

        console.log(client_show);
        console.log(name_client);
        console.log(client_message);
    }
</script>
