@section('meta_title', app('MetaTags')->getMetaTag('meta-tags::meta.frontend-product-categories-show.title', $meta_tags))
@section('meta_description', app('MetaTags')->getMetaTag('meta-tags::meta.frontend-product-categories-show.description', $meta_tags))
@section('meta_keywords', app('MetaTags')->getMetaTag('meta-tags::meta.frontend-product-categories-show.keywords', $meta_tags))
@extends('frontend')
@section('content')
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! Breadcrumbs::render('frontend.product-categories.show', $category) !!}

                    <div class="white-bg">
                        <h2 class="category__title">{{ $category->category_title }}</h2>
                        @if($category->children->count())
                            @if($category->type == 'tecdoc')
                                @foreach($category->children as $child)
                                    <div class="category__block">
                                        <h3 class="category__block-title">
                                            <span>{{ $child->category_title }}</span>
                                        </h3>
                                        <div class="category__block-items">
                                            @foreach($child->children as $item)
                                                <a href="{{ route('frontend.product-categories.show', $item->slug) }}" class="category__block-item"><img src="{{ file_exists($item->image) ? asset($item->image) : asset('img/frontend/img/images-empty.png') }}" alt="list"><span>{{ $item->category_title }}</span></a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="category__block">
                                    <h3 class="category__block-title">
                                        <span>{{ $category->category_title }}</span>
                                    </h3>
                                    <div class="category__block-items">
                                        @foreach($category->children as $item)
                                            <a href="{{ route('frontend.product-categories.show', $item->slug) }}" class="category__block-item"><img src="{{ file_exists($item->image) ? asset($item->image) : asset('img/frontend/img/images-empty.png') }}" alt="list"><span>{{ $item->category_title }}</span></a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endif
                        <div class="category__block">
                            <h3 class="category__block-title">
                                <span>Шины и диски</span>
                            </h3>
                            <span class="category__block-subtitle">
								Volkswagen Transporter
							</span>
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="category__block-half flex-column flex-sm-row">
                                    <div class="d-flex flex-column mr70">
                                        <div class="d-flex flex-column">
                                            <h3>Сезон шины</h3>
                                            <ul class="d-flex align-items-center">
                                                <li class="season">
                                                    <a href="#" class="d-flex align-items-center">
                                                        <img src="/img/frontend/img/sun.png" alt="sun">
                                                        Летние
                                                    </a>
                                                </li>
                                                <li class="season">
                                                    <a href="#" class="d-flex align-items-center">
                                                        <img src="/img/frontend/img/snow.png" alt="snow">
                                                        Зимние
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h3>Размеры шин</h3>
                                            <ul>
                                                <li>
                                                    <a href="#">R16 205/55</a>
                                                </li>
                                                <li>
                                                    <a href="#">R17 205/55</a>
                                                </li>
                                                <li>
                                                    <a href="#">R17 205/60</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mr70">
                                        <h3>Производители шин</h3>
                                        <div class="d-flex">
                                            <ul class="mr50">
                                                <li>
                                                    <a href="#">Barum</a>
                                                </li>
                                                <li>
                                                    <a href="#">BFGoodrich</a>
                                                </li>
                                                <li>
                                                    <a href="#">Continental</a>
                                                </li>
                                                <li>
                                                    <a href="#">Cordiant</a>
                                                </li>
                                                <li>
                                                    <a href="#">Debica</a>
                                                </li>
                                                <li>
                                                    <a href="#">Dunlop</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fulda</a>
                                                </li>
                                                <li>
                                                    <a href="#">Uniroyal</a>
                                                </li>
                                                <li>
                                                    <a href="#">Maxxis</a>
                                                </li>
                                                <li>
                                                    <a href="#">Gislaved</a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <a href="#">Barum</a>
                                                </li>
                                                <li>
                                                    <a href="#">BFGoodrich</a>
                                                </li>
                                                <li>
                                                    <a href="#">Continental</a>
                                                </li>
                                                <li>
                                                    <a href="#">Cordiant</a>
                                                </li>
                                                <li>
                                                    <a href="#">Debica</a>
                                                </li>
                                                <li>
                                                    <a href="#">Dunlop</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fulda</a>
                                                </li>
                                                <li>
                                                    <a href="#">Uniroyal</a>
                                                </li>
                                                <li>
                                                    <a href="#">Maxxis</a>
                                                </li>
                                                <li>
                                                    <a href="#">Gislaved</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="category__block-half flex-column flex-sm-row">
                                    <div class="d-flex flex-column mr70">
                                        <h3>Размеры дисков</h3>
                                        <ul>
                                            <li><a href="#">7.5/R16 ET42</a></li>
                                            <li><a href="#">7/R16 ET46</a></li>
                                            <li><a href="#">7.5/R17 ET45</a></li>
                                            <li><a href="#">8/R18 ET26</a></li>
                                            <li><a href="#">8/R18 ET47</a></li>
                                            <li><a href="#">8/R19 ET39</a></li>
                                        </ul>
                                    </div>
                                    <div class="d-flex flex-column mr70">
                                        <h3>Производители дисков</h3>
                                        <div class="d-flex">
                                            <ul class="mr50">
                                                <li>
                                                    <a href="#">Barum</a>
                                                </li>
                                                <li>
                                                    <a href="#">BFGoodrich</a>
                                                </li>
                                                <li>
                                                    <a href="#">Continental</a>
                                                </li>
                                                <li>
                                                    <a href="#">Cordiant</a>
                                                </li>
                                                <li>
                                                    <a href="#">Debica</a>
                                                </li>
                                                <li>
                                                    <a href="#">Dunlop</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fulda</a>
                                                </li>
                                                <li>
                                                    <a href="#">Uniroyal</a>
                                                </li>
                                                <li>
                                                    <a href="#">Maxxis</a>
                                                </li>
                                                <li>
                                                    <a href="#">Gislaved</a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <a href="#">Barum</a>
                                                </li>
                                                <li>
                                                    <a href="#">BFGoodrich</a>
                                                </li>
                                                <li>
                                                    <a href="#">Continental</a>
                                                </li>
                                                <li>
                                                    <a href="#">Cordiant</a>
                                                </li>
                                                <li>
                                                    <a href="#">Debica</a>
                                                </li>
                                                <li>
                                                    <a href="#">Dunlop</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fulda</a>
                                                </li>
                                                <li>
                                                    <a href="#">Uniroyal</a>
                                                </li>
                                                <li>
                                                    <a href="#">Maxxis</a>
                                                </li>
                                                <li>
                                                    <a href="#">Gislaved</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="last-goods">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="default-title">
                        последние просмотренные товары
                    </h2>
                    <div class="last-goods__slider">
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good1.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span>В наличии</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good2.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span>В наличии</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good3.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span class="awaiting">Под заказ</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good4.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span class="not-aval">Нет на складе</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good5.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span>В наличии</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good1.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span>В наличии</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good2.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span>В наличии</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good3.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span class="awaiting">Под заказ</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good4.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span class="not-aval">Нет на складе</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good5.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span>В наличии</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good1.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span>В наличии</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good2.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span>В наличии</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good3.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span class="awaiting">Под заказ</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good4.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span class="not-aval">Нет на складе</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                        <div class="last-goods__slide">
                            <a href="#"><img src="/img/frontend/img/last-good5.png" alt="last-good" class="last-goods__image"></a>
                            <div class="d-flex flex-column"><a href="#"><span class="last-goods__title">Hyundai/Kia</span></a><a href="#"><span class="last-goods__type">Фильтр масляный</span></a></div>
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="last-goods__price">122 грн</span>
                                    <div class="d-flex align-items-center last-goods__available">
                                        <img src="/img/frontend/img/svg/delivery-truck-green.svg" alt="truck">
                                        <span>В наличии</span>
                                    </div>
                                </div>
                                <button class="last-goods__buy">Купить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="manufacturers">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $category->description !!}
                </div>
            </div>
        </div>
    </section>
    @include('frontend.partials._advatages')
@endsection
