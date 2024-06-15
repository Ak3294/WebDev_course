// Javascript file

$(document).ready(function () {

  $('#menu').click(function () {
    $(this).toggleClass('fa-times');
    $('header').toggleClass('toggle');
  });

  $(window).on('scroll load', function () {

    $('#menu').removeClass('fa-times');
    $('header').removeClass('toggle');

    if ($(window).scrollTop() > 0) {
      $('.top').show();
    } else {
      $('.top').hide();
    }

  });

  // smooth scrolling 

  $('a[href*="#"]').on('click', function (e) {

    e.preventDefault();

    $('html, body').animate({

      scrollTop: $($(this).attr('href')).offset().top,

    },
      500,
      'linear'
    );

  });

});

function message() {
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  var project = document.getElementById('project');
  var message = document.getElementById('message');

  const success = document.getElementById('success');
  const danger = document.getElementById('danger');

  if (name.value === ' ' || email.value === '' || project.value === '' || message.value === '') {
    danger.style.display = 'block';
  }
  else {
  }
}




