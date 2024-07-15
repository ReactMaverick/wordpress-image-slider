function setREVStartSize(e) {
    //window.requestAnimationFrame(function() {
    window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
    window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
    try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
            newh;
        pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
        e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
        if (e.layout === "fullscreen" || e.l === "fullscreen")
            newh = Math.max(e.mh, window.RSIH);
        else {
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
            e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

            var nl = new Array(e.rl.length),
                ix = 0,
                sl;
            e.tabw = e.tabhide >= pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
            e.tabh = e.tabhide >= pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
            var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
            newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
        }
        var el = document.getElementById(e.c);
        if (el !== null && el) el.style.height = newh + "px";
        el = document.getElementById(e.c + "_wrapper");
        if (el !== null && el) {
            el.style.height = newh + "px";
            el.style.display = "block";
        }
    } catch (e) {
        console.log("Failure at Presize of Slider:" + e)
    }
    //});
};

setREVStartSize({ c: 'rev_slider_17_2', rl: [1920, 1370, 850, 480], el: [], gw: [1300, 800, 600, 320], gh: [650, 550, 620, 500], type: 'standard', justify: '', layout: 'fullscreen', offsetContainer: '.touch .mkd-mobile-header', offset: '', mh: "0" }); if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider172"] !== undefined) { window.RS_MODULES.modules["revslider172"].once = false; window.revapi17_2 = undefined; if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal() }


		var tpj = jQuery;

		var revapi17, revapi17_2;

		if (window.RS_MODULES === undefined) window.RS_MODULES = {};
		if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
		RS_MODULES.modules["revslider171"] = {
			once: RS_MODULES.modules["revslider171"] !== undefined ? RS_MODULES.modules["revslider171"].once : undefined, init: function () {
				window.revapi17 = window.revapi17 === undefined || window.revapi17 === null || window.revapi17.length === 0 ? document.getElementById("rev_slider_17_1") : window.revapi17;
				if (window.revapi17 === null || window.revapi17 === undefined || window.revapi17.length == 0) { window.revapi17initTry = window.revapi17initTry === undefined ? 0 : window.revapi17initTry + 1; if (window.revapi17initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider171"].init() }); return; }
				window.revapi17 = jQuery(window.revapi17);
				if (window.revapi17.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_17_1"); return; }
				revapi17.revolutionInit({
					revapi: "revapi17",
					sliderLayout: "fullscreen",
					duration: 2500,
					visibilityLevels: "1920,1370,850,480",
					gridwidth: "1300,800,600,320",
					gridheight: "650,550,620,500",
					lazyType: "smart",
					perspectiveType: "local",
					responsiveLevels: "1920,1370,850,480",
					fullScreenOffsetContainer: ".touch .mkd-mobile-header",
					progressBar: { disableProgressBar: true },
					navigation: {
						mouseScrollNavigation: false,
						onHoverStop: false,
						arrows: {
							enable: true,
							style: "custom-2-3",
							hide_onmobile: true,
							hide_under: 1024,
							left: {
								v_offset: -34
							},
							right: {
								v_offset: -34
							}
						},
						bullets: {
							enable: true,
							tmp: "",
							style: "custom-2-3",
							hide_over: 1024,
							v_offset: 40,
							space: 10
						},
						thumbnails: {
							enable: true,
							tmp: "<span class=\"tp-thumb-image\"><span class=\"tp-thumb-shader\"><span class=\"tp-thumb-hover-title\">{{title}}<span></span></span>", // Title of the thumbnail
							style: "custom-2-3",
							hide_onmobile: true,
							hide_under: 1100,
							v_offset: 0,
							space: 20,
							width: 160,
							height: 110,
							wrapper_padding: 20,
							wrapper_color: "rgba(0,0,0,0.50)",
							visibleAmount: 8,
							span: true
						}
					},
					parallax: {
						levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
						type: "mouse"
					},
					fanim: {
						in: { "o": 0 },
						out: { "a": false },
						speed: 300
					},
					viewPort: {
						global: true,
						globalDist: "-200px",
						enable: false,
						visible_area: "20%"
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid: true
					},
				});

			}
		} // End of RevInitScript

		if (window.RS_MODULES === undefined) window.RS_MODULES = {};
		if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
		RS_MODULES.modules["revslider172"] = {
			once: RS_MODULES.modules["revslider172"] !== undefined ? RS_MODULES.modules["revslider172"].once : undefined, init: function () {
				window.revapi17_2 = window.revapi17_2 === undefined || window.revapi17_2 === null || window.revapi17_2.length === 0 ? document.getElementById("rev_slider_17_2") : window.revapi17_2;
				if (window.revapi17_2 === null || window.revapi17_2 === undefined || window.revapi17_2.length == 0) { window.revapi17_2initTry = window.revapi17_2initTry === undefined ? 0 : window.revapi17_2initTry + 1; if (window.revapi17_2initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider172"].init() }); return; }
				window.revapi17_2 = jQuery(window.revapi17_2);
				if (window.revapi17_2.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_17_2"); return; }
				revapi17_2.revolutionInit({
					revapi: "revapi17_2",
					sliderLayout: "fullscreen",
					duration: 2500, // Duration of the transition
					visibilityLevels: "1920,1370,850,480",
					gridwidth: "1300,800,600,320",
					gridheight: "650,550,620,500",
					lazyType: "smart",
					perspectiveType: "local",
					responsiveLevels: "1920,1370,850,480",
					fullScreenOffsetContainer: ".touch .mkd-mobile-header",
					progressBar: { disableProgressBar: true },
					navigation: {
						mouseScrollNavigation: false, // Enable/Disable mouse scroll navigation
						onHoverStop: false, // Enable/Disable Stop on Hover
						arrows: {
							enable: true, // Enable/Disable arrows
							style: "custom-2-3",
							hide_onmobile: true, // Hide arrows on mobile
							hide_under: 1024, // Hide arrows under screen width
							left: {
								v_offset: -34
							},
							right: {
								v_offset: -34,
								h_offset: 0
							}
						},
						bullets: {
							enable: true,
							tmp: "",
							style: "custom-2-3",
							hide_over: 1024,
							v_offset: 40,
							space: 10
						},
						thumbnails: {
							enable: true,
							tmp: "<span class=\"tp-thumb-image\"><span class=\"tp-thumb-shader\"><span class=\"tp-thumb-hover-title\">{{title}}<span></span></span>", // Thumbnail HTML
							style: "custom-2-3",
							hide_onmobile: true, // Hide thumbnails on mobile
							hide_under: 1100, // Hide thumbnails under screen width
							v_offset: 0,
							space: 20, // Space between thumbnails
							width: 160, // Thumbnail width
							height: 110, // Thumbnail height
							wrapper_padding: 20, // Padding of the wrapper
							wrapper_color: "rgba(0,0,0,0.50)",
							visibleAmount: 8, // Amount of visible thumbnails
							span: true
						}
					},
					parallax: {
						levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
						type: "mouse"
					},
					fanim: {
						in: { "o": 0 },
						out: { "a": false },
						speed: 300
					},
					viewPort: {
						global: true,
						globalDist: "-200px",
						enable: false,
						visible_area: "20%"
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid: true
					},
				});
				var revapi17 = revapi17_2;

			}
		} // End of RevInitScript

		if (window.RS_MODULES.checkMinimal !== undefined) { window.RS_MODULES.checkMinimal(); };
	