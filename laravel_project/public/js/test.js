/* 入電情報登録機能のJS */
function getTel() {
    var tel = $("input[name='tel']").val();
    var request = $.ajax({
            url: '/tel',
            type: 'GET',
            dataType: 'json',
            data: { "tel" : tel },
    });

    /* 成功時 */
    request.done(function(data){
        alert("通信に成功しました"+contractor["name"]);
    });

    /* 失敗時 */
    request.fail(function(){
        alert("通信に失敗しました。 入力値は"+tel);
    });
};


$(function (){
    $.getJSON("/json",function(data){
        if(data[0].id == 1){
            $("input[name='id']").val(data[0].id);
            $("input[name='name']").val(data[0].name);
            $("input[name='service_s']").val(data[0].service_s);
            $("input[name='postal']").val(data[0].postal);
            $("input[name='address']").val(data[0].address);
            $("input[name='address2']").val(data[0].s_address);
            $("input[name='room_number']").val(data[0].room_number);

            $("#test").show();
            $("#contractor").hide();
        }else{
            $("#test").hide();
            $("#contractor").show();
        }
        $("#inquery").show();
    });
});
