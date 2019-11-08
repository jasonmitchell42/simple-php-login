$(() => {
    const button = $('.btn-delete');
    const checkbox = $('input:checkbox');

    checkbox.on('change', () => {
        button.attr("disabled", !checkbox[0].checked);
    });

    $('#user-form').on('submit', processForm);
});


const processForm = (e) => {
    e.preventDefault();
    const form = $('#user-form');
    const action = $("input[name='action']").val();
    const formData = form.serializeArray();
    $.post('/data.php', formData, (data, status) => {
        switch(action) {
            case 'register' :
                console.log(action);
                $('.confirm-register').html(data);
                setTimeout(() => {
                    window.location.href = '/';
                }, 2000);
                break;
            case 'login' :
                console.log(data);
                $('.confirm-login').html(data);
                setTimeout(() => {
                    window.location.href = '/';
                }, 5000);
                break;
            case 'logout' :
                window.location.href = '/';
                break;
            case 'update' :
                console.log('this is coming from update');
                break;
            default :
                console.error('Nothing Happened');
        }
    });
    return false;
};