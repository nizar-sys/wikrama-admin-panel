window.onload = function nyalaHeaderBelow() {
    const discover_wikrama = document.querySelector("#section-header-below-discover_wikrama");
    const major = document.querySelector("#section-header-below-major-competency");
    const anakDiscovery = document.querySelector(".anak-discover_wikrama");
    const anakMajor = document.querySelector(".anak-major");
    const eduction_process = document.querySelector("#section-header-below-eduction_process");
    const anakEducation = document.querySelector(".anak-eduction_process");
    const cultures = document.querySelector("#section-header-below-cultures");
    const anakCultures = document.querySelector(".anak-cultures");
    const campus = document.querySelector("#section-header-below-campus");
    const anakCampus = document.querySelector(".anak-campus");
    const bkk = document.querySelector("#section-header-below-bkk");
    const anakBkk = document.querySelector(".anak-bkk");
    const berita = document.querySelector("#section-header-below-berita");
    const anakBerita = document.querySelector(".anak-berita");
    const home = document.querySelector("#section-header-below-home");

    if (discover_wikrama.addEventListener("mouseenter", function () {
        anakDiscovery.classList.add("active-discover_wikrama");
        discover_wikrama.classList.add('active-head-discover_wikrama');
    }));
    if (anakDiscovery.addEventListener("mouseleave", function () {
        anakDiscovery.classList.remove("active-discover_wikrama");
        discover_wikrama.classList.remove('active-head-discover_wikrama');
    }));

    // major

    if (major.addEventListener("mouseenter", function () {
        anakMajor.classList.add("active-major");
        major.classList.add('active-head-major');
    }));
    if (anakMajor.addEventListener("mouseleave", function () {
        anakMajor.classList.remove("active-major");
        major.classList.remove('active-head-major');
    }));
    
    // eduction_process

    if (eduction_process.addEventListener("mouseenter", function () {
        anakEducation.classList.add("active-eduction_process");
        eduction_process.classList.add('active-head-eduction_process');
    }));
    if (anakEducation.addEventListener("mouseleave", function () {
        anakEducation.classList.remove("active-eduction_process");
        eduction_process.classList.remove('active-head-eduction_process');
    }));

    // cultures

    if (cultures.addEventListener("mouseenter", function () {
        anakCultures.classList.add("active-cultures");
        cultures.classList.add("active-head-cultures");
    }));
    if (anakCultures.addEventListener("mouseleave", function () {
        anakCultures.classList.remove("active-cultures");
        cultures.classList.remove("active-head-cultures");
    }));

    // campus

    if(campus.addEventListener("mouseenter", function () {
        anakCampus.classList.add("active-campus");
        campus.classList.add("active-head-campus");
    }));
    if(anakCampus.addEventListener("mouseleave", function () {
        anakCampus.classList.remove("active-campus");
        campus.classList.remove("active-head-campus");
    }));

    // bkk

    if(bkk.addEventListener("mouseenter", function () {
        anakBkk.classList.add("active-bkk");
        bkk.classList.add("active-head-bkk");
    }));
    if(anakBkk.addEventListener("mouseleave", function () {
        anakBkk.classList.remove("active-bkk");
        bkk.classList.remove("active-head-bkk");
    }));
    
    // berita

    if(berita.addEventListener("mouseenter", function () {
        anakBerita.classList.add("active-berita");
        berita.classList.add("active-head-berita");
    }));
    if(anakBerita.addEventListener("mouseleave", function () {
        anakBerita.classList.remove("active-berita");
        berita.classList.remove("active-head-berita");
    }));

    // fix bug

    if (home.addEventListener("mouseenter", function () {
        anakBerita.classList.remove("active-berita");
        berita.classList.remove("active-head-berita");
        anakBkk.classList.remove("active-bkk");
        bkk.classList.remove("active-head-bkk");
        anakCampus.classList.remove("active-campus");
        campus.classList.remove("active-head-campus");
        anakCultures.classList.remove("active-cultures");
        cultures.classList.remove("active-head-cultures");
        anakEducation.classList.remove("active-eduction_process");
        eduction_process.classList.remove('active-head-eduction_process');
        anakMajor.classList.remove("active-major");
        major.classList.remove('active-head-major');
        anakDiscovery.classList.remove("active-discover_wikrama");
        discover_wikrama.classList.remove('active-head-discover_wikrama');
    }));
    if (discover_wikrama.addEventListener("mouseenter", function () {
        anakBerita.classList.remove("active-berita");
        berita.classList.remove("active-head-berita");
        anakBkk.classList.remove("active-bkk");
        bkk.classList.remove("active-head-bkk");
        anakCampus.classList.remove("active-campus");
        campus.classList.remove("active-head-campus");
        anakCultures.classList.remove("active-cultures");
        cultures.classList.remove("active-head-cultures");
        anakEducation.classList.remove("active-eduction_process");
        eduction_process.classList.remove('active-head-eduction_process');
        anakMajor.classList.remove("active-major");
        major.classList.remove('active-head-major');
    }));
    if (major.addEventListener("mouseenter", function () {
        anakBerita.classList.remove("active-berita");
        berita.classList.remove("active-head-berita");
        anakBkk.classList.remove("active-bkk");
        bkk.classList.remove("active-head-bkk");
        anakCampus.classList.remove("active-campus");
        campus.classList.remove("active-head-campus");
        anakCultures.classList.remove("active-cultures");
        cultures.classList.remove("active-head-cultures");
        anakEducation.classList.remove("active-eduction_process");
        eduction_process.classList.remove('active-head-eduction_process');
        anakDiscovery.classList.remove("active-discover_wikrama");
        discover_wikrama.classList.remove('active-head-discover_wikrama');
    }));
    if (eduction_process.addEventListener("mouseenter", function () {
        anakBerita.classList.remove("active-berita");
        berita.classList.remove("active-head-berita");
        anakBkk.classList.remove("active-bkk");
        bkk.classList.remove("active-head-bkk");
        anakCampus.classList.remove("active-campus");
        campus.classList.remove("active-head-campus");
        anakCultures.classList.remove("active-cultures");
        cultures.classList.remove("active-head-cultures");
        anakMajor.classList.remove("active-major");
        major.classList.remove('active-head-major');
        anakDiscovery.classList.remove("active-discover_wikrama");
        discover_wikrama.classList.remove('active-head-discover_wikrama');
    }));
    if (cultures.addEventListener("mouseenter", function () {
        anakBerita.classList.remove("active-berita");
        berita.classList.remove("active-head-berita");
        anakBkk.classList.remove("active-bkk");
        bkk.classList.remove("active-head-bkk");
        anakCampus.classList.remove("active-campus");
        campus.classList.remove("active-head-campus");
        anakEducation.classList.remove("active-eduction_process");
        eduction_process.classList.remove('active-head-eduction_process');
        anakMajor.classList.remove("active-major");
        major.classList.remove('active-head-major');
        anakDiscovery.classList.remove("active-discover_wikrama");
        discover_wikrama.classList.remove('active-head-discover_wikrama');
    }));
    if (campus.addEventListener("mouseenter", function () {
        anakBerita.classList.remove("active-berita");
        berita.classList.remove("active-head-berita");
        anakBkk.classList.remove("active-bkk");
        bkk.classList.remove("active-head-bkk");
        anakCultures.classList.remove("active-cultures");
        cultures.classList.remove("active-head-cultures");
        anakEducation.classList.remove("active-eduction_process");
        eduction_process.classList.remove('active-head-eduction_process');
        anakMajor.classList.remove("active-major");
        major.classList.remove('active-head-major');
        anakDiscovery.classList.remove("active-discover_wikrama");
        discover_wikrama.classList.remove('active-head-discover_wikrama');
    }));
    if (bkk.addEventListener("mouseenter", function () {
        anakBerita.classList.remove("active-berita");
        berita.classList.remove("active-head-berita");
        anakCampus.classList.remove("active-campus");
        campus.classList.remove("active-head-campus");
        anakCultures.classList.remove("active-cultures");
        cultures.classList.remove("active-head-cultures");
        anakEducation.classList.remove("active-eduction_process");
        eduction_process.classList.remove('active-head-eduction_process');
        anakMajor.classList.remove("active-major");
        major.classList.remove('active-head-major');
        anakDiscovery.classList.remove("active-discover_wikrama");
        discover_wikrama.classList.remove('active-head-discover_wikrama');
    }));
    if (berita.addEventListener("mouseenter", function () {
        anakBkk.classList.remove("active-bkk");
        bkk.classList.remove("active-head-bkk");
        anakCampus.classList.remove("active-campus");
        campus.classList.remove("active-head-campus");
        anakCultures.classList.remove("active-cultures");
        cultures.classList.remove("active-head-cultures");
        anakEducation.classList.remove("active-eduction_process");
        eduction_process.classList.remove('active-head-eduction_process');
        anakMajor.classList.remove("active-major");
        major.classList.remove('active-head-major');
        anakDiscovery.classList.remove("active-discover_wikrama");
        discover_wikrama.classList.remove('active-head-discover_wikrama');
    }));
}