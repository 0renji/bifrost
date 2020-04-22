var $container = $('.js-slide-arrows');

$container.find('button').on('click', function(e) {
    e.preventDefault();
    const link = $(e.currentTarget);

    // TODO all images will be ajaxed at the very beginning so we only use cached images here (store?)
    $.ajax({
        url: '/slides/'+link.data('change'),
        method: 'POST'
    }).then(function (response) {
        //change image here
        let image = $('.slider-content').find('img')
        const source = image.attr('src')
        if (source === '/images/dorothy.png') {
            image.attr('src','/images/oops.jpg')
        } else {
            image.attr('src','/images/dorothy.png')
        }
    })
})