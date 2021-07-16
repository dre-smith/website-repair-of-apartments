$(document).ready(function() {
  
  $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
          $('.scrollup').fadeIn();
      } else {
          $('.scrollup').fadeOut();
      }
      });
        
      $('.scrollup').click(function() {
      $("html, body").animate({scrollTop: 0}, 600);
      return false;
  });
});

$(document).ready(function() {
  $('#brif-form').validate({
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      phone: {
        required: true
      },
      email: {
        required: true,
        email: true
      }
    },
    errorElement: "div",
    errorClass: "invalid",
    messages: {
      username: {
        required: "&#10006; Заполните поле",
        minlength: jQuery.validator.format("&#10006; Имя не может быть короче 3 букв"),
        maxlength: jQuery.validator.format("&#10006; Недопустимое значение")
      },
      phone: {
        required: "&#10006; Заполните поле"
      },
      email: {
        required: "&#10006; Заполните поле",
        email: "&#10006; Введите корректный e-mail"
      },
    }
  });

  $('#modal__form').validate({
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      phone: {
        required: true
      },
    },
    errorElement: "div",
    errorClass: "invalid-third",
    messages: {
      username: {
        required: "&#10006; Заполните поле",
        minlength: jQuery.validator.format("&#10006; Имя не может быть короче 3 букв"),
        maxlength: jQuery.validator.format("&#10006; Недопустимое значение")
      },
      phone: {
        required: "&#10006; Заполните поле"
      },
    }
  });

  $('#offer__form').validate({
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      phone: {
        required: true
      }
    },
    errorElement: "div",
    errorClass: "invalid-second",
    messages: {
      username: {
        required: "&#10006; Заполните поле",
        minlength: jQuery.validator.format("&#10006; Имя не может быть короче 3 букв"),
        maxlength: jQuery.validator.format("&#10006; Недопустимое значение")
      },
      phone: {
        required: "&#10006; Заполните поле"
      },
    },
  });

  $('.phone').mask('8 (999) 999-99-99');
});

var steps = $('.steps');
var stepsTop = steps.offset().top;
$(window).bind('scroll', function () {
  var windowTop = $(this).scrollTop();
  if (windowTop > stepsTop) {
    $('#map').html('<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaf3b67336545ec1b35ad24b8cf04d63cd23464353547b9f004cc44e59b73e066&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false"></script>')
    $(window).unbind('scroll')
  }
});

$(document).ready(function() {
  $('.slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('.arrows__left'),
    nextArrow: $('.arrows__right'),
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });	
});

$(document).ready(function() {
new WOW().init();
});