function checknick(){
	var u_nick = document.getElementById("u_nick").value;
	if(u_nick) 
	{
		url = "check.php?u_nick="+u_nick;
		window.open(url,"chknick","width=400,height=200");
	} else {
		alert("아이디를 입력하세요.");
	}
}

function decide() {
    document.getElementById("decide").innerHTML = "<span style='color:blue;'>사용 가능한 아이디 입니다.</span>"
    document.getElementById("decide_nick").value = document.getElementById("u_nick").value
	document.getElementById("u_nick").disabled = true
    document.getElementById("check_button").value = "다른 ID로 변경"
	document.getElementById("check_button").setAttribute("onclick", "change()")
	document.getElementById("join_button").disabled = false
}

function change() {
    document.getElementById("decide").innerHTML = "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>"
    document.getElementById("u_nick").disabled = false
	document.getElementById("u_nick").value = ""
    document.getElementById("check_button").value = "ID 중복 검사"
	document.getElementById("check_button").setAttribute("onclick", "checknick()")
	document.getElementById("join_button").disabled = true
}

function mail_change(){
    if(document.join.u_email.options[document.join.u_email.selectedIndex].value == '0'){
        document.join.u_email2.disabled = true;
        document.join.u_email2.value = "";
    }
    if(document.join.u_email.options[document.join.u_email.selectedIndex].value == '1'){
        document.join.u_email2.disabled = false;
        document.join.u_email2.value = "";
        document.join.u_email2.focus();
    } else{
        document.join.u_email2.disabled = true;
        document.join.u_email.value = document.join.u_email.options[document.join.u_email.selectedIndex].value;
        document.join.u_email2.value = document.join.u_email.options[document.join.u_email.selectedIndex].value;
    }
}