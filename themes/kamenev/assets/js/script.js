function getInfoFromApi() {
   apiInst()
   apiVk()
}

function apiInst() {
   let xhr = new XMLHttpRequest();
   xhr.open('GET', 'http://u1302626.isp.regruhosting.ru/backend/kamenev/instagram/parseinstagramcontroller/get-posts');
   xhr.send();
   xhr.onload = function()
   {
       if (xhr.status != 200) 
       {
           alert(`Ошибка ${xhr.status}: ${xhr.statusText}`);
       } 
       else 
       { 
           var response = JSON.parse(xhr.responseText);
           if(response['success'] == 1)
           {
               console.log(response['posts'])
               fillInstBlock(response['posts']);
           }
           else
           {
               alert("Error");
               return;
           }
       }
   };
}

function apiVk() {
   let xhr = new XMLHttpRequest();
   xhr.open('GET', 'http://u1302626.isp.regruhosting.ru/backend/kamenev/parservk/vkcontroller/get-wall');
   xhr.send();
   xhr.onload = function()
   {
       if (xhr.status != 200) 
       {
           alert(`Ошибка ${xhr.status}: ${xhr.statusText}`);
       } 
       else 
       { 
           var response = JSON.parse(xhr.responseText);
           if(response['success'] == 1)
           {
               console.log(response['posts'])
               fillVkBlock(response['posts'], response['url']);
           }
           else
           {
               alert("Error");
               return;
           }
       }
   };
}


function fillVkBlock(posts, urlPost) {
   console.log('VK:')
   let media = new Array();
   

   posts.forEach(function (post){
      let sliderINST = document.querySelector('#social_vk_id') // Контейнер слайдера
      let newSlide = document.createElement('div') // создаем div
      newSlide.className = 'socials__img' // Задаем div-у класс
      console.log(urlPost + post['owner_id'] + '_' + post['id']); // post URL
      media = post['media'];
      console.log(post['text'])
      console.log(post['date'])
      if (media.length > 0) { // проверка есть ли фото/видео кадры
         if (media[0]['type'] === 'video') {
            console.log(media[0]['frame_800'])  // video preview URL
            let socialImg = document.createElement('iframe')
            socialImg.setAttribute('src', media[0]['frame_800'])
            sliderINST.insertAdjacentElement('beforeEnd', newSlide)
            newSlide.insertAdjacentElement('beforeEnd', socialImg)
         } else if (media[0]['type'] === 'photo') {
            console.log(media[0]['photo_807']) // photo URL
            let socialImg = document.createElement('img')
            socialImg.setAttribute('src', media[0]['photo_807'])
            sliderINST.insertAdjacentElement('beforeEnd', newSlide)
            newSlide.insertAdjacentElement('beforeEnd', socialImg)
         }
      } else { // фото и видео нет, тогда выводим preview
         console.log('preview')
      }
   });
}


function fillInstBlock(posts) {
   console.log('Inst:')
   posts.forEach(function(post) {
      console.log('permalink',post['permalink']);
      console.log('media_url',post['media_url']);
      let sliderINST = document.querySelector('#socials_inst_id') // Контейнер слайдера
      let newSlide = document.createElement('div') // создаем div
      newSlide.className = 'socials__img' // Задаем div-у класс
      let socialImg = document.createElement('img')
      socialImg.setAttribute('src', post['media_url'])
      sliderINST.insertAdjacentElement('beforeEnd', newSlide)
      newSlide.insertAdjacentElement('beforeEnd', socialImg)
   });
}

new fullpage('#fullpage', {
   autoScrolling: true
});

/*sliderImg*/
let img = document.querySelectorAll(".img img");
let imgBlock = document.querySelectorAll(".img");
for (let i = 0; i < imgBlock.length; i++) {
  imgBlock[i].addEventListener("click", () => {
    for (let j = 0; j < img.length; j++) {
      imgBlock[j].classList.add("compress");
      imgBlock[j].classList.remove("all");
    }
    imgBlock[i].classList.add("all");
  });
}
/*/sliderImg*/

/*resetState*/
function reset_state() {
  let firstImg = document.querySelectorAll(
    ".wedding__sl-content .img:first-child"
  );
  let otherImg = document.querySelectorAll(
    ".wedding__sl-content .img:not(:first-child)"
  );
  for (let i = 0; i < firstImg.length; i++) {
    firstImg[i].classList.remove("compress");
    firstImg[i].classList.add("all");
  }
  for (let i = 0; i < otherImg.length; i++) {
    otherImg[i].classList.remove("all");
    otherImg[i].classList.add("compress");
  }
}
/*/resetState*/

/*reset*/
document
  .querySelector(".wedding__sl-info")
  .addEventListener("click", function () {
    reset_state();
  });
/*/reset*/

 
 $(".wedding__sl").on("init", function (event, slick) {
   var dots = $(".slick-dots li");
 
   dots.each(function (k, v) {
     $(this)
       .find("button")
       .addClass("heading" + k);
   });
   var items = slick.$slides;
   items.each(function (k, v) {
     var text = $(this).find("h2").text();
     $(".heading" + k).text(text);
   });
   dots.click(function () {
     reset_state();
   }); //add
 });

/*Hide/Show menu mobil*/

let menuMobil = document.querySelector('.mobilNavBlock')
let navBool = false;

function showHideMobilMenu(){
   if(navBool){
      menuMobil.style.width = 0
      navBool = !navBool
   } else{
      menuMobil.style.width = '100%'
      navBool = !navBool
   }
   
}

document.querySelector('.mobilManuBTN').addEventListener('click',function () {
   showHideMobilMenu();
});
document.querySelector('.mobilCross').addEventListener('click',function () {
   showHideMobilMenu();
});

/*/Hide/Show menu mobil*/


/*NavScroll*/



/*/NavScroll*/


 
document.addEventListener("DOMContentLoaded", () => {
   reset_state();
 });
/*sticky-menu*/

window.addEventListener('scroll', function () {
   let topMenu = document.querySelector('.nav');
   topMenu.classList.toggle('sticky', window.scrollY > 0);
});

/*sliders*/

$('.wedding__sl').on('init', function (event, slick) {
   var dots = $('.slick-dots li');
   console.log('SRANZAN VEE');
   dots.each(function (k, v) {
      $(this).find('button').addClass('heading' + k);
   });
   var items = slick.$slides;
   items.each(function (k, v) {
      var text = $(this).find('h2').text();
      $('.heading' + k).text(text);
   });
});

$(document).ready(function () {
   $('.wedding__sl').slick({
      slidesToShow: 1,
      asNavFor: '.wedding__sl-info',
      arrows: false,
      dots: true,
      infinite: false,
      speed: 1200,
      focusOnSelect: true,
   });
});

$(document).ready(function () {
   $('.wedding__sl-info').slick({
      slidesToShow: 1,
      asNavFor: '.wedding__sl',
      fade: true,
      speed: 1200,
      draggable: false,
      infinite: false,
   });
});

$(window).on('load', function(){
   setTimeout(function(){
      $('.socials__slider').slick({
         slidesToShow: 2,
         slidesToScroll: 2,
         infinite: false,
      });
   },1000)
});


$(document).ready(function () {
   $('.partners__slider').slick({
      slidesToShow: 1,
      infinite: false,
   });
});

$(document).ready(function () {
   $('.biography__slider').slick({
      slidesToShow: 1,
      infinite: false,
   });
});