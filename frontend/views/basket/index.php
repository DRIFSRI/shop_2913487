<div class="basket">
    <div classs="basket_title">
        <?="Корзина №".$basket_id?>
    </div>
        <?=$this->render('_list',['basket_id'=>$basket_id]);?>
    <div css="chech">
        <div class="total_price">
            <div class="specification">
                Итоговая цена:
            </div>
            <div class = 'number'>
                JSCODE
            </div>
        </div>
    </div>
</div>



<?php
$js = <<<JS
function updatePage(){
    var sum=0;
    $.each($('.product'),function(key,value){
        // console.log('key,value', key, value);        
        sum+=
            value.getElementsByClassName( 'sum_price')[0].innerText
            =value.getElementsByClassName( 'number')[0].innerText * value.getElementsByClassName( 'count')[0].innerText;
    });    
    $('.total_price .number')[0].innerText=sum;
}

updatePage();
$(function(){
    $(document).on('click', '.btn-plus,.btn-minus', function(){
        console.log('==this==', this.dataset.id);
        var id =this.dataset.id;
        rr = $('div#'+this.dataset.id+' .count')[0];
        // rr.innerText=parseInt(this.dataset.change,10)+parseInt(rr.innerText, 10);//rr+=dataset.change
        
        
        $.ajax({
            url: '/ajax/exchangecountproduct',
            method: 'post',
            cache: false,
            async: true,
            data: {
                'id': this.dataset.id,
                'count': parseInt(this.dataset.change,10)+parseInt(rr.innerText, 10)    ,
            },
            datatype:'html',                
            success: function(data) {
                // console.log('success ==data==', data);
                $('.basket_list').html(data);    
                updatePage();
            },
            error: function(data) {
                console.log('error ==data==', data);
            }
        });
        // updatePage();
    });
    $(document).on('click', '.btn-delete', function(){
        var id =this.dataset.id;
        $.ajax({
            url: '/ajax/deleteproduct',
            method: 'post',
            cache: false,
            data: {
                'id': this.dataset.id,
            },
            datatype:JSON,                
            success: function(data) {
                console.log('success ==data==', data);
                $("#"+id).remove();
                updatePage();
            },
            error: function(data) {
                console.log('error ==data==', data);
            }
        });
        
    });
});
JS;
$this->registerJs(
    $js,
    \yii\web\View::POS_END,
    'myscript'
);
?>