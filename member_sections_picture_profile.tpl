<style type="text/css">
.tag {
   position: relative;
   background-color: #3B3C41;
   padding: 5px;
   color: #FFFFFF;
   width:100%;
   text-align:center;
   font-weight: bold;
   border-radius: 0px 0px 2px 2px;
}
.tagthumb {
   position: relative;
   bottom: 5px;
   z-index: 1000;
   background-color: #AEC62C;
   padding: 5px;
   color: #FFFFFF;
   width:95.3%;
   text-align:center;
   font-weight: bold;
}

</style>
<!-- IF member_picture AND member_picture_active -->
	<!-- IF member_picture_adult == "0" OR member_picture_adult AND session.can_view_adult_images AND session.showadult -->
		<!-- IF top.active_module == "member_profile" AND !member_profile_preview -->
            <!-- <a class="picture_zoom" href="{top.virtual_pic_path}{member_media_path}{member_picture_large}" id="profile_picture_{member_id}" target="_blank"> -->
            
             <a href="{top.virtual_path}{member_profile_link}">
            <img src="{top.virtual_pic_path}{member_media_path}{member_picture_large}" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width: 100% !important;" /><br/>
            </a>
            <!-- </a> -->
			<div id="profile_picture_{member_id}_zoom" class="picture_zoom_in" style="display:none"><img src="{top.virtual_pic_path}{member_media_path}{member_picture_large}" alt="" border="0" style="border-radius:2px; width:100% !important;" /><br/></div>
		<!-- ELSE -->
        	
            <a href="{top.virtual_path}{member_profile_link}">
            <img src="{top.virtual_pic_path}{member_media_path}{member_picture_large}" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" /><br/>
            </a>
		<!-- ENDIF -->
	<!-- ELSE -->
		<a class="adult-picture" href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_adult.gif" alt="" border="0" /><br/></a>
	<!-- ENDIF -->
<!-- ELSE -->
	
	<a href="{top.virtual_path}{member_profile_link}"><img src="{top.virtual_tpl_path}{session.template}/media/user_picture_none.gif" alt="" border="0" style="border-radius: 2px 2px 0px 0px; width:100% !important;" />
    </a>
<!-- ENDIF -->