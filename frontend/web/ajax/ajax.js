$(function() {
    $(document).on('click', 'button.basket', function(){
        console.log('==this==', this.dataset.id);
        var t = this;
        $.ajax({
            url: '/ajax/add',
            method: 'post',
            cache: true,
            data: {
                'id': this.dataset.id,
            },
            datatype:JSON,
            success: function(data) {
                console.log('success ==data==', t);
                $('#w2').append('<div class="abs">'+$('#'+1+'.product')+'</div>');
            },
            error: function(data) {
                console.log('error ==data==', data);
            }
        })
    })
});