<?php
$this->title = 'Корзина:';
$this->params['breadcrumbs'][] = ['label' => 'Корзина', 'url' => ['/basket']];?>
<div class="title">
    Корзина
</div>
<div class="content">

    <div class="basket">
        <?=$this->render('_list',['basket_id'=>$basket_id]);?>
    </div>
</div>
<?php
$js = <<<JS
function insert_in_search(){
    console.log(this);
    return false;
}
function updatePage(){
    var sum=0;
    $.each($('.product'),function(key,value){
        console.log(this);        
        sum+=
            value.getElementsByClassName( 'sum_price')[0].innerText
            =value.getElementsByClassName( 'number')[0].innerText * value.getElementsByClassName( 'count')[0].innerText;
    });    
    $('.total_price .number')[0].innerText=sum;
}
updatePage();
$(function(){
    $(document).on('click','.underline',function(){console.log(this);return false;}
    );
    
    $(document).on('click', '.btn-plus, .btn-minus', function(){
        console.log('==this==', this.dataset.id);
        var id =this.dataset.id;
        rr = $('#'+this.dataset.id+' .count')[0];
        console.log(rr);
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
                console.log('success ==data==', data);
                $('.basket').html(data);    
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
);?>