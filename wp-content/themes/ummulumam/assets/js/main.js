// Main JS file

let tl = gsap.timeline({ default: { ease: "power4.inOut", duration: 2 } });

tl.to(".banner-content h1", {
    "clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
    opacity: 1,
    y: 0,
    duration: 1,
})
    .to(
        ".banner-content p",
        {
            "clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
            opacity: 1,
            y: 0,
            duration: 1,
        },
        "-=.5"
    )
    .to(
        ".common-fill-button",
        {
            "clip-path": "polygon(0% 100%, 100% 100%, 100% 0%, 0% 0%)",
            opacity: 1,
            y: 0,
            duration: 1,
        },
        "-=.5"
    );
