window.onload = function nyalaHeaderBelow() {
    const discovery = document.querySelector("#section-header-below-discovery");
    const major = document.querySelector("#section-header-below-major-competency");
    const anakDiscovery = document.querySelector(".anak-discovery");
    const anakMajor = document.querySelector(".anak-major");
    const education = document.querySelector("#section-header-below-education");
    const anakEducation = document.querySelector(".anak-education");
    const cultures = document.querySelector("#section-header-below-cultures");
    const anakCultures = document.querySelector(".anak-cultures");
    const campus = document.querySelector("#section-header-below-campus");
    const anakCampus = document.querySelector(".anak-campus");

    if (discovery.addEventListener("mouseenter", function () {
        anakDiscovery.classList.add("active-discovery");
        discovery.classList.add('active-head-discovery');
    }));
    if (anakDiscovery.addEventListener("mouseleave", function () {
        anakDiscovery.classList.remove("active-discovery");
        discovery.classList.remove('active-head-discovery');
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
    
    // education

    if (education.addEventListener("mouseenter", function () {
        anakEducation.classList.add("active-education");
        education.classList.add('active-head-education');
    }));
    if (anakEducation.addEventListener("mouseleave", function () {
        anakEducation.classList.remove("active-education");
        education.classList.remove('active-head-education');
    }));

    // cultures

    if (cultures.addEventListener("mouseenter", function () {
        anakCultures.classList.add("active-cultures");
        education.classList.add("active-head-cultures");
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

}