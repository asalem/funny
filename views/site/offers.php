<?php

/* @var $this yii\web\View */

use yii\widgets\ListView;

$this->title = 'Travel Deals: Find Cheap Deals on Travel, Trips & Tours | Expedia.com';
?>

<h3>Always we have deals!, Just Book!</h3>

<?php echo $this->render('_search', ['model' => $searchModel]); ?>
    
<div class="row">
    <div class="col-sm-12 col-sm-offest-1">
        <?= ListView::widget([
            'options' => [
                'tag' => 'div',
                'class' => 'text-center'
            ],
            'dataProvider' => $dataProvider,
            'itemView' => function ($model, $key, $index, $widget) {
                $itemContent = $this->render('_list_hotel',['model' => $model]);
    
                return $itemContent;
            },
            'itemOptions' => [
                'tag' => false,
            ],
            'summary' => '',
            
            'layout' => '{items} {pager}',
    
            'pager' => [
                'firstPageLabel' => 'First',
                'lastPageLabel' => 'Last',
                'maxButtonCount' => 4,
                'options' => [
                    'class' => 'pagination'
                ]
            ],
    
        ]);
        ?>
    </div>
</div>

