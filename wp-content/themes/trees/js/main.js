//tree circle Start
const anotherLi = document.querySelectorAll('.trees-list-wrapper ul li ');
const anotherA = document.querySelectorAll('.trees-list-wrapper ul li a');

let anotherLiToArray = Array.from(anotherLi);

let anotherLiSize = anotherLiToArray.length;

const corner = 360 / anotherLiSize;

let rotate = 10;
for (let i of anotherLiToArray) {
    rotate += corner;
    rotate %= 360;
    i.style.transform = `rotate(${rotate}deg) skew(50deg)`;

}

anotherAToArray = Array.from(anotherA);

rotate = 10;
for (let i of anotherAToArray) {
    rotate += corner;
    rotate %= 360;
    i.style.transform = `skew(-50deg) rotate(${-rotate}deg)`;
}


const logoLink = document.querySelector('.options__logo');
const svgPath = document.querySelector('.cls-1');

logoLink.addEventListener('mouseenter', () => {
    logoLink.classList.add('transform-4');
    svgPath.classList.add('transform-4');

});

logoLink.addEventListener('mouseleave', () => {
    logoLink.classList.remove('transform-4');
    svgPath.classList.remove('transform-4');
});

svgPath.addEventListener('mouseover', () => {
    logoLink.classList.add('transform-4');
    svgPath.classList.add('transform-4');
});

svgPath.addEventListener('mouseout', () => {
    logoLink.classList.remove('transform-4');
    svgPath.classList.remove('transform-4');
});
//tree circle End

//smooth scroll Start
let linkNav = document.querySelectorAll('[href^="#"]'),
    V = .6;
for (let i = 0; i < linkNav.length; i++) {
    linkNav[i].addEventListener('click', function (e) {
        e.preventDefault();
        let w = window.pageYOffset,
            hash = this.href.replace(/[^#]*(.*)/, '$1');
        let t = document.querySelector(hash).getBoundingClientRect().top;
        start = null;
        requestAnimationFrame(step);

        function step(time) {
            if (start === null) start = time;
            let progress = time - start,
                r = (t < 0 ? Math.max(w - progress / V, w + t) : Math.min(w + progress / V, w + t));
            window.scrollTo(0, r);
            if (r !== w + t) {
                requestAnimationFrame(step)
            } else {
                location.hash = hash
            }
        }
    }, false);
}
//smooth scroll End

//PAGE HOME

//make the last word brown color Start
let homeTitleHtml = document.querySelector('.timeToStart__title');
if (homeTitleHtml !== null) {
    let homeTitleArray = homeTitleHtml.textContent.trim().split(' ');
    let homeTitleTheLastWord = homeTitleArray[homeTitleArray.length - 1];
    homeTitleArray.pop();
    homeTitleHtml.innerHTML = homeTitleArray.join(' ') + ' ' +
        `<spam style="color:#a9763e">${homeTitleTheLastWord}</spam>`;

    let home__title = document.querySelector('.timeToStart');
    if (document.documentElement.lang === 'en-GB') {
        home__title.style = 'padding: 90px 0 100px;';
    }
}
//make the last word brown color End

//trees-end Hover (3 levels) Start
let treesEndWrap = document.querySelectorAll('.trees-end-level-wrap');

let trees1 = treesEndWrap[0];
let trees2 = treesEndWrap[1];
let trees3 = treesEndWrap[2];

if (treesEndWrap[0] !== undefined) {
    trees1.addEventListener('mouseenter', () => {
        trees1.style.flexGrow = '3';
    });

    trees1.addEventListener('mouseleave', () => {
        trees1.style.flexGrow = '2';
    });

    trees2.addEventListener('mouseenter', () => {
        trees2.style.flexGrow = '3';
    });

    trees2.addEventListener('mouseleave', () => {
        trees2.style.flexGrow = '2';
    });

    trees3.addEventListener('mouseenter', () => {
        trees3.style.flexGrow = '3';
    });

    trees3.addEventListener('mouseleave', () => {
        trees3.style.flexGrow = '2';
    });
}
//trees-end Hover (3 levels) End