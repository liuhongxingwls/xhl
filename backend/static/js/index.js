var tools = {
    ajaxCommit : function(id, grid_id, pic_id, is_refresh,callback,callurl) {
        var is_submit = 1;
        $(document).on('beforeSubmit', ("#"+id), function(e) {
            if(is_submit == 0)
            {
                return false;
            }
            is_submit = 0;
            if (pic_id) {
                var flag = 1;
                $("#"+pic_id).find(".filelist").each(function () {
                    if ($(this).find("input").val() == '' || $(this).find("select").val() == '') {
                        flag = 0;
                        return false;
                    }
                });
                if (flag === 0) {
                    alert("请选择图片类型");
                    return false;
                }
            }
            var form = $(this);

            $.ajax({
                url: form.attr('action'),
                type: 'post',
                data: form.serialize(),
                dataType: 'json',
                success: function (data) {
                    if (callback == undefined || callback == '') {
                        if (data && data['status'] == true) {
    
                            $('.close').trigger("click");
                            if (is_refresh) {
                                location.href = location.href;
                            }
                            else {
                                if(callurl == undefined || callurl == ''){
                                    $.pjax.reload({container:'#' + grid_id});
                                }else{
                                    $.pjax.reload({container:'#' + grid_id,timeout:10000,url:callurl});
                                }
                                
                            }
                        } else if (data && typeof data['error'] == 'object'){
                            var table = id.replace('form-', '');
                            for (var i in data['error']) {
                                var div_id = 'field' + '-' + table + '-' + i;
                                form.find("." + div_id).removeClass('has-success').addClass('has-error');
                                form.find("." + div_id).find(".help-block").text(data['error'][i][0]);
                            }
                        } else {
                            alert(data['error']);
                            
                        }
                    } else {
                        callback(data);
                    }
                    if (data && data['status'] == true) {
                    }else{
                        form.find('[type="submit"]').removeAttr('disabled');
                    }

                },
                beforeSend:function(){
                    form.find('[type="submit"]').attr('disabled',true);
                },
                error:function (){
                    alert('提交失败，请重新提交！');
                    form.find('[type="submit"]').removeAttr('disabled');
                },
                complete:function(jqXHR, textStatus){
                    if(textStatus != 'success' && textStatus != null){
                        form.find('[type="submit"]').removeAttr('disabled');
                    }
                    is_submit = 1;
                }
            });
        }).on('submit', ("#"+id), function(e){
            e.preventDefault();
        });
    },
    checkPic: function (id, config_items) {
        $(document).on('beforeSubmit', ("#"+id), function(e) {
            if ($("#"+id).find(".filelist li").length <= 0) {
                layer.alert('请上传照片', {
                    skin: 'layui-layer-molv' //样式类名
                    ,closeBtn: 0
                });
                return false;
            }
            var flag = 0;

            $("#"+id).find(".filelist").each(function () {
                var pic_path = $(this).find("input[name='Upload[pic_path][]']").val();
                if (pic_path != undefined && pic_path != '') {
                    flag = 1;
                    return false;
                }
            });

            if (flag === 0) {
                layer.alert('请上传照片', {
                    skin: 'layui-layer-molv' //样式类名
                    ,closeBtn: 0
                });
                return false;
            }
            if (config_items != '' && config_items != 'undefined') {
                var now_config = [];

                var special = {168: [89, 90, 91, 154, 155]};
                var arr = [89, 90, 91, 154, 155];
                for (var i in config_items) {
                    now_config.push (i);
                }
                $("#"+id).find(".filelist li").each(function () {
                    var value = $(this).find(".typelist").val();
                    var index = $.inArray(value,now_config);
                    if (index >= 0 ) {
                        now_config.splice(index,1);
                        var m = $.inArray(parseInt(value),arr);
                        if (m >= 0) {
                            arr.splice(m,1);
                        }
                    }
                    if (value == 168) {

                        for (var j = 0; j < special[168].length; j++) {
                            var k = $.inArray(special[168][j].toString(),now_config);
                            if (k >= 0) {
                                now_config.splice(k,1);
                            }
                        }
                    }
                });
                if (arr.length == 0) {
                    var n = $.inArray('168',now_config);
                    if (n >= 0) {
                        now_config.splice(n,1);
                    }
                }
                if (now_config.length > 0) {
                    layer.alert(config_items[now_config[0]], {
                        skin: 'layui-layer-molv' //样式类名
                        ,closeBtn: 0
                    });
                    return false;
                }
            }
        })
    },
    validConfig: function (id, img_ul) {
        id = parseInt(id);
        var rules = {15: {'id': 92, 'msg': '法人身份证复印件照片不能为空'}, 16: {'id': 93, 'msg': '实际控制人身份证复印件照片不能为空'}};
        var rules_id = [15, 16];
        if ($.inArray(id, rules_id) < 0) {
            return {'status': true};
        }
        var rule = rules[id];
        var flag = 0;
        img_ul.find("li").each(function () {
            if ($(this).find(".typelist").val() == rule['id']) {
                flag = 1;
                return false;
            }
        });
        if (flag == 1) {
            return {'status': true};
        } else
            return {'status': false, 'data': rule};
    },
    //返回上一个页面
    goBackPage:function(url){
        var ref = '';  
        if (document.referrer.length > 0) {  
          ref = document.referrer;  
        }  
        try {  
          if (ref.length == 0 && opener.location.href.length > 0) {  
           ref = opener.location.href;  
          }  
        } catch (e) {
           if(url){
               ref = url;
           }else{
               history.go(-1);
               return false;
           }
        }
        window.location.href = ref;
        return false;
    }
}
