<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

    <p>
        <a href="index.php" accesskey="h" hidden>Home</a>
        <a href="index.php?r=customer%2Findex" accesskey="c" hidden>Customers</a>
        <a href="index.php?r=supplier%2Findex" accesskey="s" hidden>Suppliers</a>
        <a href="index.php?r=productinventory%2Findex" accesskey="i" hidden>Product Inventory</a>
        <a href="index.php?r=order%2Findex" accesskey="o" hidden>Orders</a>
        <a href="index.php?r=purchase%2Findex" accesskey="p" hidden>Purchases</a>
        <a href="index.php?r=help%2Findex" accesskey="l" hidden>Help</a>

        
          
    </p>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'RBI Inventory System',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                $menuItems[] = ['label' => 'Getting Started', 'url' => ['/installation/index']];
            } else {
                $menuItems[] =   ['label' => 'Customer','alt' => 'Customer, Alt + C', 'url' => ['/customer/index'],['accesskey'=>'c']];
              $menuItems[] =  ['label' => 'Suppliers','alt' => 'Suppliers Page, Alt + S', 'url' =>  ['/supplier/index'],['accesskey'=>'s']];
             $menuItems[] =   ['label' => 'Product Inventory','alt' => 'Product Inventory Page, Alt + I', 'url' => ['/productinventory/index'],['accesskey'=>'i']];
              $menuItems[] =  ['label' => 'Orders','alt' => 'Order Page, Alt + O', 'url' => ['/order/index'],['accesskey'=>'o']];
              $menuItems[] =  ['label' => 'Purchases','alt' => 'Purchases Page, Alt + P', 'url' => ['/purchase/index'],['accesskey'=>'p']];
                 $menuItems[] = ['label' => 'Help', 'url' => ['/help/index']];
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']   
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>



        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; Asia Pacific College <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
