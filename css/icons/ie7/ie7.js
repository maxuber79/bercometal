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
		el.innerHTML = '<span style="font-family: \'bercometal\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-compass': '&#xe900;',
		'icon-eye': '&#xe902;',
		'icon-puzzle': '&#xe903;',
		'icon-value': '&#xe904;',
		'icon-building-1': '&#xe901;',
		'icon-building-2': '&#xe905;',
		'icon-beam': '&#xe906;',
		'icon-blueprint': '&#xe907;',
		'icon-building-3': '&#xe908;',
		'icon-ceiling-lamp': '&#xe909;',
		'icon-economic-architecture-building-of-stacked-containers': '&#xe90a;',
		'icon-glass-wall': '&#xe90b;',
		'icon-house-1': '&#xe90c;',
		'icon-house': '&#xe910;',
		'icon-lamp': '&#xe911;',
		'icon-modern-house': '&#xe912;',
		'icon-parquet': '&#xe913;',
		'icon-ruler': '&#xe90d;',
		'icon-sketch': '&#xe90e;',
		'icon-tools': '&#xe90f;',
		'icon-economic-architecture-building-of-stacked-containers1': '&#xe914;',
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
