(function ($, window) {
	// Open and close the mobile menu
	$(".header .header__toggleItem").on("click", function () {
		menu_open_sp();
	});

	$(".mainBodyContent").on("click", function () {
		if (!$(this).hasClass("menu__openSp")) return;
		menu_open_sp();
	});

	function menu_open_sp() {
		$("body").toggleClass("mobile-menu-open");
		$(".header__menusp").toggleClass("active");
		$(".header__toggleItem").toggle();
		$(".mainBodyContent").toggleClass("menu__openSp");
	}

	$(".wpcf7-form").on("submit", function () {
		$('input[type="submit"]').addClass("pointer-events");
	});

	// submit error or success
	document.addEventListener(
		"wpcf7submit",
		function (event) {
			$('input[type="submit"]').removeClass("pointer-events");
		},
		false
	);
})(jQuery, window);
