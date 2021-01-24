jQuery(document).ready(function($) {

function Tabs() {
  var tablinks = $(".w-tab-links");
  var tabcontent = $(".w-tab-panel");
  var blockDirect = $(".second-screen .screen-content");
  tablinks.on('click', function () {
  tabcontent.removeClass("w--tab-active");
  tablinks.removeClass("w--current");
  $(this).addClass("w--current");
  var dataTab=$(this).data("w-tab");                                     //  выбор контента соответствующего Табу
  $(".w-tab-panel[data-w-tab='"+dataTab+"']").addClass("w--tab-active");
  });
  var interval=setInterval(intervalId, 5000);
  function intervalId() {
        var onTab = tablinks.filter('.w--current');
        var nextTab = onTab.index() < tablinks.length-1 ? onTab.next() : tablinks.first();
        nextTab.click();
    };
  blockDirect.hover(function(ev){
    clearInterval(interval);
  }, function(ev){
    interval = setInterval( intervalId, 5000);
  });  
}
Tabs();

$('.customer-slider').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 7,
slidesToScroll: 1,
adaptiveHeight: true,
prevArrow: $('.sixth-screen .btn-block .prev'),
nextArrow: $('.sixth-screen .btn-block .next'),
responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 5
      }
    },
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});
 
 $('.burger').on('click',function(e){
 	e.preventDefault;
 	$(this).toggleClass('burger-active').closest('.header').toggleClass('active').find('.mobile-menu').slideToggle();

 });

});