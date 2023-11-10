jQuery(function($){
    var token = '5407325219.1677ed0.40e75bd084ed43ce834c64caf7dcd2a0',
        userid = 5407325219,
        num_photos = 6,
        feed = '';

    function appendFeed(result){
        var y = 1;
        for( var x in result.data ){

            feed += '<div class="col-i animation anime-slide-left"> <a class="instagram-photo hover-zoom" href="'+result.data[x].link+'" target="_blank" style="background-image: url('+result.data[x].images.low_resolution.url+')"></a> </div>';
            y++;
        }
    }
        
    $.ajax({
        url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent',
        dataType: 'jsonp',
        type: 'GET',
        data: {access_token: token, count: num_photos},
        success: function(result){
            appendFeed(result);
            $('#instagram-feed').html(feed);
        }
    });
    
});