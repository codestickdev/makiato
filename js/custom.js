/* Mobile menu */

$(document).ready(function() {
    $('.menu__icon').on('click', function()
    {
        $('.menuMobile').toggleClass('menuMobile--active');
        $('body').toggleClass('menuScroll');
    });
});


/* menu touch */

// $(document).ready(function() {
//     $(document).mouseup(function(e){
//         var modal = $(".menuMobile--active");
//         if (!modal.is(e.target) && modal.has(e.target).length === 0){
//             modal.parent().removeClass('menuMobile--active');
//             $(modal).removeClass('menuMobile--active');
//         }
//     });
// });

/* Change offer */

$(document).ready(function(){
    $('.basic').click(function(){        
        $('.basic__offer--active').removeClass('basic__offer--active');
        $('.extra__offer--active').removeClass('extra__offer--active');
        $(this).removeClass('active');
        $('.extra').addClass('active');
    });
    
    $('.extra').click(function(){        
        $('.basic__offer').addClass('basic__offer--active');
        $('.extra__offer').addClass('extra__offer--active').siblings().removeClass('extra__offer--active');
        $(this).removeClass('active');
        $('.basic').addClass('active');
    });      
});

/* Blog count post check */ 

$(document).ready(function(){
    if($('.box').length == 3) {
        $('.content__post').addClass('removeCenter');
    }
    if($('.box').length == 1) {
        $('.box').addClass('box--special');
        $('.content__post').addClass('removeCenter');
    }
});

/* gallery count img */

$(document).ready(function(){
    if($('.countImg').length == 3) {
        $('.responsive__box').addClass('responsive__box--special');
    }
});

/* Contact form */
$(document).ready(function() {

    var ajaxurl = '/wp-admin/admin-ajax.php';
    var name = $('input[name="form_name"]');
    var email = $('input[name="form_email"]');
    var content = $('textarea[name="form_textarea"]');
    $(".contactForm").submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                'action': 'contact_form',
                'name': name.val(),
                'email': email.val(),
                'content': content.val(),
            },
            success: function(data) {
                insertAlert('Wiadomość została pomyślnie wysłana', 'success');
                $('button[name="form_submit"]').prop('disabled', true);
            },
            error: function(error) {
                insertAlert('Nie udało się wysłać wiadomości', 'error');
                $('button[name="form_submit"]').prop('disabled', true);
            }
        });
    });
});

function insertAlert(message, type){
    var formAlert = '<div class="formAlert formAlert--' + type + '">' + message + '</div>';
    $('.contactForm').append(formAlert);

    $('.contactForm .formAlert').on('click', function(){
        $(this).slideUp();
    });
};
