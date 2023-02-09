$(document).ready(function () {


  $('.order-form button[type=submit]').text('Замовити');
  $('.order-form input[name=name_last]').val('Заказ').closest('.form-group').hide();

  var color;

  $(".js__choice").click( function(){
	   if( $(this).is(':checked') ) 
	   	color = $(this)[0].value,"checked";
	});


  // swap image

  var item = $(".choice-label"),
      crystal = $(".choice-color_crystal").closest('.choice-label').find("input").val('crystal'),
      white = $(".choice-color_aurora").closest('.choice-label').find("input").val('aurora'),
      black = $(".choice-color_black").closest('.choice-label').find("input").val('black');

  $(crystal).click(function(event) {
    $(".img1").addClass('visible-img');
    $(".img1").removeClass('hidden-img');
    $(".img2").addClass('hidden-img');
    $(".img2").removeClass('visible-img');
    $(".img3").addClass('hidden-img');
    $(".img3").removeClass('visible-img');
  });
  $(white).click(function(event) {
    $(".img1").addClass('hidden-img');
    $(".img1").removeClass('visible-img');
    $(".img2").removeClass('hidden-img');
    $(".img2").addClass('visible-img');
    $(".img3").addClass('hidden-img');
    $(".img3").removeClass('visible-img');
  });

  $(black).click(function(event) {
    $(".img1").addClass('hidden-img');
    $(".img1").removeClass('visible-img');
    $(".img2").removeClass('visible-img');
    $(".img2").addClass('hidden-img');
    $(".img3").addClass('visible-img');
    $(".img3").removeClass('hidden-img');
  });


  $('.order-form').submit(function (e) {
  	var price = $(this).closest('.product').find('.new-price p').text();

    $(".order-form input[name='comment']").val(color);
    $(".order-form input[name='features[price]']").val(price);
    $(".order-form input[name='features[qty]']").val(1);
  });
  	
});
