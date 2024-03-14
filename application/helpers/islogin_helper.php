<?php
//-->session
function IsAdmin(){
 $ci =& get_instance();
 //session akan aktif jika session bernilai 1
 if($ci->session->userdata('IsAdmin')<>1){
  redirect('auth','refresh');
}
}
?>