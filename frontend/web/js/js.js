var inst = $('[data-remodal-id=modal]').remodal();
var data = new Date();
function position(){
  $('.btn-pos').on('click', function(){
        var pos = $(this).attr('data-position');
        $('form').find('input[name="position"]').val(pos);
        if (pos == 'Калькулятор') {
            var site = $('.che:checked').val();
            $('form').find('input[name="site"]').val(site);

          var summm = $('form').find('td.sum').text();
           $('form').find('input[name="sum"]').val(summm);

          if ($('#domen').is(':checked')) {
            $('form').find('input[name="domen"]').val('Да');
          }else{
            $('form').find('input[name="domen"]').val('Нет');
          }
          if ($('#uniq-design').is(':checked')) {
            $('form').find('input[name="design"]').val('Да');
          }else{
            $('form').find('input[name="design"]').val('Нет');
          }
          if ($('#promo').is(':checked')) {
            $('form').find('input[name="promo"]').val('Да');
          }else{
            $('form').find('input[name="promo"]').val('Нет');
          }
          var h = $('form').find('#hosting').val();
          $('form').find('input[name="hosting"]').val(h)

        }
      })
}
var po = position();
  $('p.m-0').append(data.getFullYear());
  let name = $('input[name="name"]');
  let phone = $('input[name="phone"]');
  $(function(){
    $('#form534534535354').submit(function(e) { //Change
      e.preventDefault();
      $('input[name="position"]').attr('position', po);
      if (data == 0) {
        console.log(data);
      }
        var th = $(this);
            $.ajax({
            type: "POST",
            url: "index", //Change
            data: th.serialize(),
            beforeSend: (function(){
            $('.submit').addClass('progress-bar progress-bar-striped progress-bar-animated bg-warning');
        }),
            error: function(xhr, XMLHttpRequest, textStatus, errorThrown, data) {
              if (xhr.status == 500) {
                $('.result').html('Error: '+textStatus);
              }

            },

            success: function(data) {

                var json = $.parseJSON(data);


                console.log(data);


                if(data.phone == 1 && data.name == 1) {

                    isValidPhone(name);
                    isValidPhone(phone);

                    $('#result').removeClass('alert-danger').html('<div class="alert alert-success p-1 mt-2">Сообщение успешно отправлено</div>');
                    $('.submit').removeClass('progress-bar progress-bar-striped progress-bar-animated bg-warning');

                    ym(66829390,'reachGoal','send_form');

                    setTimeout(function() {
                        // Done Functions
                        $('#result').html('');
                        inst.close();
                        $('body').append('<div class="alert alert-warning rounded-0 p-1 mt-2 fixed-top p-2">Спасибо! Я получил ваше сообщение. Свяжусь с вами в ближашее время.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

                    }, 2000);


                    setTimeout(function() {
                        // Done Functions
                        th.trigger("reset");
                    }, 500);


                }else{
                  isInvalidPhone(phone, json.msg);
                  isInvalidPhone(name, json.msg);
                }






                if (parseInt(data) > 15) {

                    isInvalidPhone(name, 'Имя не более 15-ти символов!');

                   return false;

                }else if(parseInt(data) < 3){


                      isInvalidPhone(name, 'Имя от 3-х символов!');
                      return false;

                } else if(data === 'NO'){


                      isInvalidPhone(phone, 'Введите корректный номер!');
                      return false;

                } else{

                  isValidPhone(name);
                  isValidPhone(phone);

                  $('#result').removeClass('alert-danger').html('<div class="alert alert-success p-1 mt-2">Сообщение успешно отправлено</div>');
                  $('.submit').removeClass('progress-bar progress-bar-striped progress-bar-animated bg-warning');

                  ym(66829390,'reachGoal','send_form');

               }




                  }

    })


        return false;
    })

    var $page = $('html, body');
$('a.nav-link').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 400);
    return false;
});

  })


window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}


var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }


$('.owl-carousel').owlCarousel({
    loop: true,
    nav: true,
    navText:["<i class='fa fa-angle-left'></i> ", " <i class='fa fa-angle-right'></i>"],
    items: 1,
    smartSpeed: 500,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
    autoHeight:true,
    margin: 10,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})



$('.owl-carousel').find('.owl-nav').removeClass('disabled');
$('.owl-carousel').on('changed.owl.carousel', function(event) {
  $(this).find('.owl-nav').removeClass('disabled');
});

// Cut text

$('.padding-block').each(function(){
  var th = $(this);
  let t = $(this).find('span.otz').text();
  let img = $(this).find('img').attr('src');
  let bt = $(this).find('button').on('click', function(){
    $('p.modal-ot').html('<img src="'+img+'" class="rounded-circle float-left pr-2" width="100">'+t);
  
  })
  
});


$('span.otz').each(function(){
var text =  $(this);
var size = 80,
    newsText = text.text();
if(newsText.length > size){
  text.text(newsText.slice(0, size) + ' ...');
}


});

$("a.nav-link").on("click", function() {
  $("#navbarNavAltMarkup").collapse();
});

// Input mask
  var items = document.getElementsByClassName('mask');

Array.prototype.forEach.call(items, function(element) {
    var phoneMask = new IMask(element, {
  mask: '+7(000)000-00-00',
  lazy: false
});
});

// Change text on btn
var i = 0;

var btn_collapse = $('.btn[data-toggle="collapse"]');
$('.btn[data-toggle="collapse"]').text('Рассчитать стоимость');
var i = 1;
btn_collapse.on('click', function(){
    //btn_collapse.animate({maxWidth: "-=50px"});
    if (i == 1){

        $(this).text('Свернуть');
        i = 0;
    }else{
        $(this).text('Рассчитать стоимость');
        i = 1;
    }


});

// Calculator
$('input#hosting').on('input', function(){
  $this = $(this).val();
  $('label[for="customRange3"]').html('<b>Хостинг, ' + $this + ' мес.</b>');
});
$('input#weight2').on('input', function(){
  $this = $(this).val();
  $('label[for="customRange4"]').html('<b>Толщина утеплителя, ' + $this + ' ₽</b>');
});
$('table.table').slideUp();



$('input.custom-range, .che, .checkboxes, #hosting').bind('change ',function re(event) {
  // event.preventDefault();
  var che = $('.che:checked').val();
  if ($('#uniq-design').is(':checked')) {
    var uniq_design = 10000;
  }else{
    uniq_design = 0;
  }
  
  var price = che;
  // console.log(price);
    var hosting = $("#hosting").val() * 200;
    if (hosting < 1200 && $('#domen').is(':checked')) {
        var domen = 200;
    
  }else{
    domen = 0;
  }
  console.log(domen);
  if ($('#promo').is(':checked')) {
    var promo = 15000;
  }else{
    promo = 0;
  }
    
    var weight2 = $("#weight2").val() ;
    var tara = 12;
    var total = parseInt(price) + parseInt(hosting) + parseInt(uniq_design) + parseInt(domen) + parseInt(promo);
    let log = uniq_design;
    let log2 = hosting;

    $('table.table').slideDown();
     totalnumber = $(".sum");
     totalnumber12 = $(".sum12");
     totalnumber2 = $(".sum2");
     totalnumber3 = $(".sum3");
     totalnumber4 = $(".sum4");
    var countTo = total;
    var countTo2 = ( +log.toFixed(1) );
    var countTo3 = Math.ceil(log2);
    var countTo4 = Math.ceil(domen);
   
      $({ countNum2: totalnumber.text() }).animate(
        {
          countNum: countTo,
          countNum2: countTo2,
          countNum3: countTo3,
          countNum4: countTo4,
        },

        {
          duration: 300,
          easing: "linear",
          step: function() {
            totalnumber.html('<b>от '+Math.floor(this.countNum) +' ₽</b>');
            totalnumber2.text('от '+Math.floor(this.countNum2) +' ₽');
            totalnumber3.text(Math.ceil(this.countNum3) +' ₽');
            totalnumber4.text(Math.ceil(this.countNum4) +' ₽');
          },
          complete: function() {
            totalnumber.html('<b>от '+this.countNum +' ₽</b>');
            totalnumber2.html('от '+this.countNum2 +' ₽');
            totalnumber3.text(Math.ceil(this.countNum3) +' ₽');
            totalnumber4.text(Math.ceil(this.countNum4) +' ₽');

          }
        }
      );
    $('input[name="sum"]').val(total+' ₽');
    $('input[name="sum2"]').val(log+ ' ₽');
    $('input[name="sum3"]').val(Math.ceil(log2)+ ' ₽');
});

// $(function () {
//   $('[data-toggle="tooltip"]').tooltip();
// })

// range
  $(".js-range-slider").ionRangeSlider({
        skin: "round",
        min: 0,
        max: 12,
        step: 1,
        grid: true
    });
//End range

//Stor bug
let stopScrolling = false;

window.addEventListener("touchmove", handleTouchMove, {
  passive: false
});

function handleTouchMove(e) {
  if (!stopScrolling) {
    return;
  }
  e.preventDefault();
}

function onTouchStart() {
  stopScrolling = true;
}

function onTouchEnd() {
  stopScrolling = false;
}

//Stor bug
function isInvalidPhone(input, message){
  $('.submit').removeClass('progress-bar progress-bar-striped progress-bar-animated bg-warning');
  input.addClass('is-invalid');
  $('#result').html('<div class="alert alert-danger p-1 mt-2">'+message+'</div>');

}

function isValidPhone(input){
  $('.submit').removeClass('progress-bar progress-bar-striped progress-bar-animated bg-warning');
  input.removeClass('is-invalid').addClass('is-valid');

}



