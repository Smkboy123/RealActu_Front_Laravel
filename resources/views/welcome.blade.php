@extends('main')
@section('content')
<style>
    .trending-area {
    background-color: #f7f7f7;
    padding: 25px 0;
}

.slider-active {
    display: flex;
    overflow: hidden;
    position: relative;
}

.single-slider {
    position: relative;
    width: 100%;
}

.trend-top-img img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.trend-top-cap {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: #fff;
    z-index: 2;
}

.trend-top-cap h2 a {
    color: #fff;
    font-size: 24px;
    font-weight: 600;
    line-height: 1.2;
    text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.8);
}

.trend-top-cap p {
    margin-top: 10px;
    font-size: 14px;
    text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.8);
}

.category-label {
    background-color: #C80000;
    color: white;
    padding: 5px 10px;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
    display: inline-block;
    margin-bottom: 10px;
    border-radius: 0; 
}
.side-image {
    width: 100%;
    border-radius: 10px;
}

.trend-top-cap2 h2 a {
    font-size: 18px;
    font-weight: 600;
    color: #333;
}

.trend-top-cap2 span {
    color: #fff;
    background: #1e90ff;
    padding: 3px 8px;
    font-size: 10px;
    text-transform: uppercase;
}

</style>

<div class="trending-area fix pt-25 gray-bg">
    <div class="container">
        <div class="trending-main">
            <div class="row">
                <!-- Section principale du slider -->
                <div class="col-lg-8">
                    <div class="slider-active">
                        @if ($single_articles)
                            @foreach ($single_articles as $article)
                                <div class="single-slider">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img">
                                            <img src="{{ asset('storage/' . $article->image) }}" alt="" class="slider-image">
                                            <div class="trend-top-cap">
                                                <span class="category-label">{{ $article->category->nom }}</span>
                                                <h2><a href="{{ route('articles.details', $article->id) }}">{{ $article->titre }}</a></h2>
                                                <p>{{ $article->auteur }} - {{ $article->created_at->translatedFormat('F d, Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- Section des articles de sport -->
                <div class="col-lg-4">
                    @php
                        $sportArticles = \App\Models\Article::whereHas('category', function ($query) {
                            $query->where('nom', 'Sport');
                        })->latest()->take(2)->get();
                    @endphp

                    @foreach ($sportArticles as $article)
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="{{ asset('storage/' . $article->image) }}" alt="" class="side-image">
                                <div class="trend-top-cap trend-top-cap2">
                                    <span class="category-label">{{ $article->category->nom }}</span>
                                    <h2><a href="{{ route('articles.details', $article->id) }}">{{ $article->titre }}</a></h2>
                                    <p>par {{ $article->auteur }} - {{ $article->created_at->translatedFormat('F d, Y') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



<!-- AMMEERKJEKFHJF ICI -->






<!-- Whats New End -->

<!-- <section class="whats-news-area pt-50 pb-20 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="whats-news-wrapper">
                    <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h3>What's New</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($categories as $category)
                        <div class="col-12">
                            <div class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12">
                                        @if ($category->articles->count() > 0)
                                        @php
                                        $mainArticle = $category->articles->first();
                                        @endphp
                                        <div class="whats-news-single mb-40">
                                            <div class="whates-img">
                                                <img src="{{ asset('storage/' . $mainArticle->image) }}" alt="">
                                            </div>
                                            <div class="whates-caption">
                                                <h4><a href="{{ route('articles.details', $mainArticle->id) }}">{{ $mainArticle->titre }}</a></h4>
                                                <span>by {{ $mainArticle->auteur }} - {{ $mainArticle->created_at->translatedFormat('F d, Y') }}</span>
                                                <p>{{ Str::limit($mainArticle->contenu, 100) }}</p>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-xl-6 col-lg-12">
                                        <div class="row">
                                            @foreach ($category->articles->skip(1)->take(4) as $article)
                                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                <div class="whats-right-single mb-20">
                                                    <div class="whats-right-img">
                                                        <img src="{{ asset('storage/' . $article->image) }}" alt="">
                                                    </div>
                                                    <div class="whats-right-cap">
                                                        <span class="colorb">{{ $category->nom }}</span>
                                                        <h4><a href="{{ route('articles.details', $article->id) }}">{{ Str::limit($article->titre, 50) }}</a></h4>
                                                        <p>{{ $article->created_at->translatedFormat('F d, Y') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                         @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 -->


<!--   Weekly2-News start -->

<!--  Recent Articles start -->
<div class="recent-articles pt-80 pb-80">
    <div class="container">
        <div class="recent-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Trending News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">
                        <!-- Single -->
                        <div class="single-recent">
                            <div class="what-img">
                                <img src="assets/img/gallery/tranding1.png" alt="">
                            </div>
                            <div class="what-cap">
                                <h4><a href="#">
                                        <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                ations</a></h4>
                                    </a></h4>
                                <P>Jun 19, 2020</P>
                                <a class="popup-video btn-icon"
                                    href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                        class="flaticon-play-button"></span></a>

                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-recent">
                            <div class="what-img">
                                <img src="assets/img/gallery/tranding2.png" alt="">
                            </div>
                            <div class="what-cap">
                                <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                <P>Jun 19, 2020</P>
                                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                        class="flaticon-play-button"></span></a>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-recent">
                            <div class="what-img">
                                <img src="assets/img/gallery/tranding1.png" alt="">
                            </div>
                            <div class="what-cap">
                                <h4><a href="latest_news.html">
                                        <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                ations</a></h4>
                                    </a></h4>
                                <P>Jun 19, 2020</P>
                                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                        class="flaticon-play-button"></span></a>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-recent">
                            <div class="what-img">
                                <img src="assets/img/gallery/tranding2.png" alt="">
                            </div>
                            <div class="what-cap">
                                <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin ations</a></h4>
                                <P>Jun 19, 2020</P>
                                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                        class="flaticon-play-button"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Recent Articles End -->

<!--   Weekly3-News start -->
<div class="weekly3-news-area pt-80 pb-130">
    <div class="container">
        <div class="weekly3-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly3-news-active dot-style d-flex">
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="assets/img/gallery/weekly2News1.png" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                    ations</a></h4>
                                            <p>19 Jan 2020</p>
                                        </div>
                                    </div>
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="assets/img/gallery/weekly2News2.png" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                    ations</a></h4>
                                            <p>19 Jan 2020</p>
                                        </div>
                                    </div>
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="assets/img/gallery/weekly2News3.png" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                    ations</a></h4>
                                            <p>19 Jan 2020</p>
                                        </div>
                                    </div>
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="assets/img/gallery/weekly2News4.png" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                    ations</a></h4>
                                            <p>19 Jan 2020</p>
                                        </div>
                                    </div>
                                    <div class="weekly3-single">
                                        <div class="weekly3-img">
                                            <img src="assets/img/gallery/weekly2News2.png" alt="">
                                        </div>
                                        <div class="weekly3-caption">
                                            <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nomin
                                                    ations</a></h4>
                                            <p>19 Jan 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Weekly-News -->
</main>
@endsection