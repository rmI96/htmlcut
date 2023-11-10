jQuery(function($){
    var token = '5407325219.1677ed0.40e75bd084ed43ce834c64caf7dcd2a0',
        userid = 5407325219,
        num_photos = $('.insta_item').length;

    function insta() {
        $.ajax({
            url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent',
            dataType: 'jsonp',
            type: 'GET',
            data: {access_token: token, count: num_photos},
            success: function(result){
                $('.insta_item').each(function(e, i) {
                    $(this).html('<a class="bg-full hover-zoom" href="'+result.data[e].link+'" target="_blank" style="background-image: url('+result.data[e].images.standard_resolution.url+')"></a>')
                })
            }
        });
    }

    setTimeout(insta, 200);

});