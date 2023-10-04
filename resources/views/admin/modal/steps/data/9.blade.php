<div class="col-md mb-3">
    <div class="accordion" id="accordionPromo">
        @for ($i = 1; $i <= 3; $i++)
            <div class="card">
                <div class="card-header" id="heading{{ $i }}">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#promo{{ $i }}" aria-expanded="true"
                            aria-controls="promo{{ $i }}" style="color: black; font-weight: bold;">
                            Promo / Event {{ $i }}
                        </button>
                    </h2>
                </div>

                <div id="promo{{ $i }}" class="collapse" aria-labelledby="heading{{ $i }}"
                    data-parent="#accordionPromo">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="promo_name_{{ $i }}">Nama promo/event</label>
                                <input type="text" class="form-control" id="promo_name_{{ $i }}"
                                    name="promo_name_{{ $i }}" placeholder="Promo Special Akhir Tahun">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="promo_sub_title_{{ $i }}">Sub Judul promo/event</label>
                                <input type="text" class="form-control" id="promo_sub_title_{{ $i }}"
                                    name="promo_sub_title_{{ $i }}"
                                    placeholder="Isi data email dan dapatkan diskon 30%">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md">
                                <label for="link_teks_button_{{ $i }}">Link teks tombol</label>
                                <input type="text" class="form-control" id="link_teks_button_{{ $i }}"
                                    name="link_teks_button_{{ $i }}"
                                    placeholder="https://bisnis.com/event-apply">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <button type="submit" class="btn btn-primary" style="width: 100%">Save</button>
</div>
