$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

function HitData(url, data = null, type = "GET", ...args) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: url,
            type: type,
            data: data,
            ...args,
            success: function(response) {
                resolve(response);
            },
            error: function(error) {
                reject(error);
            },
        });
    });
}

function loadingSkeleton() {
    return `<div class="loading"></div>`;
}

function renderCarousel(carousel, key) {
    return `
        <li id="carousel__slide${++key}" tabindex="0" class="carousel__slide h-100 w-100 img-fluid">
            <img src="${carousel.media}" alt="${carousel.title}">
            <div class="carousel__snapper"></div>
        </li>
    `;
}

function renderNews(news) {
    const {
        title,
        media,
        content_preview,
        slug_title
    } = news;
    return `
        <div class="berita-terbaru">
            <div class="content-berita">
                <div class="container-berita">
                    <img src="${assetsUrl + '/' + media}" alt="${title}">
                    <div class="tanggal-berita">
                        1 januari 2022
                    </div>
                    <div class="content-berita-text">
                        <p id="content-berita-text">${content_preview}</p>
                    </div>
                    <a class="text-decoration-none" id="content-berita-btn" href="/berita/${slug_title}">Baca</a>
                </div>
            </div>
        </div>
    `;
}

async function getSliders() {
    $(".loading-content").html(loadingSkeleton());
    const carousels = await HitData("/api/sliders");
    carousels.map((carousel, i) => {
        $("#carousel-data").append(renderCarousel(carousel, i));
    });
    $(".loading-content").html("");
}

async function getVisitor() {
    const visitors = await HitData("/api/visitors");
    const {
        today,
        total
    } = visitors;
    $("#visitor-today").html(today);
    $("#visitor-total").html(total);
}

async function getNews() {
    const newsData = await HitData('/api/news');
    if (newsData.length > 0) {
        newsData.map(news => {
            $('#news-data').append(renderNews(news));
        })
    } else {
        $('#news-wrapper').hide();
    }
}

function callAllFuncs() {
    getSliders();
    getVisitor();
    getNews();
}

$(document).ready(() => {
   callAllFuncs() 
});