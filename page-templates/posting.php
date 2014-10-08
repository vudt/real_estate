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
                        <?php load_template(get_template_directory() . '/page-templates/inc/posting/info-header.php', true) ?>
                    </div>
                    <div class="d-title"><h3><i class="fa fa-info fa-lg"></i>Thông tin mô tả</h3></div>
                    <div class="box-post info-description">
                        <?php load_template(get_template_directory() . '/page-templates/inc/posting/info-description.php', true) ?>
                    </div>
                    <div class="d-title"><h3><i class="fa fa-info fa-lg"></i>Thông tin cơ bản</h3></div>
                    <div class="box-post basic">
                        <?php load_template(get_template_directory() . '/page-templates/inc/posting/info-basic.php', true) ?>
                    </div>
                    <div class="d-title"><h3><i class="fa fa-info fa-lg"></i>Thông tin bổ sung</h3></div>
                    <div class="box-post extra">
                        <?php load_template(get_template_directory() . '/page-templates/inc/posting/info-extra.php', true) ?>
                    </div>
                    <div class="d-title"><h3><i class="fa fa-phone-square fa-lg"></i>Thông tin liên hệ</h3></div>
                    <div class="box-post p-contact">
                        <?php load_template(get_template_directory() . '/page-templates/inc/posting/info-contact.php', true) ?>
                    </div>
                    <div class="d-title"><h3><i class="fa fa-map-marker fa-lg"></i>Bản đồ</h3></div>
                    <div class="box-post p-map">
                        <?php load_template(get_template_directory() . '/page-templates/inc/posting/info-map.php', true) ?>
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

