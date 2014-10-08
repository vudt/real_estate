<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>
<section class="block-main container">
    <div class="content">
        <div class="w-690">
            <!-- Start Feature---->
            <div class="box-feature">
                <h3 class="block-title col-xs-8"><i class="fa fa-university fa-1"></i>Bất Động Sản Nổi Bật</h3>
                <a class="col-xs-4 link-post" href="#" title="">Bạn muốn đăng tin tại đây</a>
                <ul class="row list-item">
                    <?php get_template_part('content', 'featured'); ?>
                </ul>
                <div class="adv col-xs-12"><img src="<?php echo get_template_directory_uri() ?>/images/adv1.png" /></div>
            </div> 
            <!---End Feature --->
            <!-- Start Vip---->
            <div class="box-articles">
                <h3 class="block-title col-xs-8"><i class="fa fa-university fa-1"></i>Tin Mua Bán Nhà Đất Vip Mới Nhất</h3>
                <a class="col-xs-4 link-post" href="#" title="">Bạn muốn đăng tin tại đây</a>
                <ul class="row list-item">
                    <?php get_template_part('content', 'sell-estate'); ?>
                </ul>
                <div class="adv col-xs-12"><img src="<?php echo get_template_directory_uri() ?>/images/adv2.png" /></div>
            </div><!---End Vip --->
            <!-- Start Vip---->
            <div class="box-articles">
                <h3 class="block-title col-xs-8"><i class="fa fa-university fa-1"></i>Tin Cho Thuê Nhà Đất Vip Mới Nhất</h3>
                <a class="col-xs-4 link-post" href="#" title="">Bạn muốn đăng tin tại đây</a>
                <ul class="row list-item">
                    <?php get_template_part('content', 'rent-estate'); ?>
                </ul>
                <div class="adv col-xs-12"><img src="<?php echo get_template_directory_uri() ?>/images/adv3.png" /></div>
            </div><!---End Vip --->
            <!-- Start Vip---->
            <div class="box-articles">
                <h3 class="block-title col-xs-8"><i class="fa fa-university fa-1 font1"></i>Bất động sản Mới Nhất</h3>
                <a class="col-xs-4 link-post" href="#" title="">Bạn muốn đăng tin tại đây</a>
                <ul class="row list-item">
                    <?php get_template_part('content', 'lastest-estate'); ?>
                </ul>
                <div class="adv col-xs-12"><img src="<?php echo get_template_directory_uri() ?>/images/adv4.png" /></div>
            </div><!---End Vip --->
        </div>  
    </div>
    <!--- Start Sidebar -->
    <?php get_sidebar(); ?>
    <!--- End Sidebar --->
</section>
<?php get_footer(); ?>
