$(function(){
	//Aqui vai todo o código javaScript//
	$('nav.mobile').click(function(){
		//O que vai acontecer ao clicar no nav.mobile//
		var listaMenu = $('nav.mobile ul');
		//Abrir menu com fade in//
		//Mostrar lateralmente slideToggle//
		//Simplesmente mostrar ou não é show ou hide//
		if (listaMenu.is(':hidden')){
			var icone = $('.botao-menu-mobile').find('i');
			/*É o mesmo que var icone = $('.botao-menu-mobile i');*/
			icone.removeClass('fa-bars');
			icone.addClass('fa-times');
			listaMenu.fadeIn();
		}else{
			listaMenu.fadeOut();
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-times');
			icone.addClass('fa-bars');
		}
		
	})
	if ($('target').length > 0) {
		//O elemento existe, portanto preciso dar o scroll em algum lugar//
		var elemento = '#'+ $('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({'scrollTop':divScroll});
	}
})