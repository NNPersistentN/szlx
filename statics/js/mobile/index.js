

var swiper = new Swiper('.banner',{
    pagination: '.swiper-pagination',
//        paginationClickable: true,
//        spaceBetween: 30,
});
var designWidth=750;
fontSize();
function fontSize(){
    var clientWidth=document.documentElement.clientWidth;
    var fontSize=clientWidth/designWidth;
    document.documentElement.style.fontSize=fontSize*100+'px';
}
window.onresize=function(){fontSize()};









