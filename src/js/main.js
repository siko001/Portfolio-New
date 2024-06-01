import * as Player from '@lottiefiles/lottie-player';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);
import { gsap } from 'gsap';
import LocomotiveScroll from 'locomotive-scroll';

// import './page-animations';

const player = document.getElementById('theme-player');
const darkMode = () => localStorage.getItem('darkMode');
let isAnimating = false;

const checkDarkMode = () => {
    if (darkMode() === null) {
        localStorage.setItem('darkMode', 'true');
    }
    if (darkMode() === 'true') {
        setTimeout(() => {
            playAnimation();
        }, 10);
    } else {
        setBackgroundColor();
    }
};

const playAnimation = () => {
    if (!isAnimating) {
        isAnimating = true;
        setBackgroundColor();
        player ? player.play() : null;
        setTimeout(() => {
            player?.pause();
            isAnimating = false;
        }, 2000);
    }
};

const toggleDarkMode = () => {
    if (!isAnimating) {
        if (darkMode() === 'true') {
            localStorage.setItem('darkMode', 'false');
        } else {
            localStorage.setItem('darkMode', 'true');
        }
        playAnimation();
    }
};

const setBackgroundColor = () => {
    if (darkMode() === 'true') {
        document.body.classList.remove('light');
        document.body.classList.add('dark');
    } else {
        document.body.classList.add('light');
        document.body.classList.remove('dark');
    }
};

player ? player.addEventListener('click', toggleDarkMode) : null;

document.addEventListener('DOMContentLoaded', () => {
    checkDarkMode();
});

//---------------------------------------------------------

document.addEventListener('DOMContentLoaded', () => {
    const nameTL = gsap.timeline({ defaults: { ease: 'power1.out' } });
    nameTL.fromTo('.name', { opacity: 0 }, { opacity: 1, duration: 1.5, delay: 1.1 });
});

//---------------------------------------------------------

const container = document.getElementById('logo-container');
const mask = document.querySelector('.mask');

// Resize
if (container && mask) {
    const width = '768px';
    let mql = window.matchMedia(`(max-width: ${width})`);
    function checkWindowSize() {
        if (mql.matches) {
            mask.style.display = 'none';
        } else {
            mask.style.display = 'block';
        }
    }
    checkWindowSize();
    window.addEventListener('resize', checkWindowSize);

    document.addEventListener('mousemove', (e) => {
        mask.style.maskPosition = `${e.clientX - 100}px ${e.clientY - 250}px`;
    });

    container.addEventListener('mouseenter', () => {
        document.addEventListener('mousemove', (e) => {
            mask.style.maskPosition = `${e.clientX - 150}px ${e.clientY - 250}px`;
        });
        gsap.killTweensOf(mask);
        gsap.to('.mask', {
            maskSize: '300px',
            ease: 'expo.out',
            duration: 1,
            display: 'block',
            zIndex: 40,
        });
    });

    container.addEventListener('mouseleave', () => {
        document.addEventListener('mousemove', (e) => {
            mask.style.maskPosition = `${e.clientX - 100}px ${e.clientY - 250}px`;
        });
        gsap.killTweensOf(mask);
        gsap.to('.mask', {
            maskSize: '0px',
            ease: 'expo.out',
            display: 'none',
            duration: 0.5,
        });
    });

    document.addEventListener('DOMContentLoaded', (event) => {
        const items = document.querySelectorAll('.swiper-slide');
        items.forEach((item) => {
            const clone = item.cloneNode(true);
            const itemParent = item.parentNode;
            itemParent.appendChild(clone);
        });
    });
}
// -------------------------------------------------------------
const navPlayer = document.getElementById('nav-player');
const mobileNav = document.querySelector('[data-mobile-nav]');
let isAnimatingNav = false;
let tl2 = gsap.timeline({ paused: true });
const mobileMenu = document.querySelector('[data-mobile-nav-menu]');
const mobileContianer = document.querySelector('[data-mobile-nav-container');
let navItems;
mobileContianer ? (navItems = mobileMenu.children) : null;

tl2.to(mobileNav, {
    scale: 20,
    width: '15%',
    height: '15%',
    duration: 0.4,
    onComplete: () => {
        Array.from(navItems).forEach((item) => {
            item.style.display = 'block';
        });
        gsap.to(navItems, {
            opacity: 1,
            duration: 0.5,
            stagger: 0.3,
        });
    },
});
if (navPlayer) {
    navPlayer.addEventListener('click', () => {
        if (!isAnimatingNav) {
            navPlayer.play();
            isAnimatingNav = true;

            if (!mobileNav.classList.contains('active')) {
                mobileNav.classList.add('active');
                mobileContianer.style.display = 'grid';
                tl2 = gsap.timeline();
                tl2.to(mobileNav, {
                    scale: 20,
                    width: '15%',
                    height: '15%',
                    duration: 0.4,
                    onComplete: () => {
                        Array.from(navItems).forEach((item) => {
                            item.style.display = 'block';
                        });
                        gsap.to(navItems, {
                            opacity: 1,
                            duration: 0.5,
                            stagger: 0.2,
                        });
                    },
                });
                tl2.play();
            } else {
                mobileContianer.style.display = 'none';
                tl2.reverse();
                mobileNav.classList.remove('active');
                const menuItems = document.querySelectorAll('li.menu-item');
                menuItems.forEach((item) => {
                    item.style.display = 'none';
                    item.style.opacity = 0;
                });
            }

            setTimeout(() => {
                navPlayer.pause();
                isAnimatingNav = false;
            }, 1490);
        }
    });
}

const maxWidth = 1024;
let mql = window.matchMedia(`(max-width: ${maxWidth}px)`);

const checkBreakPoint = (e) => {
    if (!e.matches) {
        mobileContianer.style.display = 'none';

        tl2.reverse();
    }
};

checkBreakPoint(mql);

window.addEventListener('resize', () => {
    mql = window.matchMedia(`(max-width: ${maxWidth}px)`);
    checkBreakPoint(mql);
});
//------------------------------------------------------------

const codingLottie = document.getElementById('coding-lottie');
gsap.to(codingLottie, {
    scale: 1.05,
    rotate: -2,
    duration: 4,
    repeat: -1,
    yoyo: true,
    ease: 'power1.inOut',
});

//---------------------------------------------------------------
// Get all elements with the 'data-gradient' attribute
const gradientContainers = document.querySelectorAll('[data-gradient="border-gradient"]');
const projectButtons = document.querySelectorAll('[data-project-button]');

let isHovered = false;

// Add mousemove event listener to each container
gradientContainers.forEach((container) => {
    container.addEventListener('mouseover', function () {
        isHovered = true;
    });

    container.addEventListener('mouseout', function () {
        isHovered = false;
        // Reset gradient when mouse leaves the container
        container.style.background = 'radial-gradient(at 50% 50%, white, black, #3498db, #add8e6)';
    });
});

projectButtons.forEach((button) => {
    button.addEventListener('mouseover', function () {
        button.setAttribute('data-gradient', 'border-gradient');
        button.setAttribute('data-text-gradiant', '');
    });
    button.addEventListener('mouseout', function () {
        button.removeAttribute('data-gradient');
        button.setAttribute('data-text-gradiant', '');
    });
});

// Global mousemove event listener to update gradient for the hovered container
document.addEventListener('mousemove', function (event) {
    if (isHovered) {
        var windowWidth = window.innerWidth;
        var windowHeight = window.innerHeight;

        var mouseXpercentage = (event.pageX / windowWidth) * 100;
        var mouseYpercentage = (event.pageY / windowHeight) * 100;

        gradientContainers.forEach((container) => {
            if (container.matches(':hover')) {
                container.style.transition = 'background 0.5s ease';
                container.style.background =
                    'radial-gradient(at ' +
                    mouseXpercentage +
                    '% ' +
                    mouseYpercentage +
                    '%, white, black, #3498db, #add8e6)';
            } else {
                container.style.transition = 'none';
            }
        });
    }
});

gradientContainers.forEach((container) => {
    if (window.DeviceOrientationEvent && window.matchMedia('(pointer: coarse)').matches) {
        window.addEventListener('deviceorientation', function (event) {
            let rotateY = event.gamma / 10;
            let rotateX = event.beta / 3;
            container.style.transition = 'transform 1s ease'; // Add this line

            container.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
        });
    } else {
        container.addEventListener('mouseenter', function () {
            container.style.transition = 'transform 1s ease';
        });

        container.addEventListener('mousemove', function (event) {
            let rect = container.getBoundingClientRect();
            let x = event.clientX - rect.left;
            let y = event.clientY - rect.top;
            let centerX = rect.width / 2;
            let centerY = rect.height / 2;

            let deltaX = x - centerX;
            let deltaY = y - centerY;

            let percentX = deltaX / centerX;
            let percentY = deltaY / centerY;

            let maxRotation = 10;
            let rotateY = percentX * maxRotation;
            let rotateX = percentY * -1 * maxRotation;

            container.style.transition = 'transform 1s ease'; // Add this line

            container.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
        });

        container.addEventListener('mouseout', function () {
            container.style.transition = 'transform 1s ease';

            container.style.transform = ' rotateY(0deg) rotateX(0deg)';
        });
    }
});
//---------------------------------------------------------

//-------------------------------------------------------

const rightBoxes = document.querySelectorAll("[data-js='right']");
const leftBoxes = document.querySelectorAll("[data-js='left']");

rightBoxes.forEach((box) => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: box,
            start: '-400% 70%',
            scrub: true,
        },
    });
    tl.from(box, {
        y: '100%',
        x: '-0%',
        ease: 'power4.in',
    }).to(box, {
        y: '-300%',
        x: '-100%',
        ease: 'power3.in',
    });
});

leftBoxes.forEach((box) => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: box,
            start: '-400% 70%',
            scrub: true,
        },
    });

    tl.from(box, {
        y: '100%',
        x: '-0%',
        ease: 'power4.in',
    }).to(box, {
        y: '-300%',
        x: '100%',
        ease: 'power4.in',
    });
});

//------------------------------------------------------------

if (window.location.href.split('/')[3] === 'about') {
    document.body.classList.add('about-page');
}
//-------------------------------------------------------

const heroImg = document.querySelector('[data-hero-image]');
const heroText = document.querySelector('[data-hero-text]');
setTimeout(() => {
    heroImg?.classList.remove('invisible');
    heroText?.classList.remove('invisible');
    gsap.fromTo(
        heroImg,
        {
            opacity: 0,
            y: 100,
        },
        {
            opacity: 1,
            y: 0,
            duration: 1,
            delay: 0.5,
        }
    );

    gsap.fromTo(
        heroText,
        {
            opacity: 0,
            x: 100,
        },
        {
            opacity: 1,
            x: 0,
            duration: 1,
            delay: 1,
        }
    );
}, 300);

//-------------------------------------------------------

const aboutHeading = document.querySelector('[data-st-heading]');
const aboutP1 = document.querySelector('[data-st-p1]');
const aboutP2 = document.querySelector('[data-st-p2]');
const aboutContact = document.querySelector('[data-st-contant]');
const aboutLottie = document.querySelector('[data-st-lottie]');

gsap.fromTo(
    aboutHeading,
    {
        opacity: 0,
        y: 100,
    },
    {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 0.5,
        scrollTrigger: {
            trigger: aboutHeading,
            start: 'top bottom',
        },
    }
);

let aboutP1Animation = gsap.fromTo(
    aboutP1,
    {
        opacity: 0,
        y: 100,
    },
    {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 1,
        scrollTrigger: {
            trigger: aboutP1,
            start: 'center bottom',
            onLeaveBack: () => {
                aboutP1Animation.reverse();
            },
        },
    }
);
let aboutLottieAnimation = gsap.fromTo(
    aboutLottie,
    {
        opacity: 0,
        x: 100,
    },
    {
        opacity: 1,
        x: 0,
        scrollTrigger: {
            trigger: aboutLottie,
            start: 'top 50%',
            onLeaveBack: () => {
                aboutLottieAnimation.reverse();
            },
        },
    }
);
let aboutP2Animation = gsap.fromTo(
    aboutP2,
    {
        opacity: 0,
        y: 100,
    },
    {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 1,
        scrollTrigger: {
            trigger: aboutP2,
            start: 'center bottom',
            onLeaveBack: () => {
                aboutP2Animation.reverse();
            },
        },
    }
);

gsap.fromTo(
    aboutContact,
    {
        opacity: 0,
        x: -100,
    },
    {
        opacity: 1,
        x: 0,
        duration: 1,
        delay: 2,
        scrollTrigger: {
            trigger: aboutContact,
            start: '150% 110%',
        },
    }
);

window.addEventListener('resize', () => {
    ScrollTrigger.refresh();
});
