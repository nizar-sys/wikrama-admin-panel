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
            success: function (response) {
                resolve(response);
            },
            error: function (error) {
                reject(error);
            },
        });
    });
}

function loadingSkeleton() {
    return `<div class="loading"></div>`;
}

function renderChildMenu(parent_menu, posts) {
    var html = `
            <div class="child-dropdown child-menu-${parent_menu}" data-parent="${parent_menu}">
                <div class="semua-anak child-menus">
            `;

    posts.map((post) => {
        html += `
                    <a href="${
                        baseUrl + "/berita/" + post.slug_title
                    }" class="anak">
                        <h3>${post.title}</h3>
                        <p>${post.content_preview}</p>
                    </a> 
                `;
    });

    html += `</div>
            </div>`;

    return html;
}

function renderHeaderMenu(menu) {
    const { slug_title, title, child_posts } = menu;
    if (child_posts.length > 0) {
        $("#child-header-menus").append(
            renderChildMenu(slug_title, child_posts)
        );
    }
    return `<a href="${slug_title}" class="section-header-below menu-${slug_title}" data-has-child="${child_posts.length}" data-target="${slug_title}">${title}</a>`;
}

async function getHeaderMenu() {
    $(".loading-content").html(loadingSkeleton());
    const menus = await HitData("/api/pages");
    menus.map((menu) => {
        $("#header-menus").append(renderHeaderMenu(menu));
    });
    $(".loading-content").html("");

    $(`.section-header-below`).on("mouseenter", (e) => {
        var childDropdown = $(e.target).data("target");
        var hasChild = $(e.target).data("has-child") == 0 ? false : true;
        if (hasChild) {
            $(e.target).addClass("active-head-menu");
            $(`.child-menu-${childDropdown}`).addClass("active-dropdown");
        }
    });

    $(".child-menus").on("mouseleave", (e) => {
        var parentDropdown = $(e.target).parent().data("parent");
        $(e.target).parent().removeClass("active-dropdown");
        $(`.menu-${parentDropdown}`).removeClass("active-head-menu");
    });
}

$(document).ready(() => {
    getHeaderMenu();
});
