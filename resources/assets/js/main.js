// Animate navigation clicks
$("#publicNav a[href^='#'], .internal").on('click', function(e) {
    e.preventDefault();

    hash = this.hash;

    if ($(window).width() < 992) {
        $('#publicNav, #memberNav').removeClass('show');
        minus = 75;
    }
    else minus = 120;

    $('html, body').animate({
        scrollTop: $(hash).offset().top - minus
    }, 1000);
});

// Carousel
$('#mainCarousel').carousel({
    interval: 5000
});

// Tooltips
$('[data-toggle="tooltip"]').tooltip();

// Popovers
$('[data-toggle="popover"]').popover();

// Hide flash messages
$('.alert.flash').not('.alert-important').delay(5000).fadeOut(200);

// Partner form autofill
$('.referralForm').find('input, select').change(function() {
    $('#fillCompany').html($('#company').val());
    $('#fillURL').html($('#url').val());
});

// Delete button
$('.btn-delete').click(function() {
   return confirm('Are you sure that you want to delete this entry?');
});

// Article links in new tab
$('.articlePreview').find('a').click(function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    window.open(url, '_blank');
});

// Pause Youtube videos on modal close
$('.modal').on('hide.bs.modal', function(e) {
    var $if = $(e.delegateTarget).find('iframe');
    var src = $if.attr("src");
    $if.attr("src", '/empty.html');
    $if.attr("src", src);
});