$(document).ready(function(){
    var pinyinEncode = {
        strnameID : '',
        pinyinID : '',
        pyID : '',
        url : '/web/admin/index.php?r=ajax/pinyin-encode',
        run:function(){
            if(!arguments[0] || !arguments[1]){
                return false;
            }
            this.strnameID = arguments[0];
            this.pinyinID = arguments[1];
            this.pyID = arguments[2] ? arguments[2] : '';
            this.url = arguments[3] ? arguments[3] : this.url;
            this.set();
        },
        set:function(){
            var _this = this;
            $(_this.strnameID).unbind('change').bind('change',function(){
                if($(this).val().trim() != ''){
                    $.ajax({
                        url:_this.url,
                        type:'get',
                        data:'str='+$(this).val(),
                        dataType:'json',
                        success:function(data){
                            if(data.status == 0){
                                $(_this.pinyinID).val(data.pinyin);
                                if(_this.pyID != ''){
                                    $(_this.pyID).val(data.py);
                                }
                            }
                        }
                    })
                }
            })
        }
    }
    //拼音from
    if($('.pingyinfrom').length >0 && $('.pingyinfrom').find('[name$="[pinyin]"]') && $('.pingyinfrom').find('[name$="[pinyin]"]').length >0){
        pinyinEncode.run('[name$="[name]"]','[name$="[pinyin]"]','[name$="[pinyin_initial]"]');
    }
});