<?php
/**
 * Template Name: Registration Page
 *
 * @package Real Estate 
 * @subpackage Real Estate Theme
 * @since Real Estate Theme 1.0
 */
?>
<?php get_header(); ?>
<section class="block-main container">
    <div class="sidebar">
        <div class="w-330">
            <h3 class="h3-330">Lợi ích đăng ký thành viên</h3>
            <ul class="b-list">
                <li>
                    <p>Cập nhật thời gian thực</p>
                    <p>Chúng tôi sẽ gửi email cho các bạn gói dịch vụ mới cũng như thông tin thị trường nhà đất mới nhất, tin tức của bạn</p>
                </li>
                <li>
                    <p>Theo dõi ưa thích của bạn</p>
                    <p>Chúng tôi sẽ gửi email cho các bạn gói dịch vụ mới cũng như thông tin thị trường nhà đất mới nhất, tin tức của bạn</p>
                </li>
                <li>
                    <p>Hướng dẫn và tư vấn</p>
                    <p>Chúng tôi sẽ gửi email cho các bạn gói dịch vụ mới cũng như thông tin thị trường nhà đất mới nhất, tin tức của bạn</p>
                </li>
                <li>
                    <a href="#" title=""><img src="<?php echo get_template_directory_uri() ?>/images/luxury.png"  title="" alt=""/></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="w-660">
            <div class="notes">
                <a href="#" class="col-xs-7 tin-vip" title=""><img src="<?php echo get_template_directory_uri() ?>/images/tin-vip.png" alt="" title="" /></a>
                <div class="col-xs-5 second-tv">
                    <h3>Lưu ý khi đăng tin</h3>
                    <ul>
                        <li>- Thông tin có dấu(*) là bắt buộc</li>
                        <li>- Ghi rõ thông tin yêu cầu</li>
                        <li>- Không gửi lại yêu cầu đã gửi</li>
                        <li>- Dùng firefox hoặc chrome để hiển thị tốt nhất</li>
                    </ul>
                </div>
            </div>
            <div class="top-register">
                <h3 class="col-xs-4">Tạo tài khoản miễn phí</h3>
                <p class="col-xs-5">Đăng nhập bằng</p>
                <ul class="socials">
                    <li><a href="#" title="Facebook"></a></li>
                    <li><a href="#" title="Yahoo"></a></li>
                    <li><a href="#" title="Google"></a></li>
                </ul>
            </div>
            <div class="main-register">
            <?php if(have_posts()) while(have_posts()) : the_post();
                    the_content();
                  endwhile;
            ?>
            </div>
        </div>
    </div> 
    <div class="register-adv"><a href="#" title=""><img src="<?php echo get_template_directory_uri() ?>/images/adv1000.png" alt="" /></a></div>
</section>
<?php get_footer(); ?>