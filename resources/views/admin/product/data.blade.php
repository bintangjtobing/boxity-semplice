@if (count($datas) == 0)
    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
        <div class="card product product--grid">
            <div class="h-100">
                <div class="product-item">
                    <div class="product-item__image text-center p-4">
                        <div class="text-center d-flex align-items-center justify-content-center">
                            <img src="{{ asset('svg/empty-data.svg') }}" width="150px" alt="Empty">
                        </div>
                        <h3 class="mt-3 mx-3">No Data</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@foreach ($datas as $item)
    <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
        <div class="card product product--grid">
            <div class="h-100">
                <div class="product-item">
                    <div class="product-item__image">
                        {{-- <span class="like-icon">
                            <button type="button" class="content-center">
                                <i class="lar la-heart icon"></i>
                            </button>
                        </span> --}}
                        {{-- <a href="#"> --}}
                        @php
                            $photo = $item->productImages->first()->photo;
                        @endphp
                        <img class="card-img-top img-fluid" src="{{ asset($photo) }}" alt="digital-chair">
                        {{-- </a> --}}
                    </div>
                    <div class="card-body px-20 pb-25 pt-20">
                        <div class="product-item__body text-capitalize">
                            <a href="product-details.html">
                                <h6 class="card-title">{{ $item->name }}</h6>
                            </a>
                            <div class="d-flex align-items-center mb-10 flex-wrap">
                                {{-- <span class="product-desc-price">$200.00</span>
                                <span class="product-price">$100.00</span>
                                <span class="product-discount">50% Off</span> --}}
                                <span>
                                    {{ substr($item->description, 0, 20) }}
                                </span>
                            </div>
                        </div>
                        {{-- <div class="product-item__footer">
                            <div class="stars-rating d-flex align-items-center flex-wrap">
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star active"></span>
                                <span class="star-icon las la-star-half-alt active"></span>
                                <span class="stars-rating__point">4.9</span>
                                <span class="stars-rating__review">
                                    <span>778</span> Reviews</span>
                            </div>
                        </div> --}}
                        <div class="product-item__button d-flex mt-20 flex-wrap">
                            <button class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                    data-feather="shopping-bag" onclick="deleteData('{{ $item->id }}')"></span>
                                Delete
                            </button>
                            <button class="btn btn-primary btn-default btn-squared border-0"
                                onclick="editProduct('{{ $item->id }}')">Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
