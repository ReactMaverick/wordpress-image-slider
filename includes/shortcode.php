<?php
// Shortcode to Display Image Slider
function isp_image_slider_shortcode() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'slider_images';

    // Fetch all images
    $slider_images = $wpdb->get_results("SELECT * FROM $table_name");

    // if ($slider_images) {
    //     $output = '<div class="image-slider">';
    //     foreach ($slider_images as $image) {
    //         $output .= '<div class="slide">';
    //         $output .= '<img src="' . esc_url($image->slider_image) . '" alt="' . esc_html($image->title) . '">';
    //         $output .= '</div>';
    //     }
    //     $output .= '</div>';
    // } else {
    //     $output = '<p>No images found.</p>';
    // }

    if ($slider_images) {
    $output = '<div class="mkd-wrapper">
		<div class="mkd-wrapper-inner">

			<div class="mkd-content" style="margin-top: -85px">
				<div class="mkd-content-inner">
					<div class="mkd-full-width">
						<div class="mkd-full-width-inner">
							<section class="wpb-content-wrapper">
								<div class="vc_row wpb_row vc_row-fluid mkd-section vc_custom_1487666641520 mkd-content-aligment-center"
									style>
									<div class="clearfix mkd-full-section-inner">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner vc_custom_1486554741714">
												<div class="wpb_wrapper">
													<p class="rs-p-wp-fix"></p>
													<rs-module-wrap id="rev_slider_17_2_wrapper" data-source="gallery"
														style="visibility:hidden;background:transparent;padding:0;">
														<rs-module id="rev_slider_17_2" style data-version="6.6.5">
															<rs-slides style="overflow: hidden; position: absolute;">
																<!-- RS Slides -->
																<!-- Variables => 
																 data-key = slide id, format = rs-1, rs-2, rs-3.....
																 data-title = slide title,
																 data-thumb = slide thumbnail, 
																  -->';
                                   
                                                                  
    foreach ($slider_images as $index => $image) {
        $output .='<rs-slide style="position: absolute;" data-key="rs-' . $index . '"
        data-title="'.$image->thumbnail_text.'"
        data-thumb="' . esc_url($image->slider_image) . '"
        data-in="o:0;" data-out="a:false;"
        data-d3="f:incube;z:400;">
        <img src=""
            alt title="Soccer Club"
            class="rev-slidebg tp-rs-img rs-lazyload"
            data-lazyload="' . esc_url($image->slider_image) . '"
            data-parallax="10" data-no-retina>
        <rs-layer id="slider-17-slide-1-layer-6"
            class="Title-Centerd-87px" data-type="text"
            data-color="rgba(255, 255, 255, 1)"
            data-rsp_ch="on"
            data-xy="x:c;xo:2px,0,0,0;y:m;yo:-73px,-110px,-65px,-64px;"
            data-text="w:normal;s:87,60,48,30;l:87,60,48,35;fw:700;a:center;"
            data-dim="w:1210px,781px,621px,250px;h:261px,123px,152px,141px;"
            data-basealign="slide"
            data-frame_0="y:50px;tp:600;"
            data-frame_1="tp:600;e:expo.out;st:500;sp:600;sR:500;"
            data-frame_999="y:-50px;o:0;tp:600;e:expo.in;st:w;sR:1400;"
            style="z-index:5;font-family:\'Titillium Web\';text-transform:uppercase;letter-spacing:-2px;">'. $image->title .'
        </rs-layer><rs-layer id="slider-17-slide-1-layer-7"
            class="subtitle-centred-22px" data-type="text"
            data-color="rgba(255, 255, 255, 1)"
            data-rsp_ch="on"
            data-xy="x:c;xo:0,0,0,-1px;y:m;yo:11px,-13px,7px,14px;"
            data-text="w:nowrap,nowrap,normal,normal;s:22,22,20,19;l:30,30,26,25;a:center;"
            data-dim="w:auto,auto,405px,333px;h:auto,auto,53px,51px;"
            data-basealign="slide"
            data-frame_0="y:50px;tp:600;"
            data-frame_1="tp:600;e:expo.out;st:700;sp:600;sR:700;"
            data-frame_999="y:-50px;o:0;tp:600;e:expo.in;st:w;sR:1200;"
            style="z-index:6;font-family:\'Titillium Web\';">'.$image->description.'
        </rs-layer><rs-layer id="slider-17-slide-1-layer-8"
            data-type="text"
            data-color="rgba(255, 255, 255, 1)"
            data-xy="x:c;xo:-90px,-90px,-90px,0;y:m;yo:95px,69px,104px,97px;"
            data-text="w:normal;l:22;a:center;"
            data-dim="w:300px,300px,300px,704px;"
            data-basealign="slide" data-rsp_bd="off"
            data-frame_0="y:50px;tp:600;"
            data-frame_1="tp:600;e:expo.out;st:900;sp:600;sR:900;"
            data-frame_999="y:-50px;o:0;tp:600;e:expo.in;st:w;sR:1000;"
            style="z-index:7;font-family:\'Open Sans\';"><a
                itemprop="url"
                href="'.$image->read_more_link.'"
                target="_self"
                style="margin: 7px 7px 7px 7px"
                class="mkd-btn mkd-btn-large mkd-btn-solid mkd-btn-icon">
                <span class="mkd-btn-text">Read More</span>
                <i
                    class="mkd-icon-font-awesome fa fa-chevron-right "></i></a>
        </rs-layer><rs-layer id="slider-17-slide-1-layer-9"
            data-type="text"
            data-color="rgba(255, 255, 255, 1)"
            data-xy="x:c;xo:90px,90px,90px,-553px;y:m;yo:95px,69px,104px,-149px;"
            data-text="w:normal;l:22;a:center;"
            data-dim="w:300px,300px,300px,704px;"
            data-vbility="t,t,t,f" data-basealign="slide"
            data-rsp_bd="off" data-frame_0="y:50px;tp:600;"
            data-frame_1="tp:600;e:expo.out;st:900;sp:600;sR:900;"
            data-frame_999="y:-50px;o:0;tp:600;e:expo.in;st:w;sR:1000;"
            style="z-index:8;font-family:\'Open Sans\';"><a
                itemprop="url" href="'.$image->see_more_link.'" target="_self"
                style="color: #ffffff;margin: 7px 7px 7px 7px"
                class="mkd-btn mkd-btn-large mkd-btn-outline mkd-btn-icon">
                <span class="mkd-btn-text">See More</span>
                <i
                    class="mkd-icon-font-awesome fa fa-chevron-right "></i></a>
        </rs-layer> </rs-slide>
    
        <!-- RS Slides -->

        
        
'; 
        }

                                                               
													$output .='</rs-slides></rs-module>
													
													</rs-module-wrap>

												</div>
											</div>
										</div>
									</div>
								</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>';
} else {
        $output = '<p>No images found. Please upload some images in Image Slider tab.</p>';
    }

    return $output;
}
add_shortcode('image_slider', 'isp_image_slider_shortcode');
