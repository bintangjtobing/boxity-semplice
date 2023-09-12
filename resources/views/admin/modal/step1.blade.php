<div class="modal fade" id="step1Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="step1ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="step1ModalLabel">Fill Your Business Data</h5>
            </div>
            <div class="modal-body">
                <div class="atbd-steps-wrap">
                    <div class="atbd-steps">
                        <ul class="nav">
                            <li class="atbd-steps__item active">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">1</span></span>
                                    <span class="atbd-steps__text">Url</span>
                                </div>
                            </li>
                            <li class="atbd-steps__item">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">2</span></span>
                                    <span class="atbd-steps__text">Owner</span>
                                </div>
                            </li>
                            <li class="atbd-steps__item">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">3</span></span>
                                    <span class="atbd-steps__text">Data</span>
                                </div>
                            </li>
                            <li class="atbd-steps__item">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">4</span></span>
                                    <span class="atbd-steps__text">Location</span>
                                </div>
                            </li>
                            <li class="atbd-steps__item">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">5</span></span>
                                    <span class="atbd-steps__text">Testimoni</span>
                                </div>
                            </li>
                            <li class="atbd-steps__item">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">6</span></span>
                                    <span class="atbd-steps__text">Product</span>
                                </div>
                            </li>
                        </ul>
                        <div class="container my-3">
                            <div class="row" id="steps-1">
                                <div class="col-md">
                                    <label for="url">URL Business</label>
                                    <input type="text" class="form-control" id="url" name="business_url">
                                </div>
                            </div>
                            <div class="row" id="steps-2">
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="owner_about">About</label>
                                            <textarea name="owner_about" id="owner_about" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="file_photo">Photo</label>
                                            <input type="file" name="file_photo" id="file_photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="steps-3">
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="business_about">About</label>
                                            <textarea name="business_about" id="business_about" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="is_shown"
                                                    id="show" value="1" checked>
                                                <label class="form-check-label" for="show">
                                                    Tampilkan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="is_shown"
                                                    id="hide" value="0">
                                                <label class="form-check-label" for="hide">
                                                    Sembunyikan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="file_company_profile">Company Profile (Optional)</label>
                                            <input type="file" name="file_company_profile"
                                                id="file_company_profile">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="steps-4">
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="location">Location</label>
                                            <input type="text" class="form-control" id="location"
                                                name="location">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="link_google">Link</label>
                                            <input type="text" class="form-control" id="link_google"
                                                name="link_google">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="steps-5">
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="testimoni_title">Judul Testimoni</label>
                                            <input type="text" class="form-control" id="testimoni_title"
                                                name="testimoni_title">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="testimony_description">Deskripsi Testimoni</label>
                                            <textarea name="testimony_description" id="testimony_description" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="file_cover">Gambar Sampul/Bisnis</label>
                                            <input type="file" name="file_cover" id="file_cover">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="steps-6">
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="product_title">Judul Produk</label>
                                            <input type="text" class="form-control" id="product_title"
                                                name="product_title">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="product_description">Deskripsi Produk</label>
                                            <textarea name="product_description" id="product_description" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="file_product">Gambar Produk</label>
                                            <input type="file" name="file_product" id="file_product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btnBack">Back</button>
                <button type="button" class="btn btn-primary" id="btnNext">Next</button>
            </div>
        </div>
    </div>
</div>
