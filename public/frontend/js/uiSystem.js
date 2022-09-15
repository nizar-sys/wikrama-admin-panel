const discover_wikrama = $("#section-header-below-discovery");
const major = $("#section-header-below-major-competency");
const anakDiscovery = $(".anak-discovery");
const anakMajor = $(".anak-major");
const education_process = $("#section-header-below-education");
const anakEducation = $(".anak-education");
const cultures = $("#section-header-below-cultures");
const anakCultures = $(".anak-cultures");
const campus = $("#section-header-below-campus");
const anakCampus = $(".anak-campus");
const bkk = $("#section-header-below-bkk");
const anakBkk = $(".anak-bkk");
const berita = $("#section-header-below-berita");
const anakBerita = $(".anak-berita");
const home = $("#section-header-below-home");

$(document).ready(() => {
    // discover
    discover_wikrama.hover(() => {
        anakDiscovery.addClass("active-dropdown");
        discover_wikrama.addClass("active-head-menu");
    });
    anakDiscovery.on("mouseleave", () => {
        anakDiscovery.removeClass("active-dropdown");
        discover_wikrama.removeClass("active-head-menu");
    });

    // major
    major.on("mouseenter", () => {
        anakMajor.addClass("active-dropdown");
        major.addClass("active-head-menu");
    });
    anakMajor.on("mouseleave", () => {
        anakMajor.removeClass("active-dropdown");
        major.removeClass("active-head-menu");
    });

    // education_process
    education_process.on("mouseenter", () => {
        anakEducation.addClass("active-dropdown");
        education_process.addClass("active-head-menu");
    });
    anakEducation.on("mouseleave", () => {
        anakEducation.removeClass("active-dropdown");
        education_process.removeClass("active-head-menu");
    });

    // cultures
    cultures.on("mouseenter", () => {
        anakCultures.addClass("active-dropdown");
        cultures.addClass("active-head-menu");
    });
    anakCultures.on("mouseleave", () => {
        anakCultures.removeClass("active-dropdown");
        cultures.removeClass("active-head-menu");
    });

    // campus
    campus.on("mouseenter", () => {
        anakCampus.addClass("active-dropdown");
        campus.addClass("active-head-menu");
    });
    anakCampus.on("mouseleave", () => {
        anakCampus.removeClass("active-dropdown");
        campus.removeClass("active-head-menu");
    });

    // bkk
    bkk.on("mouseenter", () => {
        anakBkk.addClass("active-dropdown");
        bkk.addClass("active-head-menu");
    });
    anakBkk.on("mouseleave", () => {
        anakBkk.removeClass("active-dropdown");
        bkk.removeClass("active-head-menu");
    });

    // berita
    berita.on("mouseenter", () => {
        anakBerita.addClass("active-dropdown");
        berita.addClass("active-head-menu");
    });
    anakBerita.on("mouseleave", () => {
        anakBerita.removeClass("active-dropdown");
        berita.removeClass("active-head-menu");
    });

    // fix bug
    home.on("mouseenter", () => {
        anakBerita.removeClass("active-dropdown");
        berita.removeClass("active-head-menu");
        anakBkk.removeClass("active-dropdown");
        bkk.removeClass("active-head-menu");
        anakCampus.removeClass("active-dropdown");
        campus.removeClass("active-head-menu");
        anakCultures.removeClass("active-dropdown");
        cultures.removeClass("active-head-menu");
        anakEducation.removeClass("active-dropdown");
        education_process.removeClass("active-head-menu");
        anakMajor.removeClass("active-dropdown");
        major.removeClass("active-head-menu");
        anakDiscovery.removeClass("active-dropdown");
        discover_wikrama.removeClass("active-head-menu");
    });

    discover_wikrama.on("mouseenter", () => {
        anakBerita.removeClass("active-dropdown");
        berita.removeClass("active-head-menu");
        anakBkk.removeClass("active-dropdown");
        bkk.removeClass("active-head-menu");
        anakCampus.removeClass("active-dropdown");
        campus.removeClass("active-head-menu");
        anakCultures.removeClass("active-dropdown");
        cultures.removeClass("active-head-menu");
        anakEducation.removeClass("active-dropdown");
        education_process.removeClass("active-head-menu");
        anakMajor.removeClass("active-dropdown");
        major.removeClass("active-head-menu");
    });

    major.on("mouseenter", () => {
        anakBerita.removeClass("active-dropdown");
        berita.removeClass("active-head-menu");
        anakBkk.removeClass("active-dropdown");
        bkk.removeClass("active-head-menu");
        anakCampus.removeClass("active-dropdown");
        campus.removeClass("active-head-menu");
        anakCultures.removeClass("active-dropdown");
        cultures.removeClass("active-head-menu");
        anakEducation.removeClass("active-dropdown");
        education_process.removeClass("active-head-menu");
        anakDiscovery.removeClass("active-dropdown");
        discover_wikrama.removeClass("active-head-menu");
    });

    education_process.on("mouseenter", () => {
        anakBerita.removeClass("active-dropdown");
        berita.removeClass("active-head-menu");
        anakBkk.removeClass("active-dropdown");
        bkk.removeClass("active-head-menu");
        anakCampus.removeClass("active-dropdown");
        campus.removeClass("active-head-menu");
        anakCultures.removeClass("active-dropdown");
        cultures.removeClass("active-head-menu");
        anakMajor.removeClass("active-dropdown");
        major.removeClass("active-head-menu");
        anakDiscovery.removeClass("active-dropdown");
        discover_wikrama.removeClass("active-head-menu");
    });

    cultures.on("mouseenter", () => {
        anakBerita.removeClass("active-dropdown");
        berita.removeClass("active-head-menu");
        anakBkk.removeClass("active-dropdown");
        bkk.removeClass("active-head-menu");
        anakCampus.removeClass("active-dropdown");
        campus.removeClass("active-head-menu");
        anakEducation.removeClass("active-dropdown");
        education_process.removeClass("active-head-menu");
        anakMajor.removeClass("active-dropdown");
        major.removeClass("active-head-menu");
        anakDiscovery.removeClass("active-dropdown");
        discover_wikrama.removeClass("active-head-menu");
    });

    campus.on("mouseenter", () => {
        anakBerita.removeClass("active-dropdown");
        berita.removeClass("active-head-menu");
        anakBkk.removeClass("active-dropdown");
        bkk.removeClass("active-head-menu");
        anakCultures.removeClass("active-dropdown");
        cultures.removeClass("active-head-menu");
        anakEducation.removeClass("active-dropdown");
        education_process.removeClass("active-head-menu");
        anakMajor.removeClass("active-dropdown");
        major.removeClass("active-head-menu");
        anakDiscovery.removeClass("active-dropdown");
        discover_wikrama.removeClass("active-head-menu");
    });

    bkk.on("mouseenter", () => {
        anakBerita.removeClass("active-dropdown");
        berita.removeClass("active-head-menu");
        anakCampus.removeClass("active-dropdown");
        campus.removeClass("active-head-menu");
        anakCultures.removeClass("active-dropdown");
        cultures.removeClass("active-head-menu");
        anakEducation.removeClass("active-dropdown");
        education_process.removeClass("active-head-menu");
        anakMajor.removeClass("active-dropdown");
        major.removeClass("active-head-menu");
        anakDiscovery.removeClass("active-dropdown");
        discover_wikrama.removeClass("active-head-menu");
    });

    berita.on("mouseenter", () => {
        anakBkk.removeClass("active-dropdown");
        bkk.removeClass("active-head-menu");
        anakCampus.removeClass("active-dropdown");
        campus.removeClass("active-head-menu");
        anakCultures.removeClass("active-dropdown");
        cultures.removeClass("active-head-menu");
        anakEducation.removeClass("active-dropdown");
        education_process.removeClass("active-head-menu");
        anakMajor.removeClass("active-dropdown");
        major.removeClass("active-head-menu");
        anakDiscovery.removeClass("active-dropdown");
        discover_wikrama.removeClass("active-head-menu");
    });
});
