<script type="text/javascript">
var site_settings = '<div class="ts-button">'
        +'<span class="fa fa-cog fa-spin"></span>'
    +'</div>'
    +'<div class="ts-body">'
        +'<div class="ts-title">Options</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_head_fixed" value="1"/> Fixed Header</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_sb_fixed" value="1" checked/> Fixed Sidebar</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_sb_scroll" value="1"/> Scroll Sidebar</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_sb_right" value="1"/> Right Sidebar</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_sb_custom" value="1"/> Custom Navigation</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="checkbox" class="icheckbox" name="st_sb_toggled" value="1"/> Toggled Navigation</label>'
        +'</div>'
        +'<div class="ts-title">Layout</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="radio" class="iradio" name="st_layout_boxed" value="0" checked/> Full Width</label>'
        +'</div>'
        +'<div class="ts-row">'
            +'<label class="check"><input type="radio" class="iradio" name="st_layout_boxed" value="1"/> Boxed</label>'
        +'</div>'
        +'<div class="ts-title">Themes</div>'
        +'<div class="ts-themes">'
            +'<a href="#" class="active" data-theme="'+BASE_URL+'/css/theme-default.css"><img src="'+BASE_URL+'/img/themes/default.jpg"/></a>'            
            +'<a href="#" data-theme="'+BASE_URL+'/css/theme-forest.css"><img src="'+BASE_URL+'/img/themes/forest.jpg"/></a>'
            +'<a href="#" data-theme="'+BASE_URL+'/css/theme-dark.css"><img src="'+BASE_URL+'/img/themes/dark.jpg"/></a>'                        
            +'<a href="#" data-theme="'+BASE_URL+'/css/theme-night.css"><img src="'+BASE_URL+'/img/themes/night.jpg"/></a>'            
            +'<a href="#" data-theme="'+BASE_URL+'/css/theme-serenity.css"><img src="'+BASE_URL+'/img/themes/serenity.jpg"/></a>'
            
            +'<a href="#" data-theme="'+BASE_URL+'/css/theme-default-head-light.css"><img src="'+BASE_URL+'/img/themes/default-head-light.jpg"/></a>'
            +'<a href="#" data-theme="'+BASE_URL+'/css/theme-forest-head-light.css"><img src="'+BASE_URL+'/img/themes/forest-head-light.jpg"/></a>'    
            +'<a href="#" data-theme="'+BASE_URL+'/css/theme-dark-head-light.css"><img src="'+BASE_URL+'/img/themes/dark-head-light.jpg"/></a>'            
            +'<a href="#" data-theme="'+BASE_URL+'/css/theme-night-head-light.css"><img src="'+BASE_URL+'/img/themes/night-head-light.jpg"/></a>'
            +'<a href="#" data-theme="'+BASE_URL+'/css/theme-serenity-head-light.css"><img src="'+BASE_URL+'/img/themes/serenity-head-light.jpg"/></a>'

        +'</div>'
    +'</div>';
$(document).ready(function(){

    var settings_block = document.createElement('div');
    settings_block.className = "theme-settings";
    settings_block.innerHTML = site_settings;
    document.body.appendChild(settings_block);
    
    /* Default settings */
        var theme_settings = {
            st_head_fixed: 1,
            st_sb_fixed: 1,
            st_sb_scroll: 1,
            st_sb_right: 0,
            st_sb_custom: 0,
            st_sb_toggled: 0,
            st_layout_boxed: 0
        };
        /* End Default settings */
        
        set_settings(theme_settings,false);    
       
        
        
        $(".theme-settings input").click(function(){
            
            
            var input   = $(this);
            

            if(input.attr("name") != 'st_layout_boxed'){

                    
                if(input.prop("checked")){
                    theme_settings[input.attr("name")] = input.val();
                }else{            
                    theme_settings[input.attr("name")] = 0;
                }
                
            }else{
                theme_settings[input.attr("name")] = input.val();
            }

            /* Rules */
            if(input.attr("name") === 'st_sb_fixed'){
                if(theme_settings.st_sb_fixed == 1){
                    theme_settings.st_sb_scroll = 1;
                }else{
                    theme_settings.st_sb_scroll = 0;
                }
            }
            
            if(input.attr("name") === 'st_sb_scroll'){
                if(theme_settings.st_sb_scroll == 1 && theme_settings.st_layout_boxed == 0){
                    theme_settings.st_sb_fixed = 1;
                }else if(theme_settings.st_sb_scroll == 1 && theme_settings.st_layout_boxed == 1){
                    theme_settings.st_sb_fixed = -1;
                }else if(theme_settings.st_sb_scroll == 0 && theme_settings.st_layout_boxed == 1){
                    theme_settings.st_sb_fixed = -1;
                }else{
                    theme_settings.st_sb_fixed = 0;
                }
            }
            
            if(input.attr("name") === 'st_layout_boxed'){
                if(theme_settings.st_layout_boxed == 1){                
                    theme_settings.st_head_fixed    = -1;
                    theme_settings.st_sb_fixed      = -1;
                    theme_settings.st_sb_scroll     = 1;
                }else{
                    theme_settings.st_head_fixed    = 0;
                    theme_settings.st_sb_fixed      = 1;
                    theme_settings.st_sb_scroll     = 1;
                }
            }
            //console.log(theme_settings);
            /* End Rules */
            
            set_settings(theme_settings,input.attr("name"));
        });
        
        /* Change Theme */
        $(".ts-themes a").click(function(){
            $(".ts-themes a").removeClass("active");
            $(this).addClass("active");
            $("#theme").attr("href",$(this).data("theme"));
            return false;
        });
        /* END Change Theme */
        
        /* Open/Hide Settings */
        $(".ts-button").on("click",function(){
            $(".theme-settings").toggleClass("active");
        });
        /* End open/hide settings */
});
</script>