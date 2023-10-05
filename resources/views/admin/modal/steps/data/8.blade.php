<div class="col-md">
    <div id="marketplace-input-box">
        <div class="data">
            <label for="marketplace_address" style="margin-left: 17%">Alamat Marketplace</label>
            <div class="row mb-3">
                <div class="col-md">
                    <div class="input-group-prepend mb-3">
                        <select class="custom-select" id="inputGroupSelect02" style="width: 200px;"
                            name="marketplace_name[]" required>
                            @foreach ($marketplace_types as $mt)
                                <option value="{{ $mt->id }}">{{ $mt->name }}</option>
                            @endforeach
                        </select>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="jhondoe"
                                name="marketplace_address[]" id="marketplace_address" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md">
            <a href="javascript:void(0)" class="btn btn-primary" style="width: 30%" id="addMarketplace">+ Tambahkan
                marketplace</a>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#addMarketplace").click(function() {
            var newRow = $("#marketplace-input-box .data").first().clone();
            newRow.find("select[name='marketplace_name[Instagram]']").val("");
            newRow.find("input[name='marketplace_address[]']").val("");
            $("#marketplace-input-box").append(newRow);
        });
    });
</script>
