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
                        <div class="container mt-4">
                            <div class="row" id="steps-1">
                                @include('admin.modal.step1.data.1')
                            </div>
                            <div class="row" id="steps-2">
                                @include('admin.modal.step1.data.2')
                            </div>
                            <div class="row" id="steps-3">
                                @include('admin.modal.step1.data.3')
                            </div>
                            <div class="row" id="steps-4">
                                @include('admin.modal.step1.data.4')
                            </div>
                            <div class="row" id="steps-5">
                                @include('admin.modal.step1.data.5')
                            </div>
                            <div class="row" id="steps-6">
                                @include('admin.modal.step1.data.6')
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
