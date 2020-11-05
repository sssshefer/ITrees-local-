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
    logoLink.classList.add('transform-5');
    svgPath.classList.add('transform-5');

});

logoLink.addEventListener('mouseleave', () => {
    logoLink.classList.remove('transform-5');
    svgPath.classList.remove('transform-5');
});

svgPath.addEventListener('mouseover', () => {
    logoLink.classList.add('transform-5');
    svgPath.classList.add('transform-5');
});

svgPath.addEventListener('mouseout', () => {
    logoLink.classList.remove('transform-5');
    svgPath.classList.remove('transform-5');
});

let linkNav = document.querySelectorAll('[href^="#"]'),
    V = .6;
for (let i = 0; i < linkNav.length; i++) {
    linkNav[i].addEventListener('click', function(e) {
        e.preventDefault();
        let w = window.pageYOffset,
            hash = this.href.replace(/[^#]*(.*)/, '$1');
        let t = document.querySelector(hash).getBoundingClientRect().top;
            start = null;
        requestAnimationFrame(step);
        function step(time) {
            if (start === null) start = time;
            let progress = time - start,
                r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
            window.scrollTo(0,r);
            if (r !== w + t) {
                requestAnimationFrame(step)
            } else {
                location.hash = hash
            }
        }
    }, false);
}


