$(function(){
});

function delete_confirm() {
    $("#mode").val('delRegist');
    if (window.confirm('削除しますか？')) {
        $("form[name='form1']").submit();
    } else {
        return false;
    }
}
function confirm_submit(mode, id, form, msg) {
	if (mode != "")
		$("#mode").val(mode);
	if (id != "")
		$("#id").val(id);
	if (form != "") {
		if (msg != "") {
		    if (window.confirm(msg)) {
		        $("form[name='"+form+"']").submit();
		    } else {
		        return false;
		    }
		}
		else {
			$("form[name='"+form+"']").submit();
		}
	}
}



// 企業編集
function company_list_edit(id) {
	var codeNumber = $("#FN_codeNumber_"+id).val();
	var officialName = $("#FN_officialName_"+id).val();
	var constructionStates = $("#FN_constructionStates_"+id).val();
	var clientNameInSystem = $("#FN_clientNameInSystem_"+id).val();
	var note = $("#FN_note_"+id).val();

//	$("#codeNumberText").prop("disabled", false);
//	$("#codeNumberHidden").prop("disabled", true);

	$("#company_del_single").show();
	$("#mode").val('editRegist');
	$("form[name='form1'] input[name='FN_codeNumberOrg']").val(id);
	$("form[name='form1'] input[name='FN_codeNumberDel']").val(id);

	$("form[name='form1'] input[name='constructionStates']").attr("selected", false);

	// $("form[name='form1'] input[name='codeNumber']").val(codeNumber);
	$("#codeNumberText").val(codeNumber);
	$("#codeNumberHidden").val(codeNumber);

	$("form[name='form1'] input[name='officialName']").val(officialName);
	$("form[name='form1'] select[name='constructionStates']").val(constructionStates);
	$("form[name='form1'] input[name='clientNameInSystem']").val(clientNameInSystem);
	$("form[name='form1'] input[name='note']").val(note);

//	$("#codeNumberText").prop("disabled", true);
//	$("#codeNumberHidden").prop("disabled", false);
}

// 企業削除
function company_del(id) {
	$("#mode").val('delRegist');
	$("form[name='form1'] input[name='FN_codeNumberDel']").val(id);

	if (window.confirm('コードNo（'+id+'）を削除しますか？')) {
		$("form[name='form1']").submit();
	} else {
		return false;
	}
}

// 企業削除（個別）
function company_del_single() {
	var id = $("form[name='form1'] input[name='FN_codeNumberDel']").val();
	$("#mode").val('delRegist');

	if (window.confirm('コードNo（'+id+'）を削除しますか？')) {
		$("form[name='form1']").submit();
	} else {
		return false;
	}
}

// 取引先削除（個別）
function client_del_single() {
	$("#mode").val('delRegist');

	if (window.confirm('この取引先を削除しますか？')) {
		$("form[name='form1']").submit();
	} else {
		return false;
	}
}

// 取引先削除（個別）
function worker_view(id) {
	var size = $('#formAreaSub .formAreaSubBox').length;
	if (size >= 4) {
		alert("これ以上登録できません。");
		return false;
	}

	var next_id = id+1;

	var original = $('#formAreaClone');
	$(original).clone().appendTo('#formAreaSub');

	$("#formAreaSub #formAreaClone").attr('id', 'formAreaClone_'+id);
	var html = $("#formAreaSub #formAreaClone_"+id).html();
	$("#formAreaSub #formAreaClone_"+id).html(html.replace(/\[1\]/g, '['+id+']'));
	html = $("#formAreaSub #formAreaClone_"+id).html();
	$("#formAreaSub #formAreaClone_"+id).html(html.replace(/worker_view\(\'2\'\)/g, "worker_view('"+next_id+"')"));
	$("#formAreaSub #formAreaClone_"+id).html(html.replace(/worker_del\(\'1\'\)/g, "worker_del('"+id+"')"));

	$("#formAreaSub #workerNo").attr('id', 'workerNo'+id);
	$("#formAreaSub #workerNo"+id).val(id);

	$("#formAreaSub #formAreaClone_"+id).show();
	$("#form2button").show();
}

// 取引先削除（個別）
function worker_del(id) {
	if (window.confirm('この作業員を削除しますか？')) {
		$("#formAreaSub #formAreaClone_"+id).remove();

		var size = $('#formAreaSub .formAreaSubBox').length;
		if (size == 0) {
			$("#form2button").hide();
		}

	} else {
		return false;
	}
}


// マスターフォーム表示（共通）
function master_form_view(name) {
	$("#master_form_reg_"+name).hide();
	$("#master_form_edit_"+name).hide();

	$("#master_form_reg_"+name).show();
}

// マスター登録（共通）
function reg_master_new(name) {
	var size = $('#master_'+name+'_table tr').length;
	var next_id = size+1;
	var next_master_id = "A0"+next_id;
	var input_name = $('#master_reg_'+name).val();
	var viewhtml;

	viewhtml += "<tr id=\""+name+"_"+next_master_id+"\">\n";
	viewhtml += "<th class=\"w100 txtCenter\">"+next_id+"</th>\n";
	viewhtml += "<td>";
	viewhtml += "<span id=\"master_name_"+next_master_id+"\">"+input_name+"</span>\n";
	viewhtml += "<input type=\"hidden\" name=\"masterForm["+name+"]["+next_master_id+"][name]\" value=\""+input_name+"\" id=\"master_name_hidden_"+next_master_id+"\">\n";
	viewhtml += "<input type=\"hidden\" name=\"masterForm["+name+"]["+next_master_id+"][masterId]\" value=\""+next_master_id+"\" id=\"master_masterId_hidden_"+next_master_id+"\">\n";
	viewhtml += "<input type=\"hidden\" name=\"masterForm["+name+"]["+next_master_id+"][delflg]\" value=\"1\" id=\"master_delflg_hidden_"+next_master_id+"\">\n";
	viewhtml += "</td>\n";
	viewhtml += "<td class=\"bdl w72\">\n";
	viewhtml += "<div class=\"boxRight\">\n";
	viewhtml += "<a href=\"#\" class=\"buttonA\" onclick=\"edit_master('"+name+"', '"+next_master_id+"')\">修正</a>\n";
	viewhtml += "<p class=\"iconLink\"><a href=\"#\" onclick=\"del_master('"+name+"', '"+next_master_id+"')\"><img src=\"/img/common/icon_reset-data.png\" height=\"14\" width=\"14\" alt=\"削除\"></a></p>\n";
	viewhtml += "</div>\n";
	viewhtml += "</td>\n";
	viewhtml += "</tr>\n";

	$('#master_'+name+'_table').append(viewhtml);

	$('#master_form_reg_'+name).hide();
	$('#master_form_edit_'+name).hide();
}


// マスター登録（共通）
function reg_master(name) {
	var input_name = $('#master_edit_'+name).val();
	var input_id = $('#master_edit_id_'+name).val();

	$('#master_'+name+'_table #master_name_'+input_id).html(input_name);
	$('#master_'+name+'_table #master_name_hidden_'+input_id).val(input_name);

	$('#master_form_reg_'+name).hide();
	$('#master_form_edit_'+name).hide();
}

// マスター登録（共通）
function edit_master(name, id) {
	$('#master_form_reg_'+name).hide();
	$('#master_form_edit_'+name).hide();

	$('#master_form_edit_'+name).show();

	var now_name = $('#master_'+name+'_table #master_name_hidden_'+id).val();

	$('#master_edit_id_'+name).val(id);
	$('#master_edit_'+name).val(now_name);
}

// マスター登録（共通）
function del_master(name, id) {
	$('#master_'+name+'_table #master_checkDel_hidden_'+id).val('9');
	$('#master_'+name+'_table #'+name+'_'+id).hide();

}
