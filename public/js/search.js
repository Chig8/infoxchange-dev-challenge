jQuery(document).ready(function(){
    $('.btn-secondary').click(function(){
        var params = $('.search-input').val();
        console.log(params);
        $.ajax
        ({
            url: 'https://www.omdbapi.com/?apikey=6afd8ab6&i=' + params,
            type: 'get',
            dataType:"json",
            success: function(result)
            {
                console.log(result);
            }
        });
    });
});
