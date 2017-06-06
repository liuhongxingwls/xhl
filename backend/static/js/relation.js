/**
* 车型对库
*/

var relation = function(options){
	this.options = $.extend(true,{},this.options,options);
	this.init();
	return this;
}

relation.prototype.options = {
	left : '#p_refresh_1',
	right : '#p_refresh_2',
	left_form : '#w0',
	right_form : '#w2',
	create_url : 'create',
	delete_relation_url : 'del',
	left_model : 'leftmodel',
	right_model : 'rightmodel',
	relation_model : 'relation_model',
	create_button : '#relation',
	left_empty_msg : '请选择左侧车型',
	right_empty_msg : '请选择右侧车型',
	form_event_trigger : true,
	select_group : ['left','right'],
	select_group_url : {}
}

relation.prototype.init = function(){
	this.options.left_box = $(this.options.left);
	this.options.right_box = $(this.options.right);
	this.options.left_form = $(this.options.left_form);
	this.options.right_form = $(this.options.right_form);
}

relation.prototype.run = function(){
	this.bind_left();
	this.bind_right();
	this.bind_left_form();
	this.bind_right_form();
	this.left_select();	
	this.bind_create();
	this.bind_page_left();
	this.bind_page_right();
	for(var i in this.options.select_group){
		this.bind_select(this.options.select_group[i],this.options.select_group_url[i]);
	}	
}

relation.prototype.bind_page_left = function(){
	var obj = this.options.left_box.find(".pagination");
	var me = this;
	this.bind_pager(obj,this.options.left_model,this.options.left_box,function(){
		me.bind_left();
		me.left_select();	
		me.bind_page_left();
	});
}

relation.prototype.bind_page_right = function(){
	var obj = this.options.right_box.find(".pagination");
	var me = this;
	this.bind_pager(obj,this.options.right_model,this.options.right_box,function(){
		me.bind_right();
		me.bind_page_right();
	});
}

relation.prototype.bind_left_form = function(){
	var me = this;
	this.bind_form(this.options.left_form,this.options.left_model,function(data){
		me.options.left_box.html(data);
		me.left_select();	
		me.bind_left();
		me.bind_page_left();
	});
}

relation.prototype.stop_rept = function(callback,reset){
	if(reset){
		this.options.form_event_trigger = true;
		return;
	}
	if(this.options.form_event_trigger){
		this.options.form_event_trigger = false;
		callback();
	}
}

relation.prototype.bind_right_form = function(){
	var me = this;
	this.bind_form(this.options.right_form,this.options.right_model,function(data){
		me.options.right_box.html(data);
		me.bind_right();
		me.bind_page_right();
	});
}

relation.prototype.bind_form = function(form,model,callback){
	var me = this;
	form.on('submit',function(){
		var self = this;
		me.stop_rept(function(){
			me.search(self,model,function(data){
				callback(data);
			});
		});
		return false;
	});
}

relation.prototype.search = function(form,model,callback){
	var url = this.get_form_url(form,model);
	this.page(url,function(data){
		callback(data);
	})
}

relation.prototype.page = function(url,callback){
	this.ajaxSend(url,{},function(data){
		callback(data);
	},'GET');
}

relation.prototype.get_form_url = function(form,model){
	return form.action + "?" + $(form).serialize() + this.get_suffix(model);
}

relation.prototype.get_suffix = function(model){
	return "&ajax-request-model="+model;
}

relation.prototype.bind_left = function(){
	//relation delete
    this.relation_delete();
    //relation view    
    this.relation_view();
}

relation.prototype.left_select = function(){
	var me = this;
	var trs = this.options.left_box.find("tr:gt(0)");
	trs.on('click',function(event){
		if($(this).hasClass('warning')){ 
            event.stopPropagation(); 
            trs.removeClass('success').removeClass('danger');
            $(this).addClass("success").addClass("danger");
            return;   
        }        
        if($(this).hasClass('success')){
            $(this).removeClass('success');                
        }else{
            trs.removeClass('success').removeClass('danger');
            $(this).addClass('success');
        }   
    });
}

relation.prototype.relation_delete = function(){
	var me = this;
	this.options.left_box.find(".glyphicon-trash").unbind();
	this.options.left_box.find(".glyphicon-trash").on('click',function(event){
        event.stopPropagation();
        $('[aria-describedby]').click();
        var self = this;
        dialog.confirm('确认要删除关联?',function(res){
            if(res){
                var data = {};
                data[me.options.relation_model] = {model_id : $(self).parents('tr').attr('model_id')};
                me.del(me.options.delete_relation_url,data,self,function(ids){
                    dialog.alert('删除关联成功',true);
                });
            }
        });
    });
}

relation.prototype.item_relation_bind = function(){
	var me = this;
	$(".relation_item_del").unbind();
	$(".relation_item_del").on('click',function(event){
		event.stopPropagation();
		var model_id = $(this).attr("model_id");
		var basic_model_id = $(this).parents('tr').find('td:first').html();
		me.item_del(this,model_id,basic_model_id);
	});
}

relation.prototype.item_del = function(obj,model_id,basic_model_id){	
    var data = {};
    data[this.options.relation_model] = {model_id : model_id};
    var trSize = $(obj).parents('tbody').find('tr').size()
    if(trSize > 1){
        data[this.options.relation_model].basic_model_id = basic_model_id;
    }      
    var me = this;
    dialog.confirm('确认要删除此条关联?',function(res){
        if(res){
            me.del(me.options.delete_relation_url,data,false,function(ids){
                $("#data-content-"+model_id).attr('data-content','');
                $(obj).parents('tr').remove();
                if(trSize == 1){
                    $("#data-content-"+model_id).popover('hide');
                    $("#data-content-"+model_id).parent().parent().parent().removeClass('warning').removeClass('danger');
                    $("#data-content-"+model_id).parent().parent().html('');
                }
            });
        }
    }); 
}

relation.prototype.del = function(url,data,obj,callback){
	var me = this;
	this.ajaxSend(url,data,function(data){
		if(obj){
			$(obj).parent().parent().parent().removeClass('warning').removeClass('danger');
        	$(obj).parent().parent().html("");
		}		 
        for(var i in data){                            
            me.options.right_box.find("[model_id='"+data[i]+"']").removeClass('warning');
        }
        callback(data);
	})
}

relation.prototype.relation_view = function(){	
	this.options.left_box.find(".glyphicon-eye-open").unbind();
	var me = this;
	this.options.left_box.find(".glyphicon-eye-open").on('click',function(event){
        event.stopPropagation();
         var self = this;
         var parent = $(self).parent().parent().parent();
         var id = parent.attr('model_id');
	        var data = {};
	        data[me.options.relation_model] = {model_id:id};
	        if($(self).attr('data-content') == ''){
	            me.get_relations(data,function(res){
	                $(self).attr('data-content',res);                        
	                $(self).popover({html:true});  
	                $(self).click();    
	                me.item_relation_bind();                                      
	            }); 
	        }else{
	            if(!$(self).attr('aria-describedby')){
	                me.options.left_box.find('[aria-describedby]').each(function(){
	                    $(this).click();
	                });
	                $(self).popover('show');
	                me.item_relation_bind();
	            }else{
	                $(self).popover('hide');
	            }   
	        }  
    });
}

relation.prototype.get_relations = function(data,callback){
	this.ajaxSend(this.options.relation_url,data,function(data){
		callback(data);
	});
}

relation.prototype.bind_right = function(){
	this.right_select();
}

relation.prototype.right_select = function(){
	this.options.right_box.find("tr:gt(0)").on('click',function(){
		if($(this).hasClass('warning')){
            return;
        }          
        if($(this).hasClass('success')){
            $(this).removeClass('success');                
        }else{
            $(this).addClass('success');
        }   
	})
}

relation.prototype.bind_pager = function(obj,model,target,callback){
	var me = this;
	obj.find("a").on('click',function(){
		$('[aria-describedby]').click();
		var url = me.get_link_url(this,model);
		me.page(url,function(data){
			target.html(data);
			callback();
		});
		return false;
	})
	
}

relation.prototype.get_link_url = function(a,model){
	return a.href + this.get_suffix(model);
}

relation.prototype.bind_create = function(){
	var me = this;
	$(me.options.create_button).on('click',function(){
		var id = me.options.left_box.find("[class='success']");
		id = (id.size() < 1) ? me.options.left_box.find("[class='warning success danger']") : id;
        if(id.size()<1){
            dialog.alert(me.options.left_empty_msg,false);
            return;
        }
        var right_id = me.options.right_box.find("[class='success']");
        if(right_id.size()<1){
            dialog.alert(me.options.right_empty_msg,false);
            return;
        }
        var data = {};
        var model_id = id.first().attr('model_id');
        data[me.options.relation_model] = {model_id : model_id};
        data[me.options.relation_model].basic_model_id = [];
        right_id.each(function(){
            data[me.options.relation_model].basic_model_id.push($(this).attr('model_id'));
        })
        me.ajaxSend(me.options.create_url,data,function(){
        	right_id.each(function(){
                $(this).removeClass('success').addClass('warning'); 
            });
            id.removeClass('success').addClass('warning');
            var btn = '<a href="javascript:void(0)"><span class="glyphicon glyphicon-trash"></span></a>';
            btn += '&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)"><span  title="关联详情" data-container="body" data-placement="right" data-content="" id="data-content-'+model_id+'" class="glyphicon glyphicon-eye-open"></span></a>';
            id.find("td:last").html(btn);    
            me.bind_left();
            me.relation_view();
            dialog.alert('创建关联成功',true);
        })
	})
}

relation.prototype.ajaxSend = function(url,data,callback,method){
	var load = $(".page-container");
	var method = method || "POST";
	var me = this;
    $.ajax({
        'type': method,
        'url':url,
        'data':data,
        'success':function(res){
            if(res.err == '0'){
                callback(res.data);
            }else{
                dialog.alert(res.msg,false);
            }
            panel_refresh(load);
            me.stop_rept(null,true);
        },
        'error':function(res){
            dialog.alert(res.msg,false);
            panel_refresh(load);
            me.stop_rept(null,true);
        },
        'beforeSend':function(){
            panel_refresh(load);
        }
    });
}

relation.prototype.bind_select = function(id,url){
	var select = new select_group(id,url);
	var me = this;
	select.bind_event(function(sub){
		if('' == sub.element.value){
			return;
		}
		var data = {};
		data[sub.name] = sub.element.value;
		me.ajaxSend(sub.url,data,function(data){
			select.fill(sub,data);
		},'GET');
	});
}


/**
* select group
*/
var select_group = function(id,url){
	this.id = id;
	this.url = url;
	this.init();
	this.sub = [];
	this.size = 0;
	this.init();

}

select_group.prototype.init = function(){
	this.selects = $("select[group='"+this.id+"']");
	this.size = this.selects.size();
}

select_group.prototype.get_sub = function(level){
	var url = this.url[level];
	if('undefined' !== typeof this.sub[level]){
		return this.sub[level];
	}
	return {
		level : level,
		url : url
	};
}

select_group.prototype.bind_event = function(callback){
	for(var level = 0;level<this.size;level++){
		var sub = this.get_sub(level);
		sub.element = this.selects[level]
		sub.name = sub.element.id.split("-")[1];
		this.bind(sub,callback);
	}
}

select_group.prototype.bind = function(sub,callback){
	var me = this;
	$(sub.element).on('change',function(){
		if(sub.level + 1 == me.size){
			return;
		}
		callback(sub);
	})
}

select_group.prototype.fill = function(sub,data){
	var target = $(this.selects[sub.level+1]);
	this.get_select_options(data,target);
}

select_group.prototype.get_select_options = function(data,target,clear){
    target.empty();
    $("<option value>请选择</option>").appendTo(target);
    if(true === clear){
        target.change();
        return;
    }
    for(var i in data){
        $("<option value='"+i+"'>"+data[i]+"</option>").appendTo(target);
    }
}


$(document).ready(function(){
    $(document).on('click',function(){
        $('[aria-describedby]').each(function(){
            $(this).click();
        });
    });  
});
