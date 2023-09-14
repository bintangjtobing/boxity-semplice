<div class="modal fade" id="step2Modal" data-backdrop="static" data-keyboard="false" tabindex="-2"
    aria-labelledby="step2ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="step2ModalLabel">Fill Your Business Data</h5>
            </div>
            <div class="modal-body">
                <div class="atbd-steps-wrap">
                    <div class="atbd-steps">
                        <ul class="nav">
                            <li class="atbd-steps__item active">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">7</span></span>
                                    <span class="atbd-steps__text">link</span>
                                </div>
                            </li>
                            <li class="atbd-steps__item">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">8</span></span>
                                    <span class="atbd-steps__text">Admin</span>
                                </div>
                            </li>
                            <li class="atbd-steps__item">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">9</span></span>
                                    <span class="atbd-steps__text">Sosmed</span>
                                </div>
                            </li>
                            <li class="atbd-steps__item">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">10</span></span>
                                    <span class="atbd-steps__text">Marketplace</span>
                                </div>
                            </li>
                            <li class="atbd-steps__item">
                                <div class="atbd-steps__line"></div>
                                <div class="atbd-steps__content">
                                    <span class="atbd-steps__icon"><span class="atbd-steps__count">11</span></span>
                                    <span class="atbd-steps__text">Link</span>
                                </div>
                            </li>
                        </ul>
                        <div class="container my-3">
                            <div class="row" id="steps-7">
                                @include('admin.modal.step2.data.7')
                            </div>
                            <div class="row" id="steps-8">
                                @include('admin.modal.step2.data.8')
                            </div>
                            <div class="row" id="steps-9">
                                @include('admin.modal.step2.data.9')
                            </div>
                            <div class="row" id="steps-10">
                                @include('admin.modal.step2.data.10')
                            </div>
                            <div class="row" id="steps-11">
                                @include('admin.modal.step2.data.11')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btnBack2">Back</button>
                <button type="button" class="btn btn-primary" id="btnNext2">Next</button>
            </div>
        </div>
    </div>
</div>
