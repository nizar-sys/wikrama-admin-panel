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
        anakDiscovery.addClass("active-discovery");
        discover_wikrama.addClass("active-head-discovery");
    });
    anakDiscovery.on("mouseleave", () => {
        anakDiscovery.removeClass("active-discovery");
        discover_wikrama.removeClass("active-head-discovery");
    });

    // major
    major.on("mouseenter", () => {
        anakMajor.addClass("active-major");
        major.addClass("active-head-major");
    });
    anakMajor.on("mouseleave", () => {
        anakMajor.removeClass("active-major");
        major.removeClass("active-head-major");
    });

    // education_process
    education_process.on("mouseenter", () => {
        anakEducation.addClass("active-education");
        education_process.addClass("active-head-education");
    });
    anakEducation.on("mouseleave", () => {
        anakEducation.removeClass("active-education");
        education_process.removeClass("active-head-education");
    });

    // cultures
    cultures.on("mouseenter", () => {
        anakCultures.addClass("active-cultures");
        cultures.addClass("active-head-cultures");
    });
    anakCultures.on("mouseleave", () => {
        anakCultures.removeClass("active-cultures");
        cultures.removeClass("active-head-cultures");
    });

    // campus
    campus.on("mouseenter", () => {
        anakCampus.addClass("active-campus");
        campus.addClass("active-head-campus");
    });
    anakCampus.on("mouseleave", () => {
        anakCampus.removeClass("active-campus");
        campus.removeClass("active-head-campus");
    });

    // bkk
    bkk.on("mouseenter", () => {
        anakBkk.addClass("active-bkk");
        bkk.addClass("active-head-bkk");
    });
    anakBkk.on("mouseleave", () => {
        anakBkk.removeClass("active-bkk");
        bkk.removeClass("active-head-bkk");
    });

    // berita
    berita.on("mouseenter", () => {
        anakBerita.addClass("active-berita");
        berita.addClass("active-head-berita");
    });
    anakBerita.on("mouseleave", () => {
        anakBerita.removeClass("active-berita");
        berita.removeClass("active-head-berita");
    });

    // fix bug
    home.on("mouseenter", () => {
        anakBerita.removeClass("active-berita");
        berita.removeClass("active-head-berita");
        anakBkk.removeClass("active-bkk");
        bkk.removeClass("active-head-bkk");
        anakCampus.removeClass("active-campus");
        campus.removeClass("active-head-campus");
        anakCultures.removeClass("active-cultures");
        cultures.removeClass("active-head-cultures");
        anakEducation.removeClass("active-education");
        education_process.removeClass("active-head-education");
        anakMajor.removeClass("active-major");
        major.removeClass("active-head-major");
        anakDiscovery.removeClass("active-discovery");
        discover_wikrama.removeClass("active-head-discovery");
    });

    discover_wikrama.on("mouseenter", () => {
        anakBerita.removeClass("active-berita");
        berita.removeClass("active-head-berita");
        anakBkk.removeClass("active-bkk");
        bkk.removeClass("active-head-bkk");
        anakCampus.removeClass("active-campus");
        campus.removeClass("active-head-campus");
        anakCultures.removeClass("active-cultures");
        cultures.removeClass("active-head-cultures");
        anakEducation.removeClass("active-education");
        education_process.removeClass("active-head-education");
        anakMajor.removeClass("active-major");
        major.removeClass("active-head-major");
    });

    major.on("mouseenter", () => {
        anakBerita.removeClass("active-berita");
        berita.removeClass("active-head-berita");
        anakBkk.removeClass("active-bkk");
        bkk.removeClass("active-head-bkk");
        anakCampus.removeClass("active-campus");
        campus.removeClass("active-head-campus");
        anakCultures.removeClass("active-cultures");
        cultures.removeClass("active-head-cultures");
        anakEducation.removeClass("active-education");
        education_process.removeClass("active-head-education");
        anakDiscovery.removeClass("active-discovery");
        discover_wikrama.removeClass("active-head-discovery");
    });

    education_process.on("mouseenter", () => {
        anakBerita.removeClass("active-berita");
        berita.removeClass("active-head-berita");
        anakBkk.removeClass("active-bkk");
        bkk.removeClass("active-head-bkk");
        anakCampus.removeClass("active-campus");
        campus.removeClass("active-head-campus");
        anakCultures.removeClass("active-cultures");
        cultures.removeClass("active-head-cultures");
        anakMajor.removeClass("active-major");
        major.removeClass("active-head-major");
        anakDiscovery.removeClass("active-discovery");
        discover_wikrama.removeClass("active-head-discovery");
    });

    cultures.on("mouseenter", () => {
        anakBerita.removeClass("active-berita");
        berita.removeClass("active-head-berita");
        anakBkk.removeClass("active-bkk");
        bkk.removeClass("active-head-bkk");
        anakCampus.removeClass("active-campus");
        campus.removeClass("active-head-campus");
        anakEducation.removeClass("active-education");
        education_process.removeClass("active-head-education");
        anakMajor.removeClass("active-major");
        major.removeClass("active-head-major");
        anakDiscovery.removeClass("active-discovery");
        discover_wikrama.removeClass("active-head-discovery");
    });

    campus.on("mouseenter", () => {
        anakBerita.removeClass("active-berita");
        berita.removeClass("active-head-berita");
        anakBkk.removeClass("active-bkk");
        bkk.removeClass("active-head-bkk");
        anakCultures.removeClass("active-cultures");
        cultures.removeClass("active-head-cultures");
        anakEducation.removeClass("active-education");
        education_process.removeClass("active-head-education");
        anakMajor.removeClass("active-major");
        major.removeClass("active-head-major");
        anakDiscovery.removeClass("active-discovery");
        discover_wikrama.removeClass("active-head-discovery");
    });

    bkk.on("mouseenter", () => {
        anakBerita.removeClass("active-berita");
        berita.removeClass("active-head-berita");
        anakCampus.removeClass("active-campus");
        campus.removeClass("active-head-campus");
        anakCultures.removeClass("active-cultures");
        cultures.removeClass("active-head-cultures");
        anakEducation.removeClass("active-education");
        education_process.removeClass("active-head-education");
        anakMajor.removeClass("active-major");
        major.removeClass("active-head-major");
        anakDiscovery.removeClass("active-discovery");
        discover_wikrama.removeClass("active-head-discovery");
    });

    berita.on("mouseenter", () => {
        anakBkk.removeClass("active-bkk");
        bkk.removeClass("active-head-bkk");
        anakCampus.removeClass("active-campus");
        campus.removeClass("active-head-campus");
        anakCultures.removeClass("active-cultures");
        cultures.removeClass("active-head-cultures");
        anakEducation.removeClass("active-education");
        education_process.removeClass("active-head-education");
        anakMajor.removeClass("active-major");
        major.removeClass("active-head-major");
        anakDiscovery.removeClass("active-discovery");
        discover_wikrama.removeClass("active-head-discovery");
    });
});
