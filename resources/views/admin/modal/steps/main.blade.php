<div class="modal fade" id="step1Modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="step1ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="atbd-steps-wrap">
                    <div class="atbd-steps">
                        <div class="container d-flex justify-content-between">
                            <div>
                                <h5 class="modal-title" id="step1ModalLabel">Informasi Bisni</h5>
                            </div>
                            <div class="d-flex flex-column">
                                <div id="titleModal">
                                    Profil Singkat - Owner
                                </div>
                                <div class="ml-auto">
                                    Page <span id="titlePage">1</span> of 9
                                </div>
                            </div>
                        </div>
                        <div class="container mt-4">
                            <div class="row" id="steps-1">
                                @include('admin.modal.steps.data.1')
                            </div>
                            <div class="row" id="steps-2">
                                @include('admin.modal.steps.data.2')
                            </div>
                            <div class="row" id="steps-3">
                                @include('admin.modal.steps.data.3')
                            </div>
                            <div class="row" id="steps-4">
                                @include('admin.modal.steps.data.4')
                            </div>
                            <div class="row" id="steps-5">
                                @include('admin.modal.steps.data.5')
                            </div>
                            <div class="row" id="steps-6">
                                @include('admin.modal.steps.data.6')
                            </div>
                            <div class="row" id="steps-7">
                                @include('admin.modal.steps.data.7')
                            </div>
                            <div class="row" id="steps-8">
                                @include('admin.modal.steps.data.8')
                            </div>
                            <div class="row" id="steps-9">
                                @include('admin.modal.steps.data.9')
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
