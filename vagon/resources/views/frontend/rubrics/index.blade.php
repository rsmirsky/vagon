@section('meta_title', app('MetaTags')->getMetaTag('meta-tags::meta.frontend-rubric-index.title', $meta_tags))
@section('meta_description', app('MetaTags')->getMetaTag('meta-tags::meta.frontend-rubric-index.description', $meta_tags))
@section('meta_keywords', app('MetaTags')->getMetaTag('meta-tags::meta.frontend-rubric-index.keywords', $meta_tags))
@extends('frontend')
@section('content')
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! Breadcrumbs::render('frontend.rubric.index', $rubric) !!}
                    <div class="white-bg">
                        <h2 class="category__title">{{ $rubric->title }}</h2>
{{--                        СТАРЫЙ КОД--}}
                        @foreach($rubric->groups as $group)
                            <div class="category__block">
                                <h3 class="category__block-title">
                                    <span>{{ $group->title }}</span>
                                </h3>
                                <div class="category__block-items">
                                    @foreach($group->categories as $category)
                                        <a href="{{ $activeCar && $category->type == 'tecdoc' ? $activeCar->path . '-' . $category->slug : route('frontend.product-categories.show', $category->slug) }}" class="category__block-item">
                                            <img src="{{ asset($category->image) }}" alt="list">
                                            <span>{{ $category->category_title }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

{{--                        @foreach($groups as $group)--}}
{{--                            <div class="category__block">--}}
{{--                                <h3 class="category__block-title">--}}
{{--                                    <span>{{ $group['title'] }}</span>--}}
{{--                                </h3>--}}
{{--                                <div class="category__block-items">--}}
{{--                                    @foreach($group['categories'] as $category)--}}
{{--                                        <a href="{{ $activeCar && $category->type == 'tecdoc' ? $activeCar->path . '-' . $category['slug'] : route('frontend.product-categories.show', $category['slug']) }}" class="category__block-item">--}}
{{--                                            <img src="{{ asset($category['image']) }}" alt="list">--}}
{{--                                            <span>{{ $category['title'] }}</span>--}}
{{--                                        </a>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
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
                                                        <img src="{{ asset('img/frontend/img/sun.png') }}" alt="sun">
                                                        Летние
                                                    </a>
                                                </li>
                                                <li class="season">
                                                    <a href="#" class="d-flex align-items-center">
                                                        <img src="{{ asset('img/frontend/img/snow.png') }}" alt="snow">
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
    </section>
    <section class="last-goods">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if($viewedProducts)
                        <h2 class="default-title">
                            последние просмотренные товары
                        </h2>
                        @include('partfix\viewed-products::viewed-products', ['viewedProducts' => $viewedProducts])
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="manufacturers">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $rubric->description !!}
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
@endsection
