<?php

/**
* @copyright
Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.

* @license
GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

?>

<script type="text/javascript">

/*
Standards Compliant Popup Script
Author : Kevin Cannon
http://www.multiblah.com
Last Edited: 12.12.2004
Version 1.0

Searches through a document for links with the class popup.
When clicked, this link will open in a popup window.
This means you don't have to add javascript to your code, 
and means the links continue to work, for search engines, 
and browsers without javascript

*/


function initPopups() {

//alert("hello");

if (!document.getElementById) return

var aLinks = document.getElementsByTagName('a');

for (var i = 0; i < aLinks.length; i++) { 
if (aLinks[i].className == 'popup' || aLinks[i].className == 'help popup') {

aLinks[i].onclick = function() {
var url = this.href;
openPopup(url);
return false;
} 
}
}
}

// popupWindow function
// This is where you set your specific height & width etc... for your popups.
function openPopup(url) { 
window.open(url, 'popupwindow', 'width=710,height=510,scrollbars,resizable'); 
return false;
}


// Piggy-back fucntion onto onLoad event ............................................
function addLoadEvent(func) {
var oldonload = window.onload;
if (typeof window.onload != 'function') {
window.onload = func;
} else {
window.onload = function() {
oldonload();
func();
}
}
}

addLoadEvent(initPopups);


/***********************************************
* Bookmark site script- © Dynamic Drive DHTML code library (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

/* Modified to support Opera */
function bookmarksite(title,url){
if (window.sidebar) // firefox
window.sidebar.addPanel(title, url, "");
else if(window.opera && window.print){ // opera
var elem = document.createElement('a');
elem.setAttribute('href',url);
elem.setAttribute('title',title);
elem.setAttribute('rel','sidebar');
elem.click();
} 
else if(document.all)// ie
window.external.AddFavorite(url, title);
}

</script>