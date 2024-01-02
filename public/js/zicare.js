const zicare = {
	ready: (callback) => {
		if (document.readyState !== "loading") callback();
		else document.addEventListener("DOMContentLoaded", callback);
	},
	loadJS(src, cb, ordered) {
		"use strict";
		let tmp,
			ref = document.getElementsByTagName("script")[0],
			script = document.createElement("script"),
			loaded = _.find(document.getElementsByTagName( "script" ), (o) => {
				return !_.isEmpty(o.src) && o.src===_.trim(window.location.origin,'/')+src;
			});
		
		if (loaded) {
			if (cb && typeof(cb) === "function") {
				cb();
			}
			return true;
		}
		
		if (typeof(cb) === 'boolean') {
			tmp = ordered;
			ordered = cb;
			cb = tmp;
		}
		
		script.src = src;
		script.async = !ordered;
		ref.parentNode.insertBefore(script, ref);
		
		if (cb && typeof(cb) === "function") {
			script.onload = cb;
		}
		return script;
	},
    vmPage: null
}