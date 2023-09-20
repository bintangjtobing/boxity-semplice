<div class="col-md">
    <div id="input-box-promo">
        <div class="data">
            <div class="row mb-3">
                <div class="col-md">
                    <label for="promo_name">Nama promo/event</label>
                    <input type="text" class="form-control" id="promo_name" name="promo_name[]"
                        placeholder="Promo Special Akhir Tahun">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md">
                    <label for="promo_sub_title">Sub Judul promo/event</label>
                    <input type="text" class="form-control" id="promo_sub_title" name="promo_sub_title[]"
                        placeholder="Isi data email dan dapatkan diskon 30%">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md">
                    <label for="link_teks_button">Link teks tombol</label>
                    <input type="text" class="form-control" id="link_teks_button" name="link_teks_button[]"
                        placeholder="https://bisnis.com/event-apply">
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="btn btn-primary" style="width: 30%" id="addPromo">+ Tambahkan Promo / Event</a>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#addPromo").click(function() {
            var newRow = $("#input-box-promo .data").first().clone();
            newRow.find("input[name='promo_name[]']").val("");
            newRow.find("input[name='promo_sub_title[]']").val("");
            newRow.find("input[name='link_teks_button[]']").val("");
            $("#input-box-promo").append(newRow);
        });
    });
</script>
