<?php

   // Get existing options
    $same_day_covered = get_option('same_day_covered', '');
    $overnight_covered = get_option('overnight_covered', '');
    $two_nights_covered = get_option('two_nights_covered', '');
    $three_nights_covered = get_option('three_nights_covered', '');
    $extra_night_covered = get_option('extra_night_covered', '');

    $same_day_uncovered = get_option('same_day_uncovered', '');
    $overnight_uncovered = get_option('overnight_uncovered', '');
    $two_nights_uncovered = get_option('two_nights_uncovered', '');
    $three_nights_uncovered = get_option('three_nights_uncovered', '');
    $extra_night_uncovered = get_option('extra_night_uncovered', '');

?>
<div class="wrap">
    <h1>Parking Rates</h1>
    <form method="post" action="">
        <div class="price-section" style="display: flex;">
            <div class="col-2 coverd-rates">
                <table class="form-table">
                    <tbody>
                        <tr>
                            <h1>Car Covered:</h1>  		
                        </tr>
                        <tr>
                            <th scope="row">Same Day</th>
                            <td><input type="number" name="same_day_covered" value="<?php echo esc_attr($same_day_covered); ?>" placeholder="Rate for Same Day" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Overnight</th>
                            <td><input type="number" name="overnight_covered" value="<?php echo esc_attr($overnight_covered); ?>" placeholder="Rate for Overnight" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Two Nights</th>
                            <td><input type="number" name="two_nights_covered" value="<?php echo esc_attr($two_nights_covered); ?>" placeholder="Rate for Two Nights" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Three Nights</th>
                            <td><input type="number" name="three_nights_covered" value="<?php echo esc_attr($three_nights_covered); ?>" placeholder="Rate for Three Nights" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Extra Nights: +$22/night</th>
                            <td><input type="number" name="extra_night_covered" value="<?php echo esc_attr($extra_night_covered); ?>" placeholder="Rate for Extra Night" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-2 uncovered-rates">
                <table class="form-table">
                    <tbody>
                        <tr>
                            <h1>Car Uncovered:</h1>
                        </tr>
                        <tr>
                            <th scope="row">Same Day</th>
                            <td><input type="number" name="same_day_uncovered" value="<?php echo esc_attr($same_day_uncovered); ?>" placeholder="Rate for Same Day" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Overnight</th>
                            <td><input type="number" name="overnight_uncovered" value="<?php echo esc_attr($overnight_uncovered); ?>" placeholder="Rate for Overnight" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Two Nights</th>
                            <td><input type="number" name="two_nights_uncovered" value="<?php echo esc_attr($two_nights_uncovered); ?>" placeholder="Rate for Two Nights" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Three Nights</th>
                            <td><input type="number" name="three_nights_uncovered" value="<?php echo esc_attr($three_nights_uncovered); ?>" placeholder="Rate for Three Nights" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Extra Nights: +$20/night</th>
                            <td><input type="number" name="extra_night_uncovered" value="<?php echo esc_attr($extra_night_uncovered); ?>" placeholder="Rate for Extra Night" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <p><input type="submit" name="save_parking_rates" value="Save Rates" class="button button-primary" /></p>
    </form>
</div>


<?php

// form is submitted
if (isset($_POST['save_parking_rates'])) {
    // Sanitize and update options
    update_option('same_day_covered', sanitize_text_field($_POST['same_day_covered']));
    update_option('overnight_covered', sanitize_text_field($_POST['overnight_covered']));
    update_option('two_nights_covered', sanitize_text_field($_POST['two_nights_covered']));
    update_option('three_nights_covered', sanitize_text_field($_POST['three_nights_covered']));
    update_option('extra_night_covered', sanitize_text_field($_POST['extra_night_covered']));
    
    update_option('same_day_uncovered', sanitize_text_field($_POST['same_day_uncovered']));
    update_option('overnight_uncovered', sanitize_text_field($_POST['overnight_uncovered']));
    update_option('two_nights_uncovered', sanitize_text_field($_POST['two_nights_uncovered']));
    update_option('three_nights_uncovered', sanitize_text_field($_POST['three_nights_uncovered']));
    update_option('extra_night_uncovered', sanitize_text_field($_POST['extra_night_uncovered']));
    
    // Redirect back to the admin page with a success message
    wp_redirect(admin_url('admin.php?page=parking_rates'));
    exit;
}