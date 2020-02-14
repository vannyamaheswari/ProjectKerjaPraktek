/**######################################################################################################
#  DESCRIPTION:  Data Layer script											                            #
#######################################################################################################*/
function dl_onPageLoad() {
    digitalData['page'].url = window.location.href;
	var pathname = window.location.pathname;
    var section = "homepage";
    var subsection = "";
    var subsubsection = "";
    var name = "";
    var urlParts = pathname.split('/');

    for (var i = 0; i < urlParts.length; i++) {
        if (typeof urlParts[i] != 'undefined' && urlParts[i] !='') {
            if (name !=''){
                name = name+":"+urlParts[i].replace(".html","");
            }else{
                name = urlParts[i];
            }
        }
    }
    if (name ==''){
       name = section;
    }
    if (typeof urlParts[1] != 'undefined' && urlParts[1] !='') {
		section = urlParts[1];
        section = section.replace(".html","");
    }
    if (typeof urlParts[2] != 'undefined' && urlParts[2] != '') {
		subsection = urlParts[2].replace(".html","");
    }
    if (typeof urlParts[3] != 'undefined' && urlParts[3] != '') {
        subsubsection = urlParts[3].replace(".html","");
    }
    digitalData['page'].section = section;
    digitalData['page'].subSection = subsection;
	digitalData['page'].subsubsection = subsubsection;
    digitalData['page'].name = "asb:" + name;

    if (document.cookie) {
        var bc = document.cookie.split(';');
        if (bc) {
            for (var i = 0; i < bc.length; i++) {
                if (bc[i].indexOf("VisitInfo=") > -1) {
                    var hcif = bc[i].replace("VisitInfo=", "");
                    if (hcif && hcif.indexOf("hashedCIF=") > -1) {
                        digitalData['user'] = {};digitalData['user'].cif = hcif.replace("hashedCIF=", "").trim();
                    }
                }
            }
        }
    }
}