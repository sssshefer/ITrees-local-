const anotherLi = document.querySelectorAll('.branches-list-wrapper ul li ');
const anotherA = document.querySelectorAll('.branches-list-wrapper ul li a');

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


let lang = document.documentElement.lang;
// if(lang === 'ru-RU') {
//     const russianLinks = document.querySelectorAll('a');
//     for (let i of russianLinks){
//         i.classList.add('russianFont');
//     }
//     const russianText = document.querySelectorAll('p,h1,h2,h3,h4,h5,h6');
//     for (let i of russianText){
//         i.classList.add('russianFont');
//     }
//     console.log(1);
// }
