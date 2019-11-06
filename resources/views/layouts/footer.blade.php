@extends('layouts.master')
<div class="clr"></div>
<div class="full Left bg_footer">
   <div class="w_1280">
       <div class="footer_l">
          <ul class="menu_footer">
             <li><a href="#">About Us</a></li>
             <li><a href="#">Our school</a></li>
             <li><a href="#">Admission</a></li>
             <li><a href="#">School Life</a></li>
             <li><a href="#">Gallery</a></li>
             <li><a href="#">Contact Us</a></li>
             <li><a href="#">Privacy Policy</a></li>
          </ul>
       </div>

       <div class="footer_r">

          <div class="footer_r_top">
                            <ul class="menu_footer_2">
                  <li><a href="booktour.html" target="_blank" class="btn btn-default" id="bookatourSaiGon Star">Book a Tour</a></li>
                  <li><a href="#" target="_blank" class="btn btn-default">Request for more information</a></li>
                  <li><a href="#" target="_blank" class="btn btn-default">Apply now</a></li>
              </ul>
                          

              <div class="footer_social">
                 <a target="_blank" href="#" class="left"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                 <a target="_blank" href="#" class="right"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                 <div class="clr"></div>
                 <a target="_blank" href="#" class="left"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                 <a target="_blank" href="#" class="right"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              </div>

              <div class="footer_info">
                 <strong class="name">Sai Gon international school</strong>
                 <div class="clr"></div>
                 <ul class="footer_info_list">
                     <li><i class="fa fa-map-marker" aria-hidden="true"></i> Residential #5, Sử Hy Nhan, Phường Thạnh Mỹ Lợi, Quận 2, Hồ Chí Minh</li>
                     <li><i class="fa fa-phone" aria-hidden="true"></i> Phone: <a href="tel:(+8428) 7300 7257">0123456789</a>   |   Fax: (+84 28) 7300 0257</li>
                     <li><i class="fa fa-envelope" aria-hidden="true"></i> Email: <a href="mailto:info@sgstar.edu.vn">info@esgstar.edu.vn</a></li>
                 </ul>
              </div>

          </div>

          <div class="clr"></div>

          <div class="footer_r_bottom">
             <div class="footer_logo hidden_mobile">
                <a href="https://www.sgstar.edu.vn/"><img src="images/logo_1.png" style="max-height: 76px;" alt=""></a>
                <a href="https://www.sgstar.edu.vn/"><img src="images/ib-world-school-logo-1-colour.png" style="max-height: 76px;" alt="PTC Member School"></a>
                <a href="https://www.sgstar.edu.vn/"><img src="images/ib-world-school-continuum1.png" style="max-height: 76px;" alt="IB World School Continuum"></a>
                <a href="https://www.sgstar.edu.vn/"><img src="images/logo_footer_cisn.png" style="max-height: 76px;" alt="IB World School"></a>
             </div>
              <div class="footer_logo hidden_desk">
                <div class="footer_logo_1">
                <a href="https://www.sgstar.edu.vn/"><img src="images/logo_1.png" alt=""></a>
                <a href="https://www.sgstar.edu.vn/"><img src="images/ib-world-school-logo-1-colour.png" alt="PTC Member School"></a>
                <div class="footer_logo_2">
                <a href="https://www.sgstar.edu.vn/"><img src="images/ib-world-school-continuum1.png" alt="IB World School Continuum"></a>
                <a href="https://www.sgstar.edu.vn/"><img src="images/logo_footer_cisn.png" alt="IB World School"></a>
                </div>
               
             </div>
             
              <div class="newsletter">
                <form name="frmSignup" class="input-group fv-form fv-form-bootstrap" id="frmSignup" method="post" action="https://www.SaiGon Starhcmc.com/index.php?m=home&amp;c=save_signup" novalidate><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                  <input type="text" class="noshow" name="leaveblank" style="display:none;">
                  <input type="text" class="noshow" name="dontchange" value="http://" style="display:none;">
                  <input type="text" class="noshow" name="captcha_request" id="captcha_request_f" style="display:none;" value="1502560">
                  <div class="form-group contact_int newslet_email">
                      <input type="email" name="newsletter_email" id="newsletter_email" class="form-control left" placeholder="Email" style=" color: #454545; " required data-fv-field="newsletter_email">
                  <small class="help-block" data-fv-validator="notEmpty" data-fv-for="newsletter_email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter your email.</small><small class="help-block" data-fv-validator="emailAddress" data-fv-for="newsletter_email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address.</small><small class="help-block" data-fv-validator="regexp" data-fv-for="newsletter_email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address.</small></div>
                  <span class="input-group-btn">
                    <!--button class="btn btn-default" type="button">Subscribe</button-->
                    <input type="submit" onclick="check_human_requesth();" class="btn btn-default" id="submisb" value="SUBSCRIBE">
                  </span>
                </form>
              </div><!-- /input-group -->
             
          </div>

       </div>

       <div class="clr"></div>

       <div class="copyright">
          © 2019 <span class="c_f5720c">Sai gon international school</span> <span class="sep">-</span> <a href="https://www.sgstar.edu.vn/">Imprint</a>
       </div>

   </div>
</div>

<style type="text/css">
  .newslet_email{
    display: table-cell;
  }
  .newslet_email .help-block{
    position: absolute;
    bottom: -26px;
    color: red;
    display: block;
  }
  .newsletter .btn{
    background: #f5720c !important;    
  }
</style>


<script type="text/javascript">
function check_human_requesth() {
  var postURL = "https://www.SaiGon Starhcmc.com/index.php?m=home&c=ajax_check_human&captcha="+$("#captcha_request_f").val();
  $.ajax({
    cache:false,
    async:false,
    type: "POST",
    url: postURL,
    success: function(msg) {
      $("#frmSignup").append(msg);
    }
  });
}

jQuery(document).ready(function($) {
  $("#frmSignup")
    .formValidation({
        button: {
            selector: '#submisb',
            disabled: 'disabled'
        },
        fields: {
          newsletter_email: {
            validators: {
              notEmpty: {
                message: 'Please enter your email.'
              },
              emailAddress: {
                message: 'Please enter a valid email address.'
              },
              regexp: {
                regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                message: 'Please enter a valid email address.'
              }
            }
          },    
        }
    })    
    .on('err.validator.fv', function(e, data) {
            // data.bv        --> The FormValidation.Base instance
            // data.field     --> The field name
            // data.element   --> The field element
            // data.validator --> The current validator name

            if (data.field === 'newsletter_email') {
                // The email field is not valid
                data.element
                    .data('fv.messages')
                    // Hide all the messages
                    .find('.help-block[data-fv-for="' + data.field + '"]').hide()
                    // Show only message associated with current validator
                    .filter('[data-fv-validator="' + data.validator + '"]').show();
            }
        });
});
$(window).scroll(function(){
    var top = $(window).scrollTop();
    
    if(top>0){
        $("#menu_scroll").addClass("header_top_scroll");        
    }
    else{
        $("#menu_scroll").removeClass("header_top_scroll");        
    }

});
jQuery(function($){    
    $('#editcontentModal').on('shown.bs.modal', function() {
      $(document).off('focusin.modal');
  });
});
function show_edit_content(str_config){  
  $("#frEditcontent").attr("action","#/load_edit_content.php");
    $("#str_config").val(str_config); 
    $('#edit_content_show').load('https://www.SaiGon Starhcmc.com/load_edit_content.php?str_config='+str_config,function(result){
            $('#editcontentModal').modal('show');
            $("#is_show_edit").val(1);
        });
}
function show_edit_resource(key){      
    $("#frEditcontent").attr("action","#/update_resource.php");
    $("#resource_key").val(key);
    $('#edit_content_show').load('#/update_resource.php?key='+key,function(result){
    $('#editcontentModal').modal('show');          
      });
}
</script>


<input type="hidden" id="is_show_edit" name="is_show_edit" value="0">
<div id="editcontentModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form action="#/load_edit_content.php" id="frEditcontent" method="post">
          <input type="hidden" name="str_config" id="str_config" value="">
          <input type="hidden" name="resource_key" id="resource_key" value="">
          <input type="hidden" name="url_redi" value="#">          
          <div id="edit_content_show"></div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="$(&#39;#frEditcontent&#39;).submit();">Save</button>
      </div>
    </div>
  </div>
</div>


<div id="sysAlertModal" class="modal fade sysAlertModal" role="dialog">
     <div class="modal-dialog">
        <div class="modal-content">
               <div class="modal-header" id="sysalert_header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h4 class="modal-title">Message</h4>
               </div>
               <div class="modal-body">
                    <p id="sys_alert"></p>
               </div>               
        </div>
    </div>
</div>

<script type="text/javascript">
jQuery(function($){
    function show_alert(msg){
        $("#sys_alert").html(msg);
        $('#sysAlertModal').modal();
    }
        $('#sysAlertModal').on('hidden.bs.modal', function (e) {
       $.ajax({
                type: "POST",
                data: "",
                url: "https://www.SaiGon Starhcmc.com/remove_alert.php",
                success: function(msg)
                {
                }
        });
    });
});  
</script>


<a href="javascript:void(0);" class="social_open" id="bt_open">Book a tour</a>

<div class="social_group hidden">
   <a href="javascript:void(0);" class="close" id="bt_close"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                 <div class="group_1">
                <a href="booktour.html" target="_blank" class="download">Book a tour</a>
                <a href="booktour.html" target="_blank" class="download">Inquire more information</a>
             </div> 
              
   <div class="group_2">
     <a href="#" target="_blank" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
     <a href="#" target="_blank" class="lin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
     <a href="#" target="_blank" class="in"><i class="fa fa-instagram" aria-hidden="true"></i></a>
     <a href="#" target="_blank" class="yu"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
   </div>
   Social netwok
</div>