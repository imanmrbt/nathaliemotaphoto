jQuery(function($) {
    let page = 1; // Numéro de page initial

    $('#load-more-button').on('click', function() {
        if (page ) {
            $.ajax({
                type: 'POST',
                url: my_ajax_object.ajax_url, // Utilisez l'ajax
                data: {
                    action: 'load_more_posts',
                    page: page,
                },
                success: function(response) {
                    $('.galerie').html(response);
                    page++;
                },
            });
        }
        return false;
    });
});

jQuery(document).ready(function($) {
    $("#categories , #formats").change(function() {
        let category = $('#categories').val();
        let format = $('#formats').val();


        $.ajax({
            url: my_ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_posts',
                category: category,
                format: format,
            },
            success: function (response) {
                // Mettez à jour la zone d'affichage des publications filtrées.
                $('.galerie').html(response);
            }
        });
    });
});

//https://benmarshall.me/wordpress-ajax/#frontend-ajax-step-1



jQuery(function($) {

    $('#asc').on('click', function() {
        
            $.ajax({
                type: 'POST',
                url: my_ajax_object.ajax_url, // Utilisez l'ajax
                data: {
                    action: 'asc_date',
                },
                success: function(response) {
                    $('.galerie').html(response);

                },
            });
        
        return false;
    });
    $('#desc').on('click', function() {
        
        $.ajax({
            type: 'POST',
            url: my_ajax_object.ajax_url, // Utilisez l'ajax
            data: {
                action: 'desc_date',
            },
            success: function(response) {
                $('.galerie').html(response);

            },
        });
    
    return false;
});
});
/**/