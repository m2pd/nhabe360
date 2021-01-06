<?php
$image = get_sub_field('home_banner');
if ($image && $image != '') :
    ?>
    <section id="page-banner" class="banner">
        <div class="banner__search" style="background-image: url(<?php echo $image; ?>)">
        </div>
    </section>
<?php endif; ?>

<!-- <section class="product py-5">
    <div class="container">
        <div class="heading d-flex justify-content-between align-items-center">
            <h2>Đất bán</h2>
            <a href="#">Xem thêm</a>
        </div>
        <div class="product__list product-list">
            <div class="row">
                
            </div>
        </div>
    </div>
</section> -->
<section class="product">
    <div class="container">
        <div class="heading d-flex justify-content-between align-items-center">
            <h2>Đất bán</h2>
            <a href="#">Xem thêm</a>
        </div>
        <div class="product__list product-list">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="box-item">
                        <div class="box-item__cover">
                            <div class="img">
                                <a href="#" title="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/house1.jpg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="box-item__info">
                            <h3 class="box-item__title">
                                <a href="#" class="box-item__link" title="HDMON Nguyễn Bảo House" target="_blank">
                                    HDMON Nguyễn Bảo House
                                </a>
                            </h3>
                            <p class="box-item__city">
                                <i class="fas fa-map-marker-alt"></i>
                                Tòa A1 HDMon Mỹ Đình 1 Nam Từ Liêm Hà Nội
                            </p>
                            <p class="box-item__price bold600">
                                Giá: ~ 8 tr
                            </p>
                            <p class="box-item__service bold600">
                                <span type="button" data-toggle="tooltip" data-placement="top" title="Phòng ngủ">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M0 9.68197C0 9.33805 0.278801 9.05925 0.622719 9.05925H21.2347V6.51091H19.2776V7.67361C19.2776 8.01753 18.9988 8.29633 18.6549 8.29633C18.3109 8.29633 18.0321 8.01753 18.0321 7.67361V5.88819C18.0321 5.54427 18.3109 5.26547 18.6549 5.26547H21.8574C22.2013 5.26547 22.4801 5.54427 22.4801 5.88819V9.05925H24.3773C24.7212 9.05925 25 9.33805 25 9.68197C25 13.5916 22.6501 16.9622 19.2889 18.457L19.4806 18.5371C19.7979 18.6698 19.9476 19.0345 19.815 19.3518C19.7151 19.5907 19.4838 19.7345 19.2402 19.7345C19.1601 19.7345 19.0788 19.7189 19.0003 19.6862L17.4835 19.0521C16.8129 19.201 16.1165 19.2802 15.4017 19.2802H9.59822C8.75133 19.2802 7.92996 19.1694 7.1472 18.9625L5.41614 19.6862C5.33767 19.719 5.25628 19.7345 5.17621 19.7345C4.93264 19.7345 4.70126 19.5906 4.60144 19.3518C4.46881 19.0345 4.61852 18.6698 4.93584 18.5371L5.43393 18.3289C2.22124 16.7754 0 13.4832 0 9.68197ZM9.59822 18.0348H15.4017C19.798 18.0348 23.412 14.6207 23.7315 10.3046H1.2683C1.58793 14.6208 5.20192 18.0348 9.59822 18.0348Z" fill="#828282" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    2
                                </span>

                                <span data-toggle="tooltip" data-placement="top" title="Số phòng WC">
                                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.6H8.6V6V0.6H16.4V14.4H0.6V6.6H8Z" stroke="#828282" stroke-width="1.2" />
                                        <rect x="8.3" y="11.3" width="0.6" height="2.4" fill="#4F4F4F" stroke="#828282" stroke-width="0.6" />
                                        <rect x="13.25" y="6.75" width="0.5" height="3.5" transform="rotate(-90 13.25 6.75)" fill="#4F4F4F" stroke="#828282" stroke-width="0.5" />
                                    </svg>

                                    2
                                </span>

                                <span type="button" data-toggle="tooltip" data-placement="top" title="Diện tích">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.545457 -2.62268e-08C0.846704 -1.17422e-08 1.09091 0.268629 1.09091 0.6L1.09091 14.4C1.09091 14.7314 0.846703 15 0.545457 15C0.24421 15 2.1846e-06 14.7314 2.19777e-06 14.4L2.74615e-06 0.6C2.75932e-06 0.268629 0.244211 -4.07115e-08 0.545457 -2.62268e-08Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4545 7C19.7558 7 20 7.26863 20 7.6L20 14.4C20 14.7314 19.7558 15 19.4545 15C19.1533 15 18.9091 14.7314 18.9091 14.4L18.9091 7.6C18.9091 7.26863 19.1533 7 19.4545 7Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.59995C20 7.93132 19.7558 8.19995 19.4545 8.19995L0.545454 8.19995C0.244208 8.19995 -5.96046e-07 7.93132 -5.96046e-07 7.59995C-5.96046e-07 7.26858 0.244208 6.99995 0.545454 6.99995L19.4545 6.99995C19.7558 6.99995 20 7.26858 20 7.59995Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.6C20 10.9313 19.7558 11.2 19.4545 11.2L0.545454 11.2C0.244208 11.2 -5.96046e-07 10.9313 -5.96046e-07 10.6C-5.96046e-07 10.2686 0.244208 9.99995 0.545454 9.99995L19.4545 9.99995C19.7558 9.99995 20 10.2686 20 10.6Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89999 4.2H16.9C17.3418 4.2 17.7 4.55817 17.7 5V7H18.9V5C18.9 3.89543 18.0046 3 16.9 3H6.89999C5.79542 3 4.89999 3.89543 4.89999 5V7H6.09999V5C6.09999 4.55817 6.45817 4.2 6.89999 4.2Z" fill="#828282" />
                                        <circle cx="3" cy="5" r="1.5" fill="#828282" />
                                    </svg>

                                    264m2
                                </span>

                            </p>
                            <a href="#" class="box-item__heart" data-toggle="tooltip" data-placement="top" title="Tôi quan tâm căn nhà này">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="box-item">
                        <div class="box-item__cover">
                            <div class="img">
                                <a href="#" title="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/long-thoi.jpg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="box-item__info">
                            <h3 class="box-item__title">
                                <a href="#" class="box-item__link" title="Căn hộ số M3-3205 Vinhomes Metropolis, 29 Liễu Giai" target="_blank">
                                    Căn hộ số M3-3205 Vinhomes Metropolis, 29 Liễu Giai
                                </a>
                            </h3>
                            <p class="box-item__city">
                                <i class="fas fa-map-marker-alt"></i>
                                29 Liễu Giai- Kim Mã -Ba Đình- Hà Nội
                            </p>
                            <p class="box-item__price bold600">
                                Giá: ~ 6,5 tỷ
                            </p>
                            <p class="box-item__service bold600">
                                <span type="button" data-toggle="tooltip" data-placement="top" title="Phòng ngủ">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M0 9.68197C0 9.33805 0.278801 9.05925 0.622719 9.05925H21.2347V6.51091H19.2776V7.67361C19.2776 8.01753 18.9988 8.29633 18.6549 8.29633C18.3109 8.29633 18.0321 8.01753 18.0321 7.67361V5.88819C18.0321 5.54427 18.3109 5.26547 18.6549 5.26547H21.8574C22.2013 5.26547 22.4801 5.54427 22.4801 5.88819V9.05925H24.3773C24.7212 9.05925 25 9.33805 25 9.68197C25 13.5916 22.6501 16.9622 19.2889 18.457L19.4806 18.5371C19.7979 18.6698 19.9476 19.0345 19.815 19.3518C19.7151 19.5907 19.4838 19.7345 19.2402 19.7345C19.1601 19.7345 19.0788 19.7189 19.0003 19.6862L17.4835 19.0521C16.8129 19.201 16.1165 19.2802 15.4017 19.2802H9.59822C8.75133 19.2802 7.92996 19.1694 7.1472 18.9625L5.41614 19.6862C5.33767 19.719 5.25628 19.7345 5.17621 19.7345C4.93264 19.7345 4.70126 19.5906 4.60144 19.3518C4.46881 19.0345 4.61852 18.6698 4.93584 18.5371L5.43393 18.3289C2.22124 16.7754 0 13.4832 0 9.68197ZM9.59822 18.0348H15.4017C19.798 18.0348 23.412 14.6207 23.7315 10.3046H1.2683C1.58793 14.6208 5.20192 18.0348 9.59822 18.0348Z" fill="#828282" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    3
                                </span>

                                <span data-toggle="tooltip" data-placement="top" title="Số phòng WC">
                                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.6H8.6V6V0.6H16.4V14.4H0.6V6.6H8Z" stroke="#828282" stroke-width="1.2" />
                                        <rect x="8.3" y="11.3" width="0.6" height="2.4" fill="#4F4F4F" stroke="#828282" stroke-width="0.6" />
                                        <rect x="13.25" y="6.75" width="0.5" height="3.5" transform="rotate(-90 13.25 6.75)" fill="#4F4F4F" stroke="#828282" stroke-width="0.5" />
                                    </svg>

                                    2
                                </span>

                                <span type="button" data-toggle="tooltip" data-placement="top" title="Diện tích">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.545457 -2.62268e-08C0.846704 -1.17422e-08 1.09091 0.268629 1.09091 0.6L1.09091 14.4C1.09091 14.7314 0.846703 15 0.545457 15C0.24421 15 2.1846e-06 14.7314 2.19777e-06 14.4L2.74615e-06 0.6C2.75932e-06 0.268629 0.244211 -4.07115e-08 0.545457 -2.62268e-08Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4545 7C19.7558 7 20 7.26863 20 7.6L20 14.4C20 14.7314 19.7558 15 19.4545 15C19.1533 15 18.9091 14.7314 18.9091 14.4L18.9091 7.6C18.9091 7.26863 19.1533 7 19.4545 7Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.59995C20 7.93132 19.7558 8.19995 19.4545 8.19995L0.545454 8.19995C0.244208 8.19995 -5.96046e-07 7.93132 -5.96046e-07 7.59995C-5.96046e-07 7.26858 0.244208 6.99995 0.545454 6.99995L19.4545 6.99995C19.7558 6.99995 20 7.26858 20 7.59995Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.6C20 10.9313 19.7558 11.2 19.4545 11.2L0.545454 11.2C0.244208 11.2 -5.96046e-07 10.9313 -5.96046e-07 10.6C-5.96046e-07 10.2686 0.244208 9.99995 0.545454 9.99995L19.4545 9.99995C19.7558 9.99995 20 10.2686 20 10.6Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89999 4.2H16.9C17.3418 4.2 17.7 4.55817 17.7 5V7H18.9V5C18.9 3.89543 18.0046 3 16.9 3H6.89999C5.79542 3 4.89999 3.89543 4.89999 5V7H6.09999V5C6.09999 4.55817 6.45817 4.2 6.89999 4.2Z" fill="#828282" />
                                        <circle cx="3" cy="5" r="1.5" fill="#828282" />
                                    </svg>

                                    103.9m2
                                </span>

                            </p>
                            <a href="#" class="box-item__heart" data-toggle="tooltip" data-placement="top" title="Tôi quan tâm căn nhà này">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="box-item">
                        <div class="box-item__cover">
                            <div class="img">
                                <a href="#" title="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/house2.jpg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="box-item__info">
                            <h3 class="box-item__title">
                                <a href="#" class="box-item__link" title="Goldmark City Friendly House 3" target="_blank">
                                    Goldmark City Friendly House 3
                                </a>
                            </h3>
                            <p class="box-item__city">
                                <i class="fas fa-map-marker-alt"></i>
                                Tòa Goldmark City, Hồ Tùng Mậu
                            </p>
                            <p class="box-item__price bold600">
                                Giá: ~ 11 tr
                            </p>
                            <p class="box-item__service bold600">
                                <span type="button" data-toggle="tooltip" data-placement="top" title="Phòng ngủ">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M0 9.68197C0 9.33805 0.278801 9.05925 0.622719 9.05925H21.2347V6.51091H19.2776V7.67361C19.2776 8.01753 18.9988 8.29633 18.6549 8.29633C18.3109 8.29633 18.0321 8.01753 18.0321 7.67361V5.88819C18.0321 5.54427 18.3109 5.26547 18.6549 5.26547H21.8574C22.2013 5.26547 22.4801 5.54427 22.4801 5.88819V9.05925H24.3773C24.7212 9.05925 25 9.33805 25 9.68197C25 13.5916 22.6501 16.9622 19.2889 18.457L19.4806 18.5371C19.7979 18.6698 19.9476 19.0345 19.815 19.3518C19.7151 19.5907 19.4838 19.7345 19.2402 19.7345C19.1601 19.7345 19.0788 19.7189 19.0003 19.6862L17.4835 19.0521C16.8129 19.201 16.1165 19.2802 15.4017 19.2802H9.59822C8.75133 19.2802 7.92996 19.1694 7.1472 18.9625L5.41614 19.6862C5.33767 19.719 5.25628 19.7345 5.17621 19.7345C4.93264 19.7345 4.70126 19.5906 4.60144 19.3518C4.46881 19.0345 4.61852 18.6698 4.93584 18.5371L5.43393 18.3289C2.22124 16.7754 0 13.4832 0 9.68197ZM9.59822 18.0348H15.4017C19.798 18.0348 23.412 14.6207 23.7315 10.3046H1.2683C1.58793 14.6208 5.20192 18.0348 9.59822 18.0348Z" fill="#828282" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    3
                                </span>

                                <span data-toggle="tooltip" data-placement="top" title="Số phòng WC">
                                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.6H8.6V6V0.6H16.4V14.4H0.6V6.6H8Z" stroke="#828282" stroke-width="1.2" />
                                        <rect x="8.3" y="11.3" width="0.6" height="2.4" fill="#4F4F4F" stroke="#828282" stroke-width="0.6" />
                                        <rect x="13.25" y="6.75" width="0.5" height="3.5" transform="rotate(-90 13.25 6.75)" fill="#4F4F4F" stroke="#828282" stroke-width="0.5" />
                                    </svg>

                                    2
                                </span>

                                <span type="button" data-toggle="tooltip" data-placement="top" title="Diện tích">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.545457 -2.62268e-08C0.846704 -1.17422e-08 1.09091 0.268629 1.09091 0.6L1.09091 14.4C1.09091 14.7314 0.846703 15 0.545457 15C0.24421 15 2.1846e-06 14.7314 2.19777e-06 14.4L2.74615e-06 0.6C2.75932e-06 0.268629 0.244211 -4.07115e-08 0.545457 -2.62268e-08Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4545 7C19.7558 7 20 7.26863 20 7.6L20 14.4C20 14.7314 19.7558 15 19.4545 15C19.1533 15 18.9091 14.7314 18.9091 14.4L18.9091 7.6C18.9091 7.26863 19.1533 7 19.4545 7Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.59995C20 7.93132 19.7558 8.19995 19.4545 8.19995L0.545454 8.19995C0.244208 8.19995 -5.96046e-07 7.93132 -5.96046e-07 7.59995C-5.96046e-07 7.26858 0.244208 6.99995 0.545454 6.99995L19.4545 6.99995C19.7558 6.99995 20 7.26858 20 7.59995Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.6C20 10.9313 19.7558 11.2 19.4545 11.2L0.545454 11.2C0.244208 11.2 -5.96046e-07 10.9313 -5.96046e-07 10.6C-5.96046e-07 10.2686 0.244208 9.99995 0.545454 9.99995L19.4545 9.99995C19.7558 9.99995 20 10.2686 20 10.6Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89999 4.2H16.9C17.3418 4.2 17.7 4.55817 17.7 5V7H18.9V5C18.9 3.89543 18.0046 3 16.9 3H6.89999C5.79542 3 4.89999 3.89543 4.89999 5V7H6.09999V5C6.09999 4.55817 6.45817 4.2 6.89999 4.2Z" fill="#828282" />
                                        <circle cx="3" cy="5" r="1.5" fill="#828282" />
                                    </svg>

                                    103.9m2
                                </span>

                            </p>
                            <a href="#" class="box-item__heart" data-toggle="tooltip" data-placement="top" title="Tôi quan tâm căn nhà này">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="box-item">
                        <div class="box-item__cover">
                            <div class="img">
                                <a href="#" title="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/house4.jpg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="box-item__info">
                            <h3 class="box-item__title">
                                <a href="#" class="box-item__link" title="Vinhomes Green Bay Studio S2" target="_blank">
                                    Vinhomes Green Bay Studio S2
                                </a>
                            </h3>
                            <p class="box-item__city">
                                <i class="fas fa-map-marker-alt"></i>
                                Vinhomes Green Bay, Mễ Trì
                            </p>
                            <p class="box-item__price bold600">
                                Giá: ~ 11 tr
                            </p>
                            <p class="box-item__service bold600">
                                <span type="button" data-toggle="tooltip" data-placement="top" title="Phòng ngủ">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M0 9.68197C0 9.33805 0.278801 9.05925 0.622719 9.05925H21.2347V6.51091H19.2776V7.67361C19.2776 8.01753 18.9988 8.29633 18.6549 8.29633C18.3109 8.29633 18.0321 8.01753 18.0321 7.67361V5.88819C18.0321 5.54427 18.3109 5.26547 18.6549 5.26547H21.8574C22.2013 5.26547 22.4801 5.54427 22.4801 5.88819V9.05925H24.3773C24.7212 9.05925 25 9.33805 25 9.68197C25 13.5916 22.6501 16.9622 19.2889 18.457L19.4806 18.5371C19.7979 18.6698 19.9476 19.0345 19.815 19.3518C19.7151 19.5907 19.4838 19.7345 19.2402 19.7345C19.1601 19.7345 19.0788 19.7189 19.0003 19.6862L17.4835 19.0521C16.8129 19.201 16.1165 19.2802 15.4017 19.2802H9.59822C8.75133 19.2802 7.92996 19.1694 7.1472 18.9625L5.41614 19.6862C5.33767 19.719 5.25628 19.7345 5.17621 19.7345C4.93264 19.7345 4.70126 19.5906 4.60144 19.3518C4.46881 19.0345 4.61852 18.6698 4.93584 18.5371L5.43393 18.3289C2.22124 16.7754 0 13.4832 0 9.68197ZM9.59822 18.0348H15.4017C19.798 18.0348 23.412 14.6207 23.7315 10.3046H1.2683C1.58793 14.6208 5.20192 18.0348 9.59822 18.0348Z" fill="#828282" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    3
                                </span>

                                <span data-toggle="tooltip" data-placement="top" title="Số phòng WC">
                                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.6H8.6V6V0.6H16.4V14.4H0.6V6.6H8Z" stroke="#828282" stroke-width="1.2" />
                                        <rect x="8.3" y="11.3" width="0.6" height="2.4" fill="#4F4F4F" stroke="#828282" stroke-width="0.6" />
                                        <rect x="13.25" y="6.75" width="0.5" height="3.5" transform="rotate(-90 13.25 6.75)" fill="#4F4F4F" stroke="#828282" stroke-width="0.5" />
                                    </svg>

                                    2
                                </span>

                                <span type="button" data-toggle="tooltip" data-placement="top" title="Diện tích">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.545457 -2.62268e-08C0.846704 -1.17422e-08 1.09091 0.268629 1.09091 0.6L1.09091 14.4C1.09091 14.7314 0.846703 15 0.545457 15C0.24421 15 2.1846e-06 14.7314 2.19777e-06 14.4L2.74615e-06 0.6C2.75932e-06 0.268629 0.244211 -4.07115e-08 0.545457 -2.62268e-08Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4545 7C19.7558 7 20 7.26863 20 7.6L20 14.4C20 14.7314 19.7558 15 19.4545 15C19.1533 15 18.9091 14.7314 18.9091 14.4L18.9091 7.6C18.9091 7.26863 19.1533 7 19.4545 7Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.59995C20 7.93132 19.7558 8.19995 19.4545 8.19995L0.545454 8.19995C0.244208 8.19995 -5.96046e-07 7.93132 -5.96046e-07 7.59995C-5.96046e-07 7.26858 0.244208 6.99995 0.545454 6.99995L19.4545 6.99995C19.7558 6.99995 20 7.26858 20 7.59995Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.6C20 10.9313 19.7558 11.2 19.4545 11.2L0.545454 11.2C0.244208 11.2 -5.96046e-07 10.9313 -5.96046e-07 10.6C-5.96046e-07 10.2686 0.244208 9.99995 0.545454 9.99995L19.4545 9.99995C19.7558 9.99995 20 10.2686 20 10.6Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89999 4.2H16.9C17.3418 4.2 17.7 4.55817 17.7 5V7H18.9V5C18.9 3.89543 18.0046 3 16.9 3H6.89999C5.79542 3 4.89999 3.89543 4.89999 5V7H6.09999V5C6.09999 4.55817 6.45817 4.2 6.89999 4.2Z" fill="#828282" />
                                        <circle cx="3" cy="5" r="1.5" fill="#828282" />
                                    </svg>

                                    103.9m2
                                </span>

                            </p>
                            <a href="#" class="box-item__heart" data-toggle="tooltip" data-placement="top" title="Tôi quan tâm căn nhà này">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product">
    <div class="container">
        <div class="heading d-flex justify-content-between align-items-center">
            <h2>Nhà bán</h2>
            <a href="#">Xem thêm</a>
        </div>
        <div class="product__list product-list">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="box-item">
                        <div class="box-item__cover">
                            <div class="img">
                                <a href="#" title="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/house1.jpg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="box-item__info">
                            <h3 class="box-item__title">
                                <a href="#" class="box-item__link" title="HDMON Nguyễn Bảo House" target="_blank">
                                    HDMON Nguyễn Bảo House
                                </a>
                            </h3>
                            <p class="box-item__city">
                                <i class="fas fa-map-marker-alt"></i>
                                Tòa A1 HDMon Mỹ Đình 1 Nam Từ Liêm Hà Nội
                            </p>
                            <p class="box-item__price bold600">
                                Giá: ~ 8 tr
                            </p>
                            <p class="box-item__service bold600">
                                <span type="button" data-toggle="tooltip" data-placement="top" title="Phòng ngủ">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M0 9.68197C0 9.33805 0.278801 9.05925 0.622719 9.05925H21.2347V6.51091H19.2776V7.67361C19.2776 8.01753 18.9988 8.29633 18.6549 8.29633C18.3109 8.29633 18.0321 8.01753 18.0321 7.67361V5.88819C18.0321 5.54427 18.3109 5.26547 18.6549 5.26547H21.8574C22.2013 5.26547 22.4801 5.54427 22.4801 5.88819V9.05925H24.3773C24.7212 9.05925 25 9.33805 25 9.68197C25 13.5916 22.6501 16.9622 19.2889 18.457L19.4806 18.5371C19.7979 18.6698 19.9476 19.0345 19.815 19.3518C19.7151 19.5907 19.4838 19.7345 19.2402 19.7345C19.1601 19.7345 19.0788 19.7189 19.0003 19.6862L17.4835 19.0521C16.8129 19.201 16.1165 19.2802 15.4017 19.2802H9.59822C8.75133 19.2802 7.92996 19.1694 7.1472 18.9625L5.41614 19.6862C5.33767 19.719 5.25628 19.7345 5.17621 19.7345C4.93264 19.7345 4.70126 19.5906 4.60144 19.3518C4.46881 19.0345 4.61852 18.6698 4.93584 18.5371L5.43393 18.3289C2.22124 16.7754 0 13.4832 0 9.68197ZM9.59822 18.0348H15.4017C19.798 18.0348 23.412 14.6207 23.7315 10.3046H1.2683C1.58793 14.6208 5.20192 18.0348 9.59822 18.0348Z" fill="#828282" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    2
                                </span>

                                <span data-toggle="tooltip" data-placement="top" title="Số phòng WC">
                                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.6H8.6V6V0.6H16.4V14.4H0.6V6.6H8Z" stroke="#828282" stroke-width="1.2" />
                                        <rect x="8.3" y="11.3" width="0.6" height="2.4" fill="#4F4F4F" stroke="#828282" stroke-width="0.6" />
                                        <rect x="13.25" y="6.75" width="0.5" height="3.5" transform="rotate(-90 13.25 6.75)" fill="#4F4F4F" stroke="#828282" stroke-width="0.5" />
                                    </svg>

                                    2
                                </span>

                                <span type="button" data-toggle="tooltip" data-placement="top" title="Diện tích">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.545457 -2.62268e-08C0.846704 -1.17422e-08 1.09091 0.268629 1.09091 0.6L1.09091 14.4C1.09091 14.7314 0.846703 15 0.545457 15C0.24421 15 2.1846e-06 14.7314 2.19777e-06 14.4L2.74615e-06 0.6C2.75932e-06 0.268629 0.244211 -4.07115e-08 0.545457 -2.62268e-08Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4545 7C19.7558 7 20 7.26863 20 7.6L20 14.4C20 14.7314 19.7558 15 19.4545 15C19.1533 15 18.9091 14.7314 18.9091 14.4L18.9091 7.6C18.9091 7.26863 19.1533 7 19.4545 7Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.59995C20 7.93132 19.7558 8.19995 19.4545 8.19995L0.545454 8.19995C0.244208 8.19995 -5.96046e-07 7.93132 -5.96046e-07 7.59995C-5.96046e-07 7.26858 0.244208 6.99995 0.545454 6.99995L19.4545 6.99995C19.7558 6.99995 20 7.26858 20 7.59995Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.6C20 10.9313 19.7558 11.2 19.4545 11.2L0.545454 11.2C0.244208 11.2 -5.96046e-07 10.9313 -5.96046e-07 10.6C-5.96046e-07 10.2686 0.244208 9.99995 0.545454 9.99995L19.4545 9.99995C19.7558 9.99995 20 10.2686 20 10.6Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89999 4.2H16.9C17.3418 4.2 17.7 4.55817 17.7 5V7H18.9V5C18.9 3.89543 18.0046 3 16.9 3H6.89999C5.79542 3 4.89999 3.89543 4.89999 5V7H6.09999V5C6.09999 4.55817 6.45817 4.2 6.89999 4.2Z" fill="#828282" />
                                        <circle cx="3" cy="5" r="1.5" fill="#828282" />
                                    </svg>

                                    264m2
                                </span>

                            </p>
                            <a href="#" class="box-item__heart" data-toggle="tooltip" data-placement="top" title="Tôi quan tâm căn nhà này">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="box-item">
                        <div class="box-item__cover">
                            <div class="img">
                                <a href="#" title="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/long-thoi.jpg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="box-item__info">
                            <h3 class="box-item__title">
                                <a href="#" class="box-item__link" title="Căn hộ số M3-3205 Vinhomes Metropolis, 29 Liễu Giai" target="_blank">
                                    Căn hộ số M3-3205 Vinhomes Metropolis, 29 Liễu Giai
                                </a>
                            </h3>
                            <p class="box-item__city">
                                <i class="fas fa-map-marker-alt"></i>
                                29 Liễu Giai- Kim Mã -Ba Đình- Hà Nội
                            </p>
                            <p class="box-item__price bold600">
                                Giá: ~ 6,5 tỷ
                            </p>
                            <p class="box-item__service bold600">
                                <span type="button" data-toggle="tooltip" data-placement="top" title="Phòng ngủ">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M0 9.68197C0 9.33805 0.278801 9.05925 0.622719 9.05925H21.2347V6.51091H19.2776V7.67361C19.2776 8.01753 18.9988 8.29633 18.6549 8.29633C18.3109 8.29633 18.0321 8.01753 18.0321 7.67361V5.88819C18.0321 5.54427 18.3109 5.26547 18.6549 5.26547H21.8574C22.2013 5.26547 22.4801 5.54427 22.4801 5.88819V9.05925H24.3773C24.7212 9.05925 25 9.33805 25 9.68197C25 13.5916 22.6501 16.9622 19.2889 18.457L19.4806 18.5371C19.7979 18.6698 19.9476 19.0345 19.815 19.3518C19.7151 19.5907 19.4838 19.7345 19.2402 19.7345C19.1601 19.7345 19.0788 19.7189 19.0003 19.6862L17.4835 19.0521C16.8129 19.201 16.1165 19.2802 15.4017 19.2802H9.59822C8.75133 19.2802 7.92996 19.1694 7.1472 18.9625L5.41614 19.6862C5.33767 19.719 5.25628 19.7345 5.17621 19.7345C4.93264 19.7345 4.70126 19.5906 4.60144 19.3518C4.46881 19.0345 4.61852 18.6698 4.93584 18.5371L5.43393 18.3289C2.22124 16.7754 0 13.4832 0 9.68197ZM9.59822 18.0348H15.4017C19.798 18.0348 23.412 14.6207 23.7315 10.3046H1.2683C1.58793 14.6208 5.20192 18.0348 9.59822 18.0348Z" fill="#828282" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    3
                                </span>

                                <span data-toggle="tooltip" data-placement="top" title="Số phòng WC">
                                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.6H8.6V6V0.6H16.4V14.4H0.6V6.6H8Z" stroke="#828282" stroke-width="1.2" />
                                        <rect x="8.3" y="11.3" width="0.6" height="2.4" fill="#4F4F4F" stroke="#828282" stroke-width="0.6" />
                                        <rect x="13.25" y="6.75" width="0.5" height="3.5" transform="rotate(-90 13.25 6.75)" fill="#4F4F4F" stroke="#828282" stroke-width="0.5" />
                                    </svg>

                                    2
                                </span>

                                <span type="button" data-toggle="tooltip" data-placement="top" title="Diện tích">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.545457 -2.62268e-08C0.846704 -1.17422e-08 1.09091 0.268629 1.09091 0.6L1.09091 14.4C1.09091 14.7314 0.846703 15 0.545457 15C0.24421 15 2.1846e-06 14.7314 2.19777e-06 14.4L2.74615e-06 0.6C2.75932e-06 0.268629 0.244211 -4.07115e-08 0.545457 -2.62268e-08Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4545 7C19.7558 7 20 7.26863 20 7.6L20 14.4C20 14.7314 19.7558 15 19.4545 15C19.1533 15 18.9091 14.7314 18.9091 14.4L18.9091 7.6C18.9091 7.26863 19.1533 7 19.4545 7Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.59995C20 7.93132 19.7558 8.19995 19.4545 8.19995L0.545454 8.19995C0.244208 8.19995 -5.96046e-07 7.93132 -5.96046e-07 7.59995C-5.96046e-07 7.26858 0.244208 6.99995 0.545454 6.99995L19.4545 6.99995C19.7558 6.99995 20 7.26858 20 7.59995Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.6C20 10.9313 19.7558 11.2 19.4545 11.2L0.545454 11.2C0.244208 11.2 -5.96046e-07 10.9313 -5.96046e-07 10.6C-5.96046e-07 10.2686 0.244208 9.99995 0.545454 9.99995L19.4545 9.99995C19.7558 9.99995 20 10.2686 20 10.6Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89999 4.2H16.9C17.3418 4.2 17.7 4.55817 17.7 5V7H18.9V5C18.9 3.89543 18.0046 3 16.9 3H6.89999C5.79542 3 4.89999 3.89543 4.89999 5V7H6.09999V5C6.09999 4.55817 6.45817 4.2 6.89999 4.2Z" fill="#828282" />
                                        <circle cx="3" cy="5" r="1.5" fill="#828282" />
                                    </svg>

                                    103.9m2
                                </span>

                            </p>
                            <a href="#" class="box-item__heart" data-toggle="tooltip" data-placement="top" title="Tôi quan tâm căn nhà này">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="box-item">
                        <div class="box-item__cover">
                            <div class="img">
                                <a href="#" title="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/house2.jpg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="box-item__info">
                            <h3 class="box-item__title">
                                <a href="#" class="box-item__link" title="Goldmark City Friendly House 3" target="_blank">
                                    Goldmark City Friendly House 3
                                </a>
                            </h3>
                            <p class="box-item__city">
                                <i class="fas fa-map-marker-alt"></i>
                                Tòa Goldmark City, Hồ Tùng Mậu
                            </p>
                            <p class="box-item__price bold600">
                                Giá: ~ 11 tr
                            </p>
                            <p class="box-item__service bold600">
                                <span type="button" data-toggle="tooltip" data-placement="top" title="Phòng ngủ">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M0 9.68197C0 9.33805 0.278801 9.05925 0.622719 9.05925H21.2347V6.51091H19.2776V7.67361C19.2776 8.01753 18.9988 8.29633 18.6549 8.29633C18.3109 8.29633 18.0321 8.01753 18.0321 7.67361V5.88819C18.0321 5.54427 18.3109 5.26547 18.6549 5.26547H21.8574C22.2013 5.26547 22.4801 5.54427 22.4801 5.88819V9.05925H24.3773C24.7212 9.05925 25 9.33805 25 9.68197C25 13.5916 22.6501 16.9622 19.2889 18.457L19.4806 18.5371C19.7979 18.6698 19.9476 19.0345 19.815 19.3518C19.7151 19.5907 19.4838 19.7345 19.2402 19.7345C19.1601 19.7345 19.0788 19.7189 19.0003 19.6862L17.4835 19.0521C16.8129 19.201 16.1165 19.2802 15.4017 19.2802H9.59822C8.75133 19.2802 7.92996 19.1694 7.1472 18.9625L5.41614 19.6862C5.33767 19.719 5.25628 19.7345 5.17621 19.7345C4.93264 19.7345 4.70126 19.5906 4.60144 19.3518C4.46881 19.0345 4.61852 18.6698 4.93584 18.5371L5.43393 18.3289C2.22124 16.7754 0 13.4832 0 9.68197ZM9.59822 18.0348H15.4017C19.798 18.0348 23.412 14.6207 23.7315 10.3046H1.2683C1.58793 14.6208 5.20192 18.0348 9.59822 18.0348Z" fill="#828282" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    3
                                </span>

                                <span data-toggle="tooltip" data-placement="top" title="Số phòng WC">
                                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.6H8.6V6V0.6H16.4V14.4H0.6V6.6H8Z" stroke="#828282" stroke-width="1.2" />
                                        <rect x="8.3" y="11.3" width="0.6" height="2.4" fill="#4F4F4F" stroke="#828282" stroke-width="0.6" />
                                        <rect x="13.25" y="6.75" width="0.5" height="3.5" transform="rotate(-90 13.25 6.75)" fill="#4F4F4F" stroke="#828282" stroke-width="0.5" />
                                    </svg>

                                    2
                                </span>

                                <span type="button" data-toggle="tooltip" data-placement="top" title="Diện tích">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.545457 -2.62268e-08C0.846704 -1.17422e-08 1.09091 0.268629 1.09091 0.6L1.09091 14.4C1.09091 14.7314 0.846703 15 0.545457 15C0.24421 15 2.1846e-06 14.7314 2.19777e-06 14.4L2.74615e-06 0.6C2.75932e-06 0.268629 0.244211 -4.07115e-08 0.545457 -2.62268e-08Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4545 7C19.7558 7 20 7.26863 20 7.6L20 14.4C20 14.7314 19.7558 15 19.4545 15C19.1533 15 18.9091 14.7314 18.9091 14.4L18.9091 7.6C18.9091 7.26863 19.1533 7 19.4545 7Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.59995C20 7.93132 19.7558 8.19995 19.4545 8.19995L0.545454 8.19995C0.244208 8.19995 -5.96046e-07 7.93132 -5.96046e-07 7.59995C-5.96046e-07 7.26858 0.244208 6.99995 0.545454 6.99995L19.4545 6.99995C19.7558 6.99995 20 7.26858 20 7.59995Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.6C20 10.9313 19.7558 11.2 19.4545 11.2L0.545454 11.2C0.244208 11.2 -5.96046e-07 10.9313 -5.96046e-07 10.6C-5.96046e-07 10.2686 0.244208 9.99995 0.545454 9.99995L19.4545 9.99995C19.7558 9.99995 20 10.2686 20 10.6Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89999 4.2H16.9C17.3418 4.2 17.7 4.55817 17.7 5V7H18.9V5C18.9 3.89543 18.0046 3 16.9 3H6.89999C5.79542 3 4.89999 3.89543 4.89999 5V7H6.09999V5C6.09999 4.55817 6.45817 4.2 6.89999 4.2Z" fill="#828282" />
                                        <circle cx="3" cy="5" r="1.5" fill="#828282" />
                                    </svg>

                                    103.9m2
                                </span>

                            </p>
                            <a href="#" class="box-item__heart" data-toggle="tooltip" data-placement="top" title="Tôi quan tâm căn nhà này">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="box-item">
                        <div class="box-item__cover">
                            <div class="img">
                                <a href="#" title="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/house4.jpg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="box-item__info">
                            <h3 class="box-item__title">
                                <a href="#" class="box-item__link" title="Vinhomes Green Bay Studio S2" target="_blank">
                                    Vinhomes Green Bay Studio S2
                                </a>
                            </h3>
                            <p class="box-item__city">
                                <i class="fas fa-map-marker-alt"></i>
                                Vinhomes Green Bay, Mễ Trì
                            </p>
                            <p class="box-item__price bold600">
                                Giá: ~ 11 tr
                            </p>
                            <p class="box-item__service bold600">
                                <span type="button" data-toggle="tooltip" data-placement="top" title="Phòng ngủ">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M0 9.68197C0 9.33805 0.278801 9.05925 0.622719 9.05925H21.2347V6.51091H19.2776V7.67361C19.2776 8.01753 18.9988 8.29633 18.6549 8.29633C18.3109 8.29633 18.0321 8.01753 18.0321 7.67361V5.88819C18.0321 5.54427 18.3109 5.26547 18.6549 5.26547H21.8574C22.2013 5.26547 22.4801 5.54427 22.4801 5.88819V9.05925H24.3773C24.7212 9.05925 25 9.33805 25 9.68197C25 13.5916 22.6501 16.9622 19.2889 18.457L19.4806 18.5371C19.7979 18.6698 19.9476 19.0345 19.815 19.3518C19.7151 19.5907 19.4838 19.7345 19.2402 19.7345C19.1601 19.7345 19.0788 19.7189 19.0003 19.6862L17.4835 19.0521C16.8129 19.201 16.1165 19.2802 15.4017 19.2802H9.59822C8.75133 19.2802 7.92996 19.1694 7.1472 18.9625L5.41614 19.6862C5.33767 19.719 5.25628 19.7345 5.17621 19.7345C4.93264 19.7345 4.70126 19.5906 4.60144 19.3518C4.46881 19.0345 4.61852 18.6698 4.93584 18.5371L5.43393 18.3289C2.22124 16.7754 0 13.4832 0 9.68197ZM9.59822 18.0348H15.4017C19.798 18.0348 23.412 14.6207 23.7315 10.3046H1.2683C1.58793 14.6208 5.20192 18.0348 9.59822 18.0348Z" fill="#828282" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    3
                                </span>

                                <span data-toggle="tooltip" data-placement="top" title="Số phòng WC">
                                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 6.6H8.6V6V0.6H16.4V14.4H0.6V6.6H8Z" stroke="#828282" stroke-width="1.2" />
                                        <rect x="8.3" y="11.3" width="0.6" height="2.4" fill="#4F4F4F" stroke="#828282" stroke-width="0.6" />
                                        <rect x="13.25" y="6.75" width="0.5" height="3.5" transform="rotate(-90 13.25 6.75)" fill="#4F4F4F" stroke="#828282" stroke-width="0.5" />
                                    </svg>

                                    2
                                </span>

                                <span type="button" data-toggle="tooltip" data-placement="top" title="Diện tích">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.545457 -2.62268e-08C0.846704 -1.17422e-08 1.09091 0.268629 1.09091 0.6L1.09091 14.4C1.09091 14.7314 0.846703 15 0.545457 15C0.24421 15 2.1846e-06 14.7314 2.19777e-06 14.4L2.74615e-06 0.6C2.75932e-06 0.268629 0.244211 -4.07115e-08 0.545457 -2.62268e-08Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4545 7C19.7558 7 20 7.26863 20 7.6L20 14.4C20 14.7314 19.7558 15 19.4545 15C19.1533 15 18.9091 14.7314 18.9091 14.4L18.9091 7.6C18.9091 7.26863 19.1533 7 19.4545 7Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.59995C20 7.93132 19.7558 8.19995 19.4545 8.19995L0.545454 8.19995C0.244208 8.19995 -5.96046e-07 7.93132 -5.96046e-07 7.59995C-5.96046e-07 7.26858 0.244208 6.99995 0.545454 6.99995L19.4545 6.99995C19.7558 6.99995 20 7.26858 20 7.59995Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.6C20 10.9313 19.7558 11.2 19.4545 11.2L0.545454 11.2C0.244208 11.2 -5.96046e-07 10.9313 -5.96046e-07 10.6C-5.96046e-07 10.2686 0.244208 9.99995 0.545454 9.99995L19.4545 9.99995C19.7558 9.99995 20 10.2686 20 10.6Z" fill="#828282" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89999 4.2H16.9C17.3418 4.2 17.7 4.55817 17.7 5V7H18.9V5C18.9 3.89543 18.0046 3 16.9 3H6.89999C5.79542 3 4.89999 3.89543 4.89999 5V7H6.09999V5C6.09999 4.55817 6.45817 4.2 6.89999 4.2Z" fill="#828282" />
                                        <circle cx="3" cy="5" r="1.5" fill="#828282" />
                                    </svg>

                                    103.9m2
                                </span>

                            </p>
                            <a href="#" class="box-item__heart" data-toggle="tooltip" data-placement="top" title="Tôi quan tâm căn nhà này">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="discover">
    <div class="container">
        <div class="heading">
            <h2>Khám phá khu vực</h2>
        </div>
        <div class="discover__list discover-list">
            <div class="owl-carousel owl-theme" id="discover-carousel">
                <!-- <div class="row"> -->
                <div class="item-slide">
                    <div class="item">
                        <div class="image">
                            <a href="#" title="">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/long-thoi.jpg' ?>" alt="">
                            </a>
                        </div>
                        <div class="title">
                            <h3>
                                <a href="#" title="">Long Thới</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item">
                        <div class="image">
                            <a href="#" title="">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/long-thoi.jpg' ?>" alt="">
                            </a>
                        </div>
                        <div class="title">
                            <h3>
                                <a href="#" title="">Long Thới</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item">
                        <div class="image">
                            <a href="#" title="">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/long-thoi.jpg' ?>" alt="">
                            </a>
                        </div>
                        <div class="title">
                            <h3>
                                <a href="#" title="">Long Thới</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item">
                        <div class="image">
                            <a href="#" title="">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/long-thoi.jpg' ?>" alt="">
                            </a>
                        </div>
                        <div class="title">
                            <h3>
                                <a href="#" title="">Long Thới</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item">
                        <div class="image">
                            <a href="#" title="">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/long-thoi.jpg' ?>" alt="">
                            </a>
                        </div>
                        <div class="title">
                            <h3>
                                <a href="#" title="">Long Thới</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="item-slide">
                    <div class="item">
                        <div class="image">
                            <a href="#" title="">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/long-thoi.jpg' ?>" alt="">
                            </a>
                        </div>
                        <div class="title">
                            <h3>
                                <a href="#" title="">Long Thới</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <i class="am-next">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/aright.png' ?>" alt="">
        </i>
        <i class="am-prev">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/aleft.png' ?>" alt="">

        </i>
    </div>
    </div>
</section>