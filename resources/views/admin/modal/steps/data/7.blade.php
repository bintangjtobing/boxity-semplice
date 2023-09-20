<div class="col-md">
    <div id="input-box">
        <div class="data">
            <label for="username" style="margin-left: 17%">Nama Pengguna</label>
            <div class="row mb-3">
                <div class="col-md">
                    <div class="input-group-prepend mb-3">
                        <select class="custom-select" id="inputGroupSelect02" style="width: 200px;" name="situs_name[]">
                            <option value="Instragram" selected>Instagram</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Tiktok">Tiktok</option>
                            <option value="Youtube">Youtube</option>
                            <option value="Situs Website">Situs Website</option>
                        </select>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="jhondoe" id="username"
                                name="username[]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="btn btn-primary" style="width: 30%" id="addRow">+ Tambahkan tautan sosial</a>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#addRow").click(function() {
            var newRow = $("#input-box .data").first().clone();
            newRow.find("select[name='situs_name[Instagram]']").val("");
            newRow.find("input[name='username[]']").val("");
            $("#input-box").append(newRow);
        });
    });
</script>
