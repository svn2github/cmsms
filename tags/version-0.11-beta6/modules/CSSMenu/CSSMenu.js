function IEHoverPseudo() {

	if (document.getElementById("primary-nav") != null) {
		var navItems = document.getElementById("primary-nav").getElementsByTagName("li");
		
		for (var i=0; i<navItems.length; i++) {
			if(navItems[i].className == "menuparent") {
				navItems[i].onmouseover=function() { this.className += " over"; }
				navItems[i].onmouseout=function() { this.className = "menuparent"; }
			}
		}
	}
}
window.onload = IEHoverPseudo;