// $('.page-scroll').on('click', function(e){

//     //ambil isi href
//     var tujuan = $(this).attr('href');

//     //tangkap elemen ybs
//     var elemenTujuan = $(tujuan);

//     // pindahkan scroll
//     $('body').animate({
//         scrollTop: elemenTujuan.offset().top - 50
//     }, 1250, 'linear');

//     e.preventDefault();
// });


$('.page-scroll').on('click', function(e) {

var tujuan = $(this).attr('href');

var elemenTujuan = $(tujuan);

$('html , body').animate({
scrollTop: elemenTujuan.offset().top - 50
}, 1250, 'swing');

e.preventDefault();
});