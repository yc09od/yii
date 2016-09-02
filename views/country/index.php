<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>Countries</h1>
    <table class="table">
        <tr>
            <th class="bg-primary">Country</th>
            <th class="bg-primary">Code</th>
        </tr>
        <?php foreach ($countries as $country): ?>
            <tr>
                <th>
                    <?= Html::encode("{$country->name} ({$country->code})") ?>:
                </th>
                <th>
                    <?= $country->population ?>
                </th>

            </tr>

        <?php endforeach; ?>

    </table>
<div class="col-lg-12 text-center">
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>
