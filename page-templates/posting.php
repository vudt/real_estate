<?php
/**
 * Template Name: Posting Page
 *
 * @package Real Estate 
 * @subpackage Real Estate Theme
 * @since Real Estate Theme 1.0
 */
?>
<?php get_header(); ?>
<section class="block-main container">
    <div class="sidebar">
        <div class="w-220">
            <h3 class="h-info-account">Thông tin tài khoản</h3>
            <ul class="box-sb">
                <li><a href="#">Bluevn</a></li>
                <li>Mã tài khoản <span>1572</span></li>
                <li>Số lượt up <span>0</span></li>
                <li>Up miễn phí <span>1</span></li>
                <li>Cash <span>0</span></li>
            </ul>
            <h3 class="h-utility">Tiện ích người dùng</h3>
            <ul class="box-sb">
                <li><a href="#">Nạp Cash</a></li>
                <li><a href="#">Mua tin vip</a></li>
                <li><a href="#">Mua lượt up tin</a></li>
                <li><a href="#">Lịch sử giao dịch</a></li>
                <li><a href="#">Lịch sử nhắn tin</a></li>
                <li><a href="#">Lịch sử sử dụng lượt up</a></li>
            </ul>
            <h3 class="h-manage-post">Quản lý tin</h3>
            <ul class="box-sb">
                <li><a href="#">Đăng tin rao bán cho thuê</a></li>
                <li><a href="#">Bạn cần mua/cần thuê nhà?</a></li>
                <li><a href="#">Các tin đang hiển thị</a></li>
                <li><a href="#">Các tin hết hạn hiển thị</a></li>
                <li><a href="#">Các tin đang chờ duyệt</a></li>
                <li><a href="#">Các tin không duyệt</a></li>   
            </ul>
            <h3 class="h-post-saved">Các tin đã lưu</h3>
            <ul class="box-sb">
                <li><a href="#">Các nhà đất đã lưu</a></li>
            </ul>
            <h3 class="h-manage-account">Quản lý tài khoản</h3>
            <ul class="box-sb">
                <li><a href="#">Thay đổi thông tin cá nhân</a></li>
                <li><a href="#">Thay đổi mật khẩu</a></li>
                <li><a href="#">Thoát khỏi hệ thống</a></li>
            </ul>
            <h3 class="h-guide">Hướng dẫn</h3>
            <ul class="box-sb">
                <li><a href="#">Hướng dẫn đăng tin</a></li>
                <li><a href="#">Hướng dẫn nạp Cash</a></li>
                <li><a href="#">Hướng dẫn Up tin tự động</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="w-765">
            <div class="bg-banner">
                <a href="#" title="Đăng ký vip ngay">Đăng Ký Vip Ngay</a>
            </div>
            <div class="user_post">
                <form action="#" method="post" name="frm-post">
                    <div class="box-post p-header">
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
                    </div>
                    <div class="d-title"><h3><i class="fa fa-info fa-lg"></i>Thông tin mô tả</h3></div>
                    <div class="box-post info-description">
                        <div class="form-item tarea">
                            <label>Nội dung tin</label>
                            <textarea name="description"></textarea>
                        </div>
                        <div class="form-item">
                            <label>Hình Ảnh</label>
                            <input type="file" name="thumbnail">
                        </div>
                    </div>
                    <div class="d-title"><h3><i class="fa fa-info fa-lg"></i>Thông tin cơ bản</h3></div>
                    <div class="box-post basic">
                        <div class="form-item">
                            <label>Hình thức bđs</label>
                            <select name="type_real_estate">
                                <option value="1">Bất động sản bán</option>
                                <option value="2">Bất động sản mua</option>
                            </select>
                        </div>
                        <div class="wrapp">
                            <div class="form-item col-xs-6">
                                <label>Loại</label>
                                <select>
                                    <option value="1">Chọn loại nhà đất</option>
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
                                <select>
                                    <option value="0">Chọn tỉnh/thành phố</option>
                                </select>    
                            </div>
                            <div class="form-item col-xs-6">
                                <label>Quận/Huyện</label>
                                <select>
                                    <option value="0">Chọn quận/huyện</option>
                                </select>
                            </div>
                        </div>
                        <div class="wrapp">
                            <div class="form-item col-xs-6">
                                <label>Phường/Xã</label>
                                <select>
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
                    </div>
                    <div class="d-title"><h3><i class="fa fa-info fa-lg"></i>Thông tin bổ sung</h3></div>
                    <div class="box-post extra">
                        <p>Các bạn nên điền đầy đủ thông tin bên dưới đây để những khách hàng có nhu cầu có thể nắm bắt được đầy đủ thông tin về bất động sản của bạn hơn. Theo thống kê thì 1 tin tức được điền đầy đủ thông tin sẽ có lượng truy cập gấp 2 lần tin không điền đầy đủ</p>
                        <div class="wrapp">
                            <div class="form-item col-xs-6">
                                <label>Tình trạng pháp lý</label>
                                <select>
                                    <option value="1">Sổ đỏ</option>
                                </select>
                            </div>
                            <div class="form-item col-xs-6">
                                <label>Đường vào</label>
                                <select>
                                    <option value="1">m2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-item">
                            <label>Hướng nhà</label>
                            <select>
                                <option value="1">Đông bắc</option>
                            </select>
                        </div>
                        <div class="wrapp">
                            <div class="form-item col-xs-5">
                                <label>Số tầng</label>
                                <input type="text" name="num_layer">
                            </div>
                            <div class="form-item col-xs-3">
                                <label>Số phòng</label>
                                <input type="text" name="num_room">
                            </div>
                            <div class="form-item col-xs-4">
                                <label>Số Toilet</label>
                                <input type="text" name="num_wc">
                            </div>
                        </div>
                        <div class="wrapp">
                            <div class="form-item col-xs-6">
                                <label>Diện tích khuôn viên</label>
                                <input type="text" placeholder="Chiều ngang trước">
                                <span>X</span>
                            </div>
                            <div class="form-item col-xs-3">
                                <input type="text" placeholder="Chiều dài">
                                <span>X</span>
                            </div>
                            <div class="form-item col-xs-3">
                                <input type="text" placeholder="Chiều ngang sau">
                            </div>
                        </div>
                        <div class="wrapp">
                            <div class="form-item col-xs-6">
                                <label>Diện tích xây dựng</label>
                                <input type="text" placeholder="Chiều ngang trước">
                                <span>X</span>
                            </div>
                            <div class="form-item col-xs-3">
                                <input type="text" placeholder="Chiều dài">
                                <span>X</span>
                            </div>
                            <div class="form-item col-xs-3">
                                <input type="text" placeholder="Chiều ngang sau">
                            </div>
                        </div>
                    </div>
                    <div class="d-title"><h3><i class="fa fa-phone-square fa-lg"></i>Thông tin liên hệ</h3></div>
                    <div class="box-post p-contact">
                        <div class="form-item">
                            <label>Họ và tên</label>
                            <input type="text">
                        </div>
                        <div class="form-item">
                            <label>Địa chỉ</label>
                            <input type="text">
                        </div>
                        <div class="form-item">
                            <label>Điện Thoại</label>
                            <input type="text">
                        </div>
                        <div class="form-item">
                            <label>Di Động</label>
                            <input type="text">
                        </div>
                        <div class="form-item">
                            <label>Email</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="d-title"><h3><i class="fa fa-map-marker fa-lg"></i>Bản đồ</h3></div>
                    <div class="box-post p-map">
                        <p>Hãy chọn vị trí chính xác trên bản đồ bằng cách kéo rê biểu tượng vị trí đến chính xác của tài sản. Điều này giúp cho tài sản của bạn được ìm thấy nhanh hơn nhiều lần 1 tin không có vị trí bản đồ</p>
                        <div class="map-post"><img src="images/map-post.png"></div>
                    </div>
                    <div class="row-btn">
                        <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
                        <input type="submit" class="btn-register" name="submit" value="Đăng tin">
                        <input type="submit" class="btn-cancel" name="submit" value="Hủy tin">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

