<?= \yii\helpers\Html::button('В корзину',['class'=>'basket','data-name'=>'basket-name-'.$id]);?>


<div id="rrr"></div>
<script>
    $(function() {
        var name = $('button.basket')[1].dataset.name;
        $('div#rrr').html(name);
    });
</script>

<?php
$js = <<<JS
        
    $(function() {
        // var list = $('button.basket')[1].dataset.name;
        var list = $('button.basket');
        
       
         console.log('======>', list);
        
        for (obj of list) {
            // console.log('======>', obj, obj.dataset);
            $('div#rrr-' + obj.dataset.id).html('name-'+obj.dataset.id);
            
            
        }
        
        
        $(document).on('click', 'button.basket', function(){
            console.log('==this==', this.dataset.id);
            $.ajax({
                url: '/ajax/add',
                method: 'post',
                cache: true,
                data: {
                    'id': this.dataset.id
                },
                datatype:JSON,                
                success: function(data) {
                    console.log('success ==data==', data);
                },
                error: function(data) {
                    console.log('error ==data==', data);
                    
                    
                }
            })
        })
        
        
    });

JS;

$this->registerJs(
    $js,
    \yii\web\View::POS_END,
    'myscript'
);
?>