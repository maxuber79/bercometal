/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'costaaustral\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-iso-200-2018': '&#xe90f;',
		'icon-iso-9001-2015': '&#xe910;',
		'icon-iso-14001-2015': '&#xe911;',
		'icon-iso-45001-2018': '&#xe912;',
		'icon-compass': '&#xe900;',
		'icon-cruise': '&#xe901;',
		'icon-eye': '&#xe902;',
		'icon-puzzle': '&#xe903;',
		'icon-value': '&#xe904;',
		'icon-boat': '&#xe905;',
		'icon-box-fish': '&#xe906;',
		'icon-box-hielo': '&#xe907;',
		'icon-box-ice': '&#xe908;',
		'icon-box-time': '&#xe909;',
		'icon-hielo': '&#xe90a;',
		'icon-pipe-fish': '&#xe90b;',
		'icon-planta': '&#xe90c;',
		'icon-red-fish': '&#xe90d;',
		'icon-truck': '&#xe90e;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
