<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?> 
<h2 style="margin-top: 0px">
    <a href="index.html">
    <?=$city->name?> <small>МРТ и КТ клиники</small>
    </a>
</h2>
<?php if(!empty($clinics)): ?>
<div id="map" style="height: 400px; width: 100%"></div>
<?php foreach ($clinics as $clinic):?>

    <div class="row clinic-row">
    <div class="col-xs-4 col-sm-2">
        
            <a href="<?=  Url::to(['clinic/view', 'id'=>$clinic->id])?>">
    <?= Html::img("@web/images/clinics/{$clinic->id}.jpg", ["alt" => $clinic->name, "class"=>"img-responsive clinic-table-img"]) ?>
            </a>
        
    </div>

    <div class="col-xs-8 col-sm-7">
        
            <h4 class="heading">
                <a href="<?=  Url::to(['clinic/view', 'id'=>$clinic->id])?>"><?=$clinic->name?></a>
            </h4>

            
                <div class="phone">
                    <span class="glyphicon glyphicon-earphone"></span>
                    
<a href="tel:+78123184073">
    
        (812) 318-40-73
    
</a>
                </div>
            

            <p>
                ул. Аккуратова, д. 2.
                
                    <br/>
                    <a href="area/view/primorsky">
                        Приморский район
                    </a>
                
            </p>

            
                <p>
                    <i class="glyphicon glyphicon-time"></i>
                    <em>3 Тесла ежедневно 09:00-21:00;  1.5 Тесла- Пн-Пт 09:00-17:00</em>
                </p>
            

            <div>
                
    <span class="label label-default">Государственная</span>


                






    <span class="label label-success trigger" data-container="body" data-toggle="popover" data-placement="top"
          data-content="Этим значком отмечены диагностические клиники имеющие в своем парке оборудования, МРТ со сверхвысоким магнитным полем 3 Тл."><span class="glyphicon glyphicon-ok"></span> Сверхвысокое поле</span>



    <span class="label label-success trigger" data-container="body" data-toggle="popover" data-placement="top"
          data-content="Этим значком отмечены диагностические клиники с хорошими врачами."><span class="glyphicon glyphicon-ok"></span> Лучшие специалисты</span>


            </div>
        
    </div>

    <div class="col-xs-12 col-sm-3">
        
            
                
                    <p>
                        <strong>МРТ</strong>&nbsp;от&nbsp;3800р
                    </p>
                
            

            
                
                    <p>
                        <strong>КТ</strong>&nbsp;от&nbsp;3150р
                    </p>
                
            

            <div>
                <!--noindex-->


    


    

<!--/noindex-->
            </div>
        
    </div>
</div>

<?php endforeach; ?>
<?php                        
    echo \yii\widgets\LinkPager::widget([
        'pagination' => $pages,
    ]);
  ?>
  <?php else: ?>
  <h2>По данному городу сведений пока нет. Мы работаем над этим...</h2>
<?php endif; ?>
    <div class="row clinic-row">
    <div class="col-xs-4 col-sm-2">
        
            <a href="clinic/master_zdo">
                
    <img class="img-responsive clinic-table-img" alt="Мастерская здоровья на Лесной"
         src="http://o-mri.ru.clinics.s3.amazonaws.com/master.jpg"/>

            </a>
        
    </div>

    <div class="col-xs-8 col-sm-7">
        
            <h4 class="heading">
                <a href="clinic/master_zdo">
                    Мастерская здоровья на Лесной
                </a>
            </h4>

            
                <div class="phone">
                    <span class="glyphicon glyphicon-earphone"></span>

                    
    
    
    
    <span id="29f107e0-ea98-45f9-bfe3-4fe0152ec7a3" style="display: none">
        (812) 309-91-53 (812) 309-82-04
    </span>
    <span style="cursor: pointer" id="17ea1c80-ee6e-4225-9fd0-2f38c3ce0032">
        
        <span id="6592123e-462f-4fa3-9db0-d121cbe90dd3">
            (812) 309-91-...
        </span>
        <button class="btn btn-xs btn-default"
                style="float: none !important;"
                href="/ad/phoneDialog/97"
                data-toggle="ajaxModal">
            показать телефон
        </button>
    </span>
    

    <div style="clear: both"></div>


                </div>
            

            <p>
                Полюстровский проспект, дом 68А
                
                    <br/>
                    <a href="area/view/viborgsky">
                        Выборгский район
                    </a>
                
            </p>

            
                <p>
                    <i class="glyphicon glyphicon-time"></i>
                    <em>МРТ - круглосуточно</em>
                </p>
            

            <div>
                
    <span class="label label-primary">Частная</span>


                

    <span class="label label-success trigger" data-container="body" data-toggle="popover" data-placement="top"
          data-content="Этим значком отмечены диагностические клиники имеющие в своем парке оборудования, МРТ открытого типа."><span class="glyphicon glyphicon-ok"></span> Открытый томограф</span>



    <span class="label label-success trigger" data-container="body" data-toggle="popover" data-placement="top"
          data-content="Этим значком отмечены диагностические клиники в которых вместе с МРТ или КТ исследованием идет бесплатная консультация врача."><span class="glyphicon glyphicon-ok"></span> Бесплатная консультация врача</span>



    <span class="label label-success trigger" data-container="body" data-toggle="popover" data-placement="top"
          data-content="Этим значком отмечены диагностические клиники работающие круглосуточно."><span class="glyphicon glyphicon-ok"></span> МРТ/КТ ночью</span>





            </div>
        
    </div>

    <div class="col-xs-12 col-sm-3">
        
            
                
                    <p>
                        <strong>МРТ</strong>&nbsp;от&nbsp;3430р
                    </p>
                
            

            

            <div>
                <!--noindex-->


    


    

<!--/noindex-->
            </div>
        
    </div>
</div>

