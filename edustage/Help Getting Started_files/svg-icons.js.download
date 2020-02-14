/**
#########################################################################################################
# DESCRIPTION: Javascript for SVG Icons						                                            #
#########################################################################################################  
*/
(function(){
  var _container, xmlData;

  function initSvg(){
    this._container = document.getElementById("svg-data");
    if(typeof(Storage) !== "undefined" && isStorageAvailable() && sessionStorage.svghtml) {
        renderSvgs(sessionStorage.svghtml);
    }
    else{
      if(this._container){
          var filePath = this._container.getAttribute("data-svg-path");
          ajaxGet(filePath, renderSvgs);
      }
    }
  }

  function ajaxGet (path, callback, acceptedType){
    var request;
    if (window.XDomainRequest) {
        request = new XDomainRequest();
    }
    else if (window.XMLHttpRequest) {
       request = new XMLHttpRequest();
    }
    else {
        request = new ActiveXObject('Microsoft.XMLHTTP');
    }

    request.open('GET', path);
    request.onload = function(){
      if(request.responseText && request.responseText.length > 0){
        if(callback){
          callback(request.responseText);
        }
      }
    };
    if(acceptedType){
      request.setRequestHeader('Accept', acceptedType);
    }
    request.send();
  }

  function renderSvgs(content){
    if(isStorageAvailable()){
      sessionStorage.svghtml = content;
    }
    if(content && content.length && this._container){
      this._container.innerHTML = content;
    }
  }

  function isStorageAvailable(){
      var test = 'test';
      try {
          sessionStorage.setItem(test, test);
          sessionStorage.removeItem(test);
          return true;
      } catch(e) {
          return false;
      }
  }

  function getBrowserDetails() {
      var nVer         = navigator.appVersion;
      var nAgt         = navigator.userAgent;
      var browserName  = navigator.appName;
      var fullVersion  = ''+parseFloat(navigator.appVersion);
      var majorVersion = parseInt(navigator.appVersion,10);
      var nameOffset,verOffset,ix;

      // In Opera, the true version is after "Opera" or after "Version"
      if ((verOffset = nAgt.indexOf('Opera')) !== -1) {
       browserName = 'Opera';
       fullVersion = nAgt.substring(verOffset + 6);
       if ((verOffset = nAgt.indexOf('Version')) !== -1)
         fullVersion = nAgt.substring(verOffset + 8);
      }
      // In MSIE, the true version is after "MSIE" in userAgent
      else if (((verOffset = nAgt.indexOf('MSIE')) !== -1) || ((verOffset = nAgt.indexOf('Edge')) !== -1)) {
       browserName = 'MSIE';
       fullVersion = nAgt.substring(verOffset + 5);
      }
      // In Chrome, the true version is after "Chrome"
      else if ((verOffset = nAgt.indexOf('Chrome')) !== -1) {
       browserName = 'Chrome';
       fullVersion = nAgt.substring(verOffset + 7);
      }
      // In Safari, the true version is after "Safari" or after "Version"
      else if ((verOffset = nAgt.indexOf('Safari')) !== -1) {
       browserName = 'Safari';
       fullVersion = nAgt.substring(verOffset + 7);
       if ((verOffset = nAgt.indexOf('Version')) !== -1)
         fullVersion = nAgt.substring(verOffset + 8);
      }
      // In Firefox, the true version is after "Firefox"
      else if ((verOffset = nAgt.indexOf('Firefox')) !== -1) {
       browserName = 'Firefox';
       fullVersion = nAgt.substring(verOffset + 8);
      }
      // In most other browsers, "name/version" is at the end of userAgent
      else if ( (nameOffset = nAgt.lastIndexOf(' ') + 1) < (verOffset = nAgt.lastIndexOf('/')) ) {
       browserName = nAgt.substring(nameOffset,verOffset);
       fullVersion = nAgt.substring(verOffset + 1);
       if (browserName.toLowerCase() === browserName.toUpperCase()) {
        browserName = navigator.appName;
       }
      }

      // trim the fullVersion string at semicolon/space if present
      if ((ix = fullVersion.indexOf(';')) !== -1)
         fullVersion = fullVersion.substring(0, ix);
      if ((ix = fullVersion.indexOf(' ')) !== -1)
         fullVersion = fullVersion.substring(0, ix);

      majorVersion = parseInt('' + fullVersion, 10);
      if (isNaN(majorVersion)) {
       fullVersion  = '' + parseFloat(navigator.appVersion);
       majorVersion = parseInt(navigator.appVersion,10);
      }

      //catch for IE11+
      if(navigator.appName === 'Netscape') {
        var re = new RegExp('Trident/.*rv:([0-9]{1,}[\.0-9]{0,})');
        if (re.exec(nAgt) !== null) {
          browserName = 'MSIE';
          fullVersion = parseFloat( RegExp.$1 );
        }
      }

      return {
          name: browserName,
          version: fullVersion
      };
  }

  function getSupportedBrowsers(){
    return [
        { name:'msie'         , version:'10'}
       ,{ name:'mozilla'      , version:'10'}
       ,{ name:'chrome'       , version:'21'}
       ,{ name:'safari'       , version:'5'}
       ,{ name:'safarimobile' , version:'6'}
       ,{ name:'android'      , version:'4.1'}
    ]
  }

  function getUnsupportedMsg(){
	    return  '<div class="component component--notification is-active no-js unsupported-browsers">'
	          + '<div class="notification-wrapper" style="font-size:20px; text-align:center; padding-top:35px">'
	          +   '<div class="notification-content show-notification">'
	          +     '<div class="notification-content-wrapper">'
	          +       '<h5>To ensure the best experience and security on ASB websites, please switch to one of our <a href="https://www.asb.co.nz/help/what-internet-browsers-can-i-use-to-view-asb-websites.html">supported browsers</a>.</h5>'
	          +     '</div>'
	          +   '</div>'
	          + '</div>'
	          +'</div>';
	  }

  function checkBrowserVersion(){
    var supportedBrowsers = getSupportedBrowsers();
    var browserDetails    = getBrowserDetails();
    var browserName       = (browserDetails.name.toLowerCase() === 'firefox' ) ? 'mozilla': browserDetails.name.toLowerCase() ;
    for (var i = 0; i < supportedBrowsers.length; i++) {
      if(browserName === supportedBrowsers[i].name){
        var clientBrowserVersion = parseFloat(browserDetails.version);
        if(clientBrowserVersion < parseFloat(supportedBrowsers[i].version)){
          var msg = getUnsupportedMsg();
          document.body.insertAdjacentHTML('afterbegin',msg);
        }
      }
    }
  }

  try {
    initSvg();
  } catch (e) { console.log('Could not load the svg sprite!' + e); }

  try {
    checkBrowserVersion();
  } catch (e) { console.log('Could not load browser message!' + e); }

}());
