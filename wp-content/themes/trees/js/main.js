const anotherLi = document.querySelectorAll('.branches-list-wrapper ul li ');
const anotherA = document.querySelectorAll('.branches-list-wrapper ul li a');

let anotherLiToArray = Array.from(anotherLi);

let anotherLiSize = anotherLiToArray.length;

console.log(anotherLiSize);

const corner = 360 / anotherLiSize;

console.log('corner = ' + corner);

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
    let text = document.createTextNode(` rotate = ${rotate}`);
    i.append(text);
}
