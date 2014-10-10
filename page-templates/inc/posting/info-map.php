<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php
$userInfo = new UserInfo();
$info = $userInfo->getInfo();
$latlgt = $userInfo->getLatLng($info->meta_data['ward'], 'wards', 'wardid');
?>
 
<p>Hãy chọn vị trí chính xác trên bản đồ bằng cách click chuột hoặc kéo rê biểu tượng vị trí đến chính xác của tài sản. Điều này giúp cho tài sản của bạn được ìm thấy nhanh hơn nhiều lần 1 tin không có vị trí bản đồ</p>
<div id="map_canvas" class="map-post"></div>
<input type="hidden" id="location" value="<?php echo $latlgt->location; ?>" />
