!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});

$(document).ready(function () {

  redirectUrl = "http://site.camera"; // Сайт на который будет производиться редирект, менять нужно только тут, сработает на всех формах

  if ($('.menu-buttons').children().length <= 4) {
    $('.show-all-menu a').hide();
  };
  var heightMenu = $('.menu-buttons').outerHeight() + 20;
  $('.menu-buttons').height(heightMenu);
  $('.menu-buttons').addClass('closed');
    $('.show-all-menu a').click( function(){
      if ( $('.menu-buttons').hasClass('closed') ) {
        // var heightMenu = ($('.menu-buttons').children().length*270)/($('.menu-buttons').children().length/2);
          // $('ul.menu-buttons').animate({height: heightMenu+"px"}, 300);
        //     console.log( heightMenu +' '+ $('.menu-buttons').children().length);
        $(this).text('Свернуть');
        $('.menu-buttons').removeClass('closed').addClass('opened');
      }
      else{
        // var heightMenu = 270;
          // $('ul.menu-buttons').animate({height: 270}, 300);
        $(this).text('Показать все');
        $('.menu-buttons').removeClass('opened').addClass('closed');
      };
        return false;
    });

    $('a.callback').click( function(){
      $('#callback').css('display', 'block').animate({
        opacity: 1
      },
        200, function() {
        $('#callbackform').animate({marginTop: 18+'%'}, 300);
      });
      return false;
    });
    $('.callback-bg').click( function(){
      $('#callback').animate({
        opacity: 0
      },
        400, function() {
        $('#callback').css('display', 'none')
        $('#callbackform').animate({marginTop: "-"+12+'%'}, 300);
      });
      return false;
    });

    $('.faq-instructions-buttons li').click(function(){
      var self = $(this);
      var url = self.children('a').attr('href');
      var d = self.find('.hidden-content');

      if ( !d.children('span.please-wait').length ) {
        d.html('<span class="please-wait"><span class="please-wait-icon"></span> Пожалуйста подождите...</span>');
      };
      if (self.hasClass('active')) {
        d.removeAttr('style');
        self.removeClass('active');
      } else {
        $('.hidden-content').removeAttr('style');
        $('.faq-instructions-buttons li.active').removeClass('active');
        $.get(url, function(html){
          var s = $(html);
          d.empty().append(s).css('height', s.outerHeight());
          console.log(s.outerHeight());
        });
        self.addClass('active');
      };
      return false;
    });

    $("#phone").mask("+7 (999) 999-9999");

    // Форма под шапкой
 //    $('body').on("click",'.submit-head', function(event){
  // if ($('#email').val() ==""){
  //  $('#email').attr({placeholder: 'Поле не заполнено'});
  //  return false;
  // }
  // if  (!$('#email').val() =="") {
  //  var regEmail = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;
  //  var validEmail = $('#email').val().match(regEmail);
  //  if (!validEmail){
  //       $('#email').val("");
  //        $('#email').attr({placeholder: 'Введите правильный Email'});
  //  return false;
  //  }
  // }
  //  event.preventDefault();
 //     $.ajax({
 //       url: "send.php",
 //       type: "POST",
 //       data: {
  //      topemail: $('#email').val()
  //    },
 //       success: function(response) {
 //         window.location.href = redirectUrl;
 //       },
 //       error: function(response) {
 //         $("#topform").empty();
 //           $("#topform").append("<div class='failed'><span>Заявка не отправлена!</span><span>Приносим свои извинения, произошла ошибка по независящим от нас причинам!</span><span>Попробуйте позже или свяжитесь с нами по телефону.</span></div>");
  //      }
  //  });
  // });

  // Форма на странице
 //    $('body').on("click",'.submit-middle', function(event){
  // if ($('#middleemail').val() ==""){
  //  $('#middleemail').attr({placeholder: 'Поле не заполнено'});
  //  return false;
  // }
  // if  (!$('#middleemail').val() =="") {
  //  var regEmail = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;
  //  var validEmail = $('#middleemail').val().match(regEmail);
  //  if (!validEmail){
  //       $('#middleemail').val("");
  //        $('#middleemail').attr({placeholder: 'Введите правильный Email'});
  //  return false;
  //  }
  // }
  //  event.preventDefault();
 //     $.ajax({
 //       url: "send.php",
 //       type: "POST",
 //       data: {
  //      middleemail: $('#middleemail').val()
  //    },
 //       success: function(response) {
 //         window.location.href = redirectUrl;
 //       },
 //       error: function(response) {
 //         $("#middleform").empty();
 //           $("#middleform").append("<div class='failed'><span>Заявка не отправлена!</span><span>Приносим свои извинения, произошла ошибка по независящим от нас причинам!</span><span>Попробуйте позже или свяжитесь с нами по телефону.</span></div>");
  //      }
  //  });
  // });

  // Форма отправки сообщения
    $('body').on("click",'.submit-footer', function(event){
  if ($('#footeremail').val() ==""){
    $('#footeremail').attr({placeholder: 'Поле не заполнено'});
    return false;
  }
  if ($('#message').val() ==""){
    $('#message').attr({placeholder: 'Поле не заполнено'});
    return false;
  }
  if  (!$('#footeremail').val() =="") {
    var regEmail = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/;
    var validEmail = $('#footeremail').val().match(regEmail);
    if (!validEmail){
        $('#footeremail').val("");
         $('#footeremail').attr({placeholder: 'Введите правильный Email'});
    return false;
    }
  }
    event.preventDefault();
      $.ajax({
        url: "send.php",
        type: "POST",
        data: {
        footeremail: $('#footeremail').val(),
        message: $('#message').val()
      },
        success: function(response) {
          window.location.href = redirectUrl;
        },
        error: function(response) {
          $("#footerform").empty();
            $("#footerform").append("<div class='failed'><span>Заявка не отправлена!</span><span>Приносим свои извинения, произошла ошибка по независящим от нас причинам!</span><span>Попробуйте позже или свяжитесь с нами по телефону.</span></div>");
        }
    });
  });
  // Форма запроса обратного звонка
 //    $('body').on("click",'.submit-callback', function(event){
  // if ($('#phone').val() ==""){
  //  $('#phone').attr({placeholder: 'поле не заполнено'});
  //  return false;
  // }
  //  event.preventDefault();
 //     $.ajax({
 //       url: "send.php",
 //       type: "POST",
 //       data: {
  //      phone: $('#phone').val()
  //    },
 //       success: function(response) {
 //         $("#callbackform").empty();
 //           $("#callbackform").append("<div class='success'><span>Спасибо за заявку!</span>Мы свяжемся с Вами в ближайшее время</div>");
 //           setTimeout( function(){
 //             $('#callback').animate({
 //           opacity: 0
 //         },
 //           400, function() {
 //           $('#callback').css('display', 'none')
 //           $('#callbackform').animate({marginTop: "-"+12+'%'}, 300);
 //         });
 //         return false;
 //           },5000 );
 //       },
 //       error: function(response) {
 //         $("#callbackform").empty();
 //           $("#callbackform").append("<div class='failed'><span>Заявка не отправлена!</span><span>Приносим свои извинения, произошла ошибка по независящим от нас причинам!</span><span>Попробуйте позже или свяжитесь с нами по телефону.</span></div>");
  //      }
  //  });
  // });
});
