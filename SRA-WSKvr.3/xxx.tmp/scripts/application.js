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
  if ( menu_open=true)
          closeMenu();
        } else {
          openMenu();
        }
console.log('menu is...');
console.log(menu_open);
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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJhcHBsaWNhdGlvbi5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyIvL2FsZXJ0KFwibG9hZGVkIG9rXCIpO1xuY29uc29sZS5sb2coXCIhISEhISEhISEhRlJPRyEhISEhISEhISEhISFcIik7XG4vLyAkKCcuZHJvcGRvd24tdG9nZ2xlJykuZHJvcGRvd24oKVxuJCgnLmNvbGxhcHNlJykuY29sbGFwc2UoJ3Nob3cnKVxuJCgnI215TW9kYWwnKS5tb2RhbCgnaGlkZScpXG4vLyQoJy50eXBlYWhlYWQnKS50eXBlYWhlYWQoKVxuJCgnLnRhYnMnKS5idXR0b24oKVxuJCgnLnRpcCcpLnRvb2x0aXAoKVxuJChcIi5hbGVydC1tZXNzYWdlXCIpLmFsZXJ0KClcbnZhciAgbWVudV9vcGVuPWZhbHNlO1xuXG5cblxuZnVuY3Rpb24gb25DbGlja01lbnUoKSB7XG4gICAgICAgIC8vaWYgKHBhcnNlSW50KGpRdWVyeSgnLmJvZHknKS5jc3MoJ2xlZnQnKSkgPj0gODApIHtcbiAgaWYgKCBtZW51X29wZW49dHJ1ZSlcbiAgICAgICAgICBjbG9zZU1lbnUoKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICBvcGVuTWVudSgpO1xuICAgICAgICB9XG5jb25zb2xlLmxvZygnbWVudSBpcy4uLicpO1xuY29uc29sZS5sb2cobWVudV9vcGVuKTtcbiAgICAgIH1cblxuICAgICAgZnVuY3Rpb24gb25DbGlja0NvdmVyKCkge1xuICAgICAgICBjbG9zZU1lbnUoKTtcbiAgICAgIH1cbiAgICAgIHZhciBzY3JvbGxQb3M7XG5cbiAgICAgIGZ1bmN0aW9uIG9wZW5NZW51KCkge1xuICAgICAgICBzY3JvbGxQb3MgPSBqUXVlcnkoJ2JvZHknKS5zY3JvbGxUb3AoKTtcbiAgICAgICAgalF1ZXJ5KCcud3JhcHBlcicpLmFuaW1hdGUoe1xuICAgICAgICAgIGxlZnQ6ICc4MCUnXG4gICAgICAgIH0pO1xuICAgICAgICBqUXVlcnkoJy5tb2JpbGUtbWVudS1iYXInKS5hbmltYXRlKHtcbiAgICAgICAgICBsZWZ0OiAnODAlJ1xuICAgICAgICB9KTtcbiAgICAgICAgalF1ZXJ5KCcub2ZmLXNjcmVlbi1sZWZ0JykuY3NzKCdkaXNwbGF5JywgJ2Jsb2NrJyk7XG4gICAgICAgIGpRdWVyeSgnYm9keScpLmNzcyh7XG4gICAgICAgICAgcG9zaXRpb246ICdmaXhlZCcsXG4gICAgICAgICAgdG9wOiAtKGRvY3VtZW50LmJvZHkuc2Nyb2xsVG9wKVxuICAgICAgICB9KTtcbiAgICAgICAgalF1ZXJ5KCdodG1sJykuY3NzKHtcbiAgICAgICAgICBwb3NpdGlvbjogJ2ZpeGVkJyxcbiAgICAgICAgICB0b3A6IC0oZG9jdW1lbnQuYm9keS5zY3JvbGxUb3ApXG4gICAgICAgIH0pO1xuICAgICAgICBqUXVlcnkoXCIuYm9keVwiKS5vbihcInRvdWNobW92ZVwiLCBmYWxzZSk7XG4gICAgICAgIGpRdWVyeSgnLmNvdmVyJykuZmFkZUluKCk7XG4gICAgICAgICAgbWVudV9vcGVuPXRydWU7XG4gICAgICB9XG5cbiAgICAgIGZ1bmN0aW9uIGNsb3NlTWVudSgpIHtcbiAgICAgICAgalF1ZXJ5KCcud3JhcHBlcicpLmFuaW1hdGUoe1xuICAgICAgICAgIGxlZnQ6ICcwJSdcbiAgICAgICAgfSk7XG4gICAgICAgIGpRdWVyeSgnLm1vYmlsZS1tZW51LWJhcicpLmFuaW1hdGUoe1xuICAgICAgICAgIGxlZnQ6ICcwJSdcbiAgICAgICAgfSwgZnVuY3Rpb24oKSB7XG4gICAgICAgICAgalF1ZXJ5KCcub2ZmLXNjcmVlbi1sZWZ0JykuY3NzKCdkaXNwbGF5JywgJ25vbmUnKTtcbiAgICAgICAgfSk7XG4gICAgICAgIGpRdWVyeSgnYm9keScpLmNzcyh7XG4gICAgICAgICAgcG9zaXRpb246ICdpbmhlcml0J1xuICAgICAgICB9KTtcbiAgICAgICAgalF1ZXJ5KCdodG1sJykuY3NzKHtcbiAgICAgICAgICBwb3NpdGlvbjogJ2luaGVyaXQnXG4gICAgICAgIH0pO1xuICAgICAgICBqUXVlcnkoJ2JvZHknKS5zY3JvbGxUb3Aoc2Nyb2xsUG9zKTtcbiAgICAgICAgalF1ZXJ5KFwiLmJvZHlcIikub2ZmKFwidG91Y2htb3ZlXCIsIGZhbHNlKTtcbiAgICAgICAgalF1ZXJ5KCcuY292ZXInKS5mYWRlT3V0KCk7XG4gICAgICAgICAgIG1lbnVfb3Blbj1mYWxzZTtcbiAgICAgIH1cbiAgICAgIGpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG4gICAgICAgIC8vaW5pdCBwYXJyYWxheFxuICAgICAgICAvL3ZhciBza3IgPSBza3JvbGxyLmluaXQoKTtcbiAgICAgICAgLy9hbmltYXRlIHBvaW50ZXJcbiAgICAgICAgLyp2YXIgT0ZGU0VUX0NPTlNUID0gMzA7XG4gICAgICAgIHZhciBvcmlnaW5hbExlZnQgPSBqUXVlcnkoJ25hdiB1bCAuY3VycmVudCcpLnBvc2l0aW9uKCkubGVmdCArIE9GRlNFVF9DT05TVDtcbiAgICAgICAgalF1ZXJ5KCcucG9pbnRlcicpLmFuaW1hdGUoe2xlZnQ6IG9yaWdpbmFsTGVmdH0sIDUwMCwnZWFzZU91dEN1YmljJyk7XG4gICAgICAgIGpRdWVyeSgnbmF2IC5uYXYgbGknKS5tb3VzZW92ZXIoZnVuY3Rpb24oKSB7XG4gICAgICAgIC8vc3RvcCBjdXJyZW50IGFuaW1hdGlvblxuICAgICAgICBqUXVlcnkoJy5wb2ludGVyJykuc3RvcCh0cnVlLGZhbHNlKTtcbiAgICAgICAgdmFyIGxlZnQgPSBqUXVlcnkodGhpcykucG9zaXRpb24oKS5sZWZ0ICsgT0ZGU0VUX0NPTlNUO1xuICAgICAgICBqUXVlcnkoJy5wb2ludGVyJykuYW5pbWF0ZSh7bGVmdDogbGVmdH0sIDUwMCwnZWFzZU91dEN1YmljJyk7XG4gICAgICAgIH0pO1xuICAgICAgICBqUXVlcnkoJ25hdiAubmF2JykubW91c2VsZWF2ZShmdW5jdGlvbigpIHtcbiAgICAgICAgalF1ZXJ5KCcucG9pbnRlcicpLnN0b3AodHJ1ZSxmYWxzZSk7XG4gICAgICAgIGpRdWVyeSgnLnBvaW50ZXInKS5hbmltYXRlKHtsZWZ0OiBvcmlnaW5hbExlZnR9LCA3MDAsJ2Vhc2VPdXRDdWJpYycpO1xuICAgICAgICB9KTsqL1xuICAgICAgICAvL3N0aWNreSBtZW51XG4gICAgICAgIC8qalF1ZXJ5KGZ1bmN0aW9uKCkge1xuICAgICAgICB2YXIgbWVudU9mZnNldCA9IGpRdWVyeSgnLm5hdmlnYXRpb24nKVswXS5vZmZzZXRUb3A7XG4gICAgICAgIGpRdWVyeShkb2N1bWVudCkuYmluZCgncmVhZHkgc2Nyb2xsJywgZnVuY3Rpb24oKSB7XG4gICAgICAgIHZhciBkb2NTY3JvbGwgPSBqUXVlcnkoZG9jdW1lbnQpLnNjcm9sbFRvcCgpO1xuICAgICAgICBpZihkb2NTY3JvbGwgPj0gbWVudU9mZnNldCkge1xuICAgICAgICBqUXVlcnkoJy5uYXZpZ2F0aW9uJykuYWRkQ2xhc3MoJ25hdi1zdGlja3knKS5jc3MoJ3dpZHRoJywnMTAwJScpO1xuICAgICAgICBqUXVlcnkoJy5uYXZpZ2F0aW9uJykucGFyZW50KCkubmV4dCgpLmNzcygnbWFyZ2luLXRvcCcsIGpRdWVyeSgnLm5hdmlnYXRpb24nKS5oZWlnaHQoKSk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgIGpRdWVyeSgnLm5hdmlnYXRpb24nKS5yZW1vdmVDbGFzcygnbmF2LXN0aWNreScpLnJlbW92ZUF0dHIoJ3dpZHRoJyk7XG4gICAgICAgIGpRdWVyeSgnLm5hdmlnYXRpb24nKS5wYXJlbnQoKS5uZXh0KCkuY3NzKCdtYXJnaW4tdG9wJywnMCcpO1xuICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgICAgICB9KTsqL1xuICAgICAgfSk7XG5cblxuXG5cblxuXG5cblxuY29uc29sZS5sb2coXCIhISEhISEhISEhRFVDSyEhISEhISEhISEhISFcIik7Il0sImZpbGUiOiJhcHBsaWNhdGlvbi5qcyJ9
