$(document).ready(function () {

  let maxLength = 170; // change the limit here
  $(".trim-text").each(function () {
    let myStr = $(this).text();
    let newStr = myStr.substring(0, maxLength);
    $(this).empty().html(newStr + '...');
  });

  $(".read-more").click(function () {
    $(this).siblings(".more-text").toggleClass('d-none');
    $(this).siblings(".more-text").hasClass('d-none') ? '' : ''
    if ($(this).siblings(".more-text").hasClass('d-none')) {
      $(this).before('... ');
      $(this).text('Read More');
    } else {
      $(this).before(' ');
      $(this).text('Less');
    }
  });

});