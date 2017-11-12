//alert("loaded ok");
console.log("!!!!!!!!!!FROG!!!!!!!!!!!!!");
// $('.dropdown-toggle').dropdown()
$('.collapse').collapse('show')
$('#myModal').modal('hide')
//$('.typeahead').typeahead()
$('.tabs').button()
$('.tip').tooltip()
$(".alert-message").alert()
var  menu_open=false;



function onClickMenu() {
        //if (parseInt(jQuery('.body').css('left')) >= 80) {
  if(menu_open==false){
          openMenu();
        }else{
          closeMenu();
        }
      }

      function onClickCover() {
        closeMenu();
      }
      var scrollPos;

      function openMenu() {
        scrollPos = jQuery('body').scrollTop();
        jQuery('.wrapper').animate({
          left: '80%'
        });
        jQuery('.mobile-menu-bar').animate({
          left: '80%'
        });
        jQuery('.off-screen-left').css('display', 'block');
        jQuery('body').css({
          position: 'fixed',
          top: -(document.body.scrollTop)
        });
        jQuery('html').css({
          position: 'fixed',
          top: -(document.body.scrollTop)
        });
        jQuery(".body").on("touchmove", false);
        jQuery('.cover').fadeIn();
          menu_open=true;
      }

      function closeMenu() {
        jQuery('.wrapper').animate({
          left: '0%'
        });
        jQuery('.mobile-menu-bar').animate({
          left: '0%'
        }, function() {
          jQuery('.off-screen-left').css('display', 'none');
        });
        jQuery('body').css({
          position: 'inherit'
        });
        jQuery('html').css({
          position: 'inherit'
        });
        jQuery('body').scrollTop(scrollPos);
        jQuery(".body").off("touchmove", false);
        jQuery('.cover').fadeOut();
           menu_open=false;
      }
      jQuery(document).ready(function() {
        //init parralax
        //var skr = skrollr.init();
        //animate pointer
        /*var OFFSET_CONST = 30;
        var originalLeft = jQuery('nav ul .current').position().left + OFFSET_CONST;
        jQuery('.pointer').animate({left: originalLeft}, 500,'easeOutCubic');
        jQuery('nav .nav li').mouseover(function() {
        //stop current animation
        jQuery('.pointer').stop(true,false);
        var left = jQuery(this).position().left + OFFSET_CONST;
        jQuery('.pointer').animate({left: left}, 500,'easeOutCubic');
        });
        jQuery('nav .nav').mouseleave(function() {
        jQuery('.pointer').stop(true,false);
        jQuery('.pointer').animate({left: originalLeft}, 700,'easeOutCubic');
        });*/
        //sticky menu
        /*jQuery(function() {
        var menuOffset = jQuery('.navigation')[0].offsetTop;
        jQuery(document).bind('ready scroll', function() {
        var docScroll = jQuery(document).scrollTop();
        if(docScroll >= menuOffset) {
        jQuery('.navigation').addClass('nav-sticky').css('width','100%');
        jQuery('.navigation').parent().next().css('margin-top', jQuery('.navigation').height());
        } else {
        jQuery('.navigation').removeClass('nav-sticky').removeAttr('width');
        jQuery('.navigation').parent().next().css('margin-top','0');
        }
        });
        });*/
      });








console.log("!!!!!!!!!!DUCK!!!!!!!!!!!!!");