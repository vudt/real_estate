<?php
/*
 *  Display a part of page posting 
 */
?>

<div class="form-item">
    <label>Hình thức bđs</label>
    <?php
    $args = array('parent' => 0, 'hide_empty' => 0, 'exclude' => 1);
    $cats = get_categories($args);
    ?>
    <select name="type_real_estate">
        <option value="none"> -- Select -- </option>
        <?php foreach($cats as $cat): ?>
        <option value="<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="wrapp">
    <div class="form-item col-xs-6">
        <label>Loại</label>
        <select name="child-of-type" id="child-of-type">
            <option value="1"> -- Select -- </option>
        </select>
    </div>
    <div class="form-item col-xs-6">
        <label>Vị trí nhà đất</label>
        <select>
            <option value="1">Mặt tiền</option>
        </select>
    </div>
</div>
<div class="form-item">
    <label>Địa chỉ</label>
    <input type="text" name="address">
</div>
<div class="wrapp">
    <div class="form-item col-xs-6">
        <label>Tỉnh/Thành phố</label>
        <select name="province" class="cbb" id="province">
            <option value="0">Chọn tỉnh/thành phố</option>
            <?php 
            $tblName = $wpdb->prefix . 'cities';
            $cities = $wpdb->get_results("SELECT provinceid AS value, name AS name FROM $tblName");
            foreach($cities as $city): ?>
                <option value="<?php echo $city->value ?>"><?php echo $city->name; ?></option>
            <?php endforeach; ?>
        </select>    
    </div>
    <div class="form-item col-xs-6">
        <label>Quận/Huyện</label>
        <select name="district" class="cbb" id="district">
            <option value="0">Chọn quận/huyện</option>
        </select>
    </div>
</div>
<div class="wrapp">
    <div class="form-item col-xs-6">
        <label>Phường/Xã</label>
        <select name="wards" class="cbb" id="wards">
            <option value="0">Chọn phường/xã</option>
        </select>    
    </div>
    <div class="form-item col-xs-6">
        <label>Đường/Phố</label>
        <select>
            <option value="0">Chọn đường/phố</option>
        </select>
    </div>
</div>
<div class="form-item">
    <label>Dự án</label>
    <select>
        <option value="0">Chọn loại dự án</option>
    </select>    
</div>
<div class="form-item">
    <label>Diện tích</label>
    <input type="text" name="acreage"><span>m2</span>
</div>
<div class="wrapp">
    <div class="form-item col-xs-6">
        <label>Giá</label>
        <input type="text" name="price">
    </div>
    <div class="form-item col-xs-6">
        <label>Đơn vị</label>
        <select>
            <option value="1">Chọn đơn vị tiền tệ</option>
        </select>
    </div>    
</div>
<div class="form-item">
    <label>Tổng giá trị</label>
    <input type="text" name="total_price" value="3.000.000.000">
    <i class="fa fa-tags c-tags"></i>
</div>