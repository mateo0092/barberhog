
;(function($) {

	$('.barberhog-tab-nav a').on('click',function (e) {
		e.preventDefault();
		$(this).addClass('active').siblings().removeClass('active');
	});

	$('.barberhog-tab-nav .begin').on('click',function (e) {		
		$('.barberhog-tab-wrapper .begin').addClass('show').siblings().removeClass('show');
	});	
	$('.barberhog-tab-nav .actions, .barberhog-tab .actions').on('click',function (e) {		
		e.preventDefault();
		$('.barberhog-tab-wrapper .actions').addClass('show').siblings().removeClass('show');

		$('.barberhog-tab-nav a.actions').addClass('active').siblings().removeClass('active');

	});	
	$('.barberhog-tab-nav .support').on('click',function (e) {		
		$('.barberhog-tab-wrapper .support').addClass('show').siblings().removeClass('show');
	});	
	$('.barberhog-tab-nav .table').on('click',function (e) {		
		$('.barberhog-tab-wrapper .table').addClass('show').siblings().removeClass('show');
	});	


	$('.barberhog-tab-wrapper .install-now').on('click',function (e) {	
		$(this).replaceWith('<p style="color:#23d423;font-style:italic;font-size:14px;">Plugin installed and active!</p>');
	});	
	$('.barberhog-tab-wrapper .install-now.importer-install').on('click',function (e) {	
		$('.importer-button').show();
	});	


})(jQuery);
