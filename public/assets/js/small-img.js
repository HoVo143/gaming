const productsImg = document.getElementById('productsImg')
const smallImg = document.getElementsByClassName('small-img');

smallImg[0].onclick = function(){
    productsImg.src = smallImg[0].src;
}
smallImg[1].onclick = function(){
    productsImg.src = smallImg[1].src;
}
smallImg[2].onclick = function(){
    productsImg.src = smallImg[2].src;
}
smallImg[3].onclick = function(){
    productsImg.src = smallImg[3].src;
}