var Main = {

    Login: function() {

        var frm = document.frmLogin;

        if (!General.fnCheckInput(frm.strID.value)) {
            alert('아이디를 입력해 주시기 바랍니다');
            frm.strID.value = '';
            frm.strID.focus();
            return false;
        }

        if (!General.fnCheckInput(frm.strPW.value)) {
            alert('비밀번호를 입력해 주시기 바랍니다');
            frm.strPW.value = '';
            frm.strPW.focus();
            return false;
        }
    },
    
    // 설문조사
    CheckPoll: function() {
        var i = 0;
        var form = document.frmPoll;
        var count = 0;
        var var_value;

        while (i < form.elements.length) {
            if ((form.elements[i].name == 'PollQuestion') && (form.elements[i].checked)) {
                var_value = form.elements[i].value;
                count++;
            }
            i++;
        }
        if (count == 0) {
            alert("항목 중 하나를 선택해 주시기 바랍니다.");
            return false;
        } else {
            form.action = 'Community/Poll/partyPollcfcd.html?intSubjectSeq=' + form.hidSubjectSeq.value + '&intExampleSeq=' + var_value;
            form.submit();
        }    
    },

    PopupOpen: function(flag) {

        document.domain = "muonline.co.kr";

        if (flag == "html") {
        
            if (General.fnGetCookie("WZ_MU_Main_Popup_NewYearGreeting") != 'done') {
                var winW = 400;
                var winH = 460;
                var strUrl = "Popup/NewYearGreeting/Default_20090121.htm";
                var winL = (screen.width - winW) / 2;
                var winT = (screen.height - winH) / 2;


                window.open(strUrl, "MainPopup", "width=" + winW + ",height=" + winH + ",scrollbars=no,resizable=no,top=0, left=0");
            }

        }
        else {
            if (General.fnGetCookie("WZ_Mu_Main_Layer_20090525") != 'done') {
                Main_Layer.style.display = "";
            }

        }
        return;
    },


    PopupClose: function(flag) {

        if (flag == "html") {

        }
        else {
            if (document.all.Main_Layer_Cookie_Check.checked) { General.fnSetCookie('WZ_Mu_Main_Layer_20090525', 'done'); }
            Main_Layer.style.display = "none";
        }

    }
    

}


var input = {
    login: function(el) {
        el.className = "";
        el.onblur = function() {
            if (el.value == "") el.className = "on";
        }
    }
}

var server = {
    action: function(objScroll, intLength, strMotion) {
        this.action[objScroll] = objScroll;
        this.action[objScroll + "_ypos"] = 0;
        this.action[objScroll + "_motion"] = strMotion;
        if (document.getElementById(objScroll).getElementsByTagName("li").length > intLength) {
            this.scroll[objScroll + "_tid"] = setTimeout("server.scroll('" + this.action[objScroll] + "')", 2000);
        }
    },
    scroll: function(objScroll) {
        if(document.getElementById(objScroll).getElementsByTagName("li").length <= 0) return false;
        this.scroll[objScroll] = document.getElementById(objScroll).getElementsByTagName("ul")[0];
        if (this.action[objScroll + "_motion"] == "scroll") {
            this.action[objScroll + "_ypos"] = this.action[objScroll + "_ypos"] + 1;
            this.scroll[objScroll].style.top = eval("-" + this.action[objScroll + "_ypos"]);
        }
        if (this.action[objScroll + "_motion"] == "scroll" && this.action[objScroll + "_ypos"] < 17) {
            this.scroll[objScroll + "_tid"] = setTimeout("server.scroll('" + objScroll + "')", 10);
        } else {
            var li = this.scroll[objScroll].getElementsByTagName("li")[0];
            this.banner = li.innerHTML;
            li.innerHTML = "";
            this.scroll[objScroll].removeChild(li);
            this.scroll[objScroll].innerHTML = this.scroll[objScroll].innerHTML + "<li>" + this.banner + "</li>";
            if (this.action[objScroll + "_motion"] == "scroll") {
                this.action[objScroll + "_ypos"] = 0;
                this.scroll[objScroll].style.top = this.action[objScroll + "_ypos"];
            }
            this.scroll[objScroll + "_tid"] = setTimeout("server.scroll('" + objScroll + "')", 2000);
        }
    },
    stop: function(objScroll) {
        clearTimeout(this.scroll[objScroll + "_tid"]);
    },
    layer: function(objScroll, objList, objButton) {
        if(document.getElementById(objScroll).getElementsByTagName("li").length <= 0) return false;
        var scrollEle = document.getElementById(objScroll);
        var listEle = document.getElementById(objList);
        var buttonEle = document.getElementById(objButton);
        buttonEle.src = (buttonEle.src.indexOf("open") > -1) ? buttonEle.src.replace("open", "close") : buttonEle.src.replace("close", "open");
        if (buttonEle.src.indexOf("close") > -1) {
            scrollEle.style.overflow = "visible";
            listEle.className = "open";
            server.stop(objScroll);

            if (navigator.userAgent.indexOf("MSIE 6") > -1 && navigator.userAgent.indexOf("MSIE 7") < 0) {
                if (!document.getElementById(objList + "IE6Iframe")) {
                    var ie6_ifm = document.createElement("iframe");
                    ie6_ifm.setAttribute("id", objList + "IE6Iframe");
                    ie6_ifm.style.position = "absolute";
                    ie6_ifm.style.opacity = "0";
                    ie6_ifm.style.filter = "alpha(opacity=0)";
                    ie6_ifm.style.zindex = "-1";
                    ie6_ifm.style.left = "0";
                    ie6_ifm.style.top = "0";
                    ie6_ifm.style.width = listEle.offsetWidth;
                    ie6_ifm.style.height = listEle.offsetHeight;
                    scrollEle.appendChild(ie6_ifm);
                }
            }
        } else {
            scrollEle.style.overflow = "hidden";
            listEle.className = "";
            server.scroll(objScroll);

            if (navigator.userAgent.indexOf("MSIE 6") > -1 && navigator.userAgent.indexOf("MSIE 7") < 0) {
                if (document.getElementById(objList + "IE6Iframe")) {
                    scrollEle.removeChild(document.getElementById(objList + "IE6Iframe"));
                }
            }
        }
    },
    initialize: function(objScroll, objList, objButton) {
        var scrollEle = document.getElementById(objScroll);
        var listEle = document.getElementById(objList);
        var buttonEle = document.getElementById(objButton);
        if (buttonEle.src.indexOf("open") < 0) {
            buttonEle.src = buttonEle.src.replace("close", "open");
            scrollEle.style.overflow = "hidden";
            listEle.className = "";
            server.scroll(objScroll);
        }
    },
    tabchange: function(objOpen, objClose) {
        document.getElementById(objOpen).style.display = "block";
        document.getElementById(objClose).style.display = "none";
    }
}
