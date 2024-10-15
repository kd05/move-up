<?php
/*
 * Template Name: About Template
 * description: About Template
 */

get_header();

?>



<?php
//        Top Banner Image
top_image_pages_html();
?>


<?php
// Get all team members
$team_members = get_posts([
    'post_type' => 'team-member',
    'numberposts' => -1, // Get all team members
]);
?>

    <!-- The Modal -->
    <div class="modal-wrapper">
        <?php if ($team_members) : ?>
            <?php foreach ($team_members as $team_member) : ?>
                <div class="modal" id="modal-<?php echo esc_attr($team_member->ID); ?>"> <!-- This is the background overlay -->
                    <div class="modal-content"> <!-- This is the actual modal/popup box -->
                        <h1><?php echo esc_html(get_the_title($team_member->ID)); ?></h1>
                        <div><?php echo apply_filters('the_content', $team_member->post_content); ?></div> <!-- Use the post content for the modal -->
                        <div class="text-center">
                            <span class="modal-close btn">Close</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <section class="bg-gray">
        <div class="container" data-aos="fade-up">
            <h1>Meet the Team</h1>
            <div class="news-block meet-block">
                <?php if ($team_members) : ?>
                    <?php foreach ($team_members as $team_member) : ?>
                        <div class="card" >
                            <div class="card-img-block"  data-modal-target="modal-<?php echo esc_attr($team_member->ID); ?>">
                                <?php
                                // Assuming you have a featured image set for each team member
                                if (has_post_thumbnail($team_member->ID)) {
                                    echo get_the_post_thumbnail($team_member->ID, 'custom-390-361');
                                } else {
                                    // Placeholder image if no thumbnail is set
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/placeholder.png" />';
                                }
                                ?>
                            </div>
                            <div class="card-content bg-white">
                                <h5><?php echo esc_html(get_the_title($team_member->ID)); ?></h5>
                                <p>
                                    <?php
                                    // Get custom field for locations and email
                                    $locations = get_field('_locations', $team_member->ID);
                                    $email = get_field('_email_address', $team_member->ID);
                                    echo esc_html($locations);
                                    ?>
                                </p>
                                <a href="mailto:<?php echo esc_attr($email); ?>" class="link-btn">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mail-icon.svg" /> <?php echo esc_html($email); ?>
                                </a>
                                <a href="javascript:void(0)" class="link-btn" data-modal-target="modal-<?php echo esc_attr($team_member->ID); ?>">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/read-icon.svg" /> Read Bio
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>



    <?php

    // Fetch the repeater field data for 'partners_logos'
    $partners_logos = get_field('partners_logos');
    $all_partners_link = get_field('all_partners_link');
    ?>

    <!-- Future Today Section Start -->
    <section class="bg-light-purpal">
        <div class="container">
            <div class="partner-box bg-white text-center">
                <h1>Partners</h1>
                <div class="partner-card-item">
                    <?php if( $partners_logos ) : ?>
                        <?php foreach( $partners_logos as $partner ) :
                            // Extract subfields into variables
                            $logo = $partner['logo'];
                            $link = $partner['link'];
                            ?>
                            <div class="card">
                                <?php if ($link): ?>
                                    <a href="<?php echo esc_url($link); ?>" target="_blank">
                                        <img src="<?php echo esc_url($logo); ?>" />
                                    </a>
                                <?php else: ?>
                                    <img src="<?php echo esc_url($logo); ?>" />
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <?php if ($all_partners_link): ?>
                <a href="<?php echo $all_partners_link; ?>" target="_blank" class="btn">View all partners</a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Future Today Section End -->



    <?php
    // Use the do_shortcode() function to run the 'display_blogs' shortcode
    echo do_shortcode('[display_blogs title="Projects & News" posts_per_page="5"]');
    ?>



<?php get_footer(); ?>