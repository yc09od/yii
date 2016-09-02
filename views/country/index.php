<?php
<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: horst
 * Date: 9/2/16
 * Time: 1:04 AM
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-responsive table-striped">
                <thead class="bg-primary">
                <tr>
                    <th>
                        Country
                    </th>
                    <th>
                        Code
                    </th>
                    <th>
                        Population
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($countries as $country){ ?>
                    <tr>
                        <td><?php echo Html::encode("{$country->name}")?></td>
                        <td><?php echo Html::encode("{$country->code}")?></td>
                        <td><?php echo Html::encode("{$country->population}")?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="col-lg-12 text-center">
            <?php echo LinkPager::widget(['pagination' => $pagination]   )?>
        </div>
    </div>
=======
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
>>>>>>> 5c2cd6df72fca0bcc78a9902047e490d28aeaca2
</div>
