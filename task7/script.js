$(document).ready(function () {
    const $slider = $('.slider-track');
    const $slides = $('.slide');
    const $pager = $('.pager');
    const slideCount = $slides.length;
    const slidesToShow = window.matchMedia('(max-width: 768px)').matches ? 1 : 3;
    const totalPages = Math.ceil(slideCount / slidesToShow);
    let currentPage = 1;

    // Initialize pager
    function updatePager() {
        $pager.empty();
        for (let i = 1; i <= totalPages; i++) {
            $pager.append(
                `<span class="${i === currentPage ? 'active' : ''}" data-page="${i}"></span>`
            );
        }
    }

    function updateSlider() {
        const slideWidth = $slides.outerWidth(true);
        const offset = (currentPage - 1) * slideWidth * slidesToShow;
        $slider.css('transform', `translateX(-${offset}px)`);
        updatePager();
    }

    // Pager click event
    $pager.on('click', 'span', function () {
        currentPage = parseInt($(this).data('page'));
        updateSlider();
    });

    // Arrow click events
    $('.arrow.next').on('click', function () {
        if (currentPage < totalPages) {
            currentPage++;
            updateSlider();
        }
    });

    $('.arrow.prev').on('click', function () {
        if (currentPage > 1) {
            currentPage--;
            updateSlider();
        }
    });

    // Resize event to handle screen changes
    $(window).on('resize', function () {
        currentPage = 1; // Reset to first page
        updateSlider();
    });

    // Initial setup
    updatePager();
    updateSlider();
});
