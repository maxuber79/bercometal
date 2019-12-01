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
		'icon-building-1': '&#xe900;',
		'icon-building-2': '&#xe901;',
		'icon-beam': '&#xe902;',
		'icon-blueprint': '&#xe903;',
		'icon-building-3': '&#xe904;',
		'icon-ceiling-lamp': '&#xe905;',
		'icon-economic-architecture-building-of-stacked-containers': '&#xe906;',
		'icon-glass-wall': '&#xe907;',
		'icon-house-1': '&#xe908;',
		'icon-house': '&#xe909;',
		'icon-lamp': '&#xe90a;',
		'icon-modern-house': '&#xe90b;',
		'icon-parquet': '&#xe90c;',
		'icon-ruler': '&#xe90d;',
		'icon-sketch': '&#xe90e;',
		'icon-tools': '&#xe90f;',
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
