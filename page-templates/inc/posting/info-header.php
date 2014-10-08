<?php

/*
 *  Display a part of page posting 
 */
?>

<div class="form-item">
    <label>Tiêu đề</label>
    <input type="text" class="w-625" name="title">
</div>
<div class="form-item">
    <label>Loại tin</label>
    <select name="type_post">
        <option value="1">Tin thường</option>
        <option value="2">Tin vip</option>
    </select>
    <p>Là loại tin bắt đầu bằng chữ màu tím, khung màu tím, hiển thị ở dưới tin VIP 1 và trên các tin thường. Tin được hiển thị trong 1 tháng dưới hình thức tin VIP 2 và 1 tháng trong tin thường. Được tặng 120 lượt up vào tài khoản để bạn lên lịch UP tin</p>
</div>
<div class="wrapp">
    <div class="form-item col-270">
        <label>Ngày bắt đầu</label>
        <input type="text" name="s_date" class="date-picker hasDatepicker" id="dp1412757496512">
        <i class="fa fa-calendar-o c-calendar"></i>
    </div>
    <div class="form-item col-260">
        <label>Ngày kết thúc</label>
        <input type="text" name="e_date" class="date-picker hasDatepicker" id="dp1412757496513">
        <i class="fa fa-calendar-o c-calendar"></i>
    </div>
    <div class="form-item col-200">
        <label>Chi Phí Đăng Tin</label>
        <input type="text" name="cash" value="0 Cash">
    </div>
</div>
