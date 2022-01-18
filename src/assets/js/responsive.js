let lg = 1024
let xs = 376

let viewport = $('meta[name="viewport"]');

if (window.screen.availWidth <= lg || device.tablet()) {
	viewport.attr("content", "width=1024");
}
if (window.screen.availWidth <= xs || device.mobile()) {
	viewport.attr("content", "width=376");
}