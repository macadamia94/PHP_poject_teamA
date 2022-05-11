function checkid(){
	var uid = document.getElementById("uid").value;
	if(uid) 
	{
		url = "check.php?uid="+uid;
		window.open(url,"chkid","width=400,height=200");
	} else {
		alert("아이디를 입력하세요.");
	}
}

function decide() {
    document.getElementById("decide").innerHTML = "<span style='color:blue;'>사용 가능한 아이디 입니다.</span>"
    document.getElementById("decide_id").value = document.getElementById("uid").value
	document.getElementById("uid").disabled = true
    document.getElementById("check_button").value = "다른 ID로 변경"
	document.getElementById("check_button").setAttribute("onclick", "change()")
	document.getElementById("join_button").disabled = false
}

function change() {
    document.getElementById("decide").innerHTML = "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>"
    document.getElementById("uid").disabled = false
	document.getElementById("uid").value = ""
    document.getElementById("check_button").value = "ID 중복 검사"
	document.getElementById("check_button").setAttribute("onclick", "checkid()")
	document.getElementById("join_button").disabled = true
}

function address() {
    url= "addr.php";
    window.open(url, "addr", "width=500,height=400, scrollbars=no, resizable=no");
}

function email_change(){
    if(document.join.email.options[document.join.email.selectedIndex].value == '0'){
        document.join.email2.disabled = true;
        document.join.email2.value = "";
    }
    if(document.join.email.options[document.join.email.selectedIndex].value == '1'){
        document.join.email2.disabled = false;
        document.join.email2.value = "";
        document.join.email2.focus();
    } else{
        document.join.email2.disabled = true;
        document.join.email.value = document.join.email.options[document.join.email.selectedIndex].value;
        document.join.email2.value = document.join.email.options[document.join.email.selectedIndex].value;
    }
}