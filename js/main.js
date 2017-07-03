var App = function () {
    return {

        wow: function () {
			wow = new WOW({
				boxClass:     'wow',     
				animateClass: 'animated',
				offset:       0,         
				mobile:       true,      
				live:         false       
		    }).init();
        },

        scrollNav: function () {
			/// Scroll en cabecera ///
			// Anima el menú cuando hay scroll
			$( window ).scroll(function(){
				var $cabecera = $('.cabecera');
				if( $(window).scrollTop() > 20){
					$cabecera.addClass('scroll');
				}else{
					$cabecera.removeClass('scroll');
				}
			});        	
			// Oculta y muestra el menú cuando hay scroll
			var $cabecera = $('.cabecera');
			var previousScroll = 0;
			$(window).scroll(function(event){
			   var scroll = $(this).scrollTop();
			   if (scroll > previousScroll && scroll > 400){
			       $cabecera.addClass('ocultar');
			       //Cierra el menú cuando hay scroll
					$(".navbar-collapse").removeClass("in").addClass("collapse");
					$(".hamburger").removeClass("is-active");
			   } else {
			      $cabecera.removeClass('ocultar');
			   }
			   previousScroll = scroll;
			});			
        },

        hamburguesa: function () {
			/// Hamburguesa ///
				$('.hamburger').click(function(){
					$(this).toggleClass('is-active');
				});
        },
		customScroll: function () {
   			$('.scrollbar-outer').scrollbar();
		},
        datepicker: function () {
        	
		    $.datepicker.regional['es'] = {
				 closeText: 'Cerrar',
				 prevText: '< Ant',
				 nextText: 'Sig >',
				 currentText: 'Hoy',
				 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
				 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
				 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
				 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
				 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
				 weekHeader: 'Sm',
				 dateFormat: 'dd/mm/yy',
				 firstDay: 1,
				 isRTL: false, 
				 showMonthAfterYear: false,
				 yearSuffix: ''
			 };

			$.datepicker.setDefaults($.datepicker.regional['es']);
			$(function () {
					$(".datepicker").datepicker();
			});
		},   
		customDropdown: function () {
			$('.filtros__top .dropdown-toggle').on('click', function (event) {
			    $(this).parent().toggleClass('open');
			    var parensiblings = $(this).parent().siblings()
			    if (parensiblings.hasClass('open')) {
			    	parensiblings.removeClass('open');
			    }
			});
			$('body').on('click', function (e) {
			    if (!$('.filtros__top .dropdown-toggle').is(e.target) 
			        && $('.filtros__top .dropdown-toggle').has(e.target).length === 0 
			        && $('.open').has(e.target).length === 0
			    ) {
			        $('.filtros__top .dropdown-toggle').parent().removeClass('open');
			    }
			});			
		},
        init: function () {
            App.wow();
            App.scrollNav();
            App.customScroll();
            App.hamburguesa();
            App.customDropdown();
        }
    }
}();
$(window).resize(function() {
  App.customScroll();
	console.log('resize');
});

jQuery(document).ready(function () {
    App.init();
});
