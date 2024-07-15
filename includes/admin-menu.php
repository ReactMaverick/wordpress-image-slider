<?php
// Add admin menu for the image slider
function isp_admin_menu() {
    add_menu_page('Image Slider', 'Image Slider', 'manage_options', 'image-slider', 'isp_image_slider_page', 'dashicons-images-alt2');
}
add_action('admin_menu', 'isp_admin_menu');

// Admin page for managing images
function isp_image_slider_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'slider_images';

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['isp_submit'])) {
        $title = sanitize_text_field($_POST['title']);
        $slider_image = esc_url_raw($_POST['slider_image']);
        $description = sanitize_text_field($_POST['description']);
        $read_more_link = esc_url_raw($_POST['read_more_link']);
        $see_more_link = esc_url_raw($_POST['see_more_link']);
        $thumbnail_text = sanitize_text_field($_POST['thumbnail_text']);

        $wpdb->insert($table_name, array(
            'title' => $title,
            'slider_image' => $slider_image,
            'description' => $description,
            'read_more_link' => $read_more_link,
            'see_more_link' => $see_more_link,
            'thumbnail_text' => $thumbnail_text
        ));
    }

    // Fetch all images
    $slider_images = $wpdb->get_results("SELECT * FROM $table_name");
    ?>

    <div class="wrap">
        <h1>Image Slider</h1>
        <form method="post" action="">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Title</th>
                    <td><input type="text" name="title" value="" required /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Description</th>
                    <td><input type="text" name="description" value="" required /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Read More</th>
                    <td><input type="text" name="read_more_link" value="" required /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">See More</th>
                    <td><input type="text" name="see_more_link" value="" required /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Thumbnail Text</th>
                    <td><input type="text" name="thumbnail_text" value="" required /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Slider Image URL</th>
                    <td><input type="url" name="slider_image" id="slider_image" value="" required />
                        <button type="button" class="button" id="upload_slider_image_button">Upload Image</button>
                    </td>
                </tr>
                
            </table>
            <input type="submit" name="isp_submit" value="Add Image" class="button button-primary" />
        </form>

        <h2>Existing Images</h2>
        <table class="widefat fixed">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slider Image</th>
                    <th>Description</th>
                    <th>Read More</th>
                    <th>See More</th>
                    <th>Thumbnail Text</th>                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($slider_images) : ?>
                    <?php foreach ($slider_images as $image) : ?>
                        <tr>
                            <td><?php echo esc_html($image->title); ?></td>
                            <td><img src="<?php echo esc_url($image->slider_image); ?>" width="100" /></td>
                            <td><?php echo esc_html($image->description); ?></td>
                            <td><?php echo esc_url($image->read_more_link); ?></td>
                            <td><?php echo esc_url($image->see_more_link); ?></td>
                            <td><?php echo esc_html($image->thumbnail_text); ?></td>
                            <td><a href="?page=image-slider&action=delete&id=<?php echo $image->id; ?>" class="button button-secondary">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4">No images found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

// Handle delete action
function isp_handle_delete() {
    if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'slider_images';
        $id = intval($_GET['id']);
        $wpdb->delete($table_name, array('id' => $id));
    }
}
add_action('admin_init', 'isp_handle_delete');
