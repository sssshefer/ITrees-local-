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


