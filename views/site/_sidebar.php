<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

?> 
<div class="col-sm-3">        
    <div class="hidden-xs">
        <div>
            <div class="btn-group" style="margin-top: 10px;margin-bottom: 10px;">
                <button type="button" data-toggle="dropdown"
                        class="btn btn-default dropdown-toggle ">Город<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="<?=  Url::to(['/site/cities', 'alias'=>'makhachkala'])?>">Махачкала</a>
                    </li>
                
                    <li>
                        <a href="<?=  Url::to(['/site/cities', 'alias'=>'kaspiysk'])?>">Каспийск</a>
                    </li>                       
                </ul>
            </div>
        </div>
        <div class="list-group">   
            <a href="?type=mrt" rel="nofollow" class="list-group-item ">
                <h4 class="list-group-item-heading">МРТ исследования</h4>

                <p class="list-group-item-text">Головы, позвоночника, внутренних органов, мягких тканей, суставов, сосудов</p>
            </a>
            
            <a href="?type=kt" rel="nofollow" class="list-group-item ">
                <h4 class="list-group-item-heading">КТ исследования</h4>

                <p class="list-group-item-text">Головы, позвоночника, органов и мягких тканей,
                суставов и костей, сосудов</p>
            </a>
        </div>    
        <div class="list-group" style="margin-bottom: 10px">
            <a href="?filter=open_tomograph" class="trigger-right list-group-item " rel="nofollow" data-filter="open_tomograph" data-container="body" data-toggle="popover" data-placement="top" data-content="Этим значком отмечены диагностические клиники имеющие в своем парке оборудования, МРТ открытого типа.">
                Открытый томограф                
            </a>
            <a href="?filter=around_the_clock" class="trigger-right list-group-item " rel="nofollow" data-filter="around_the_clock" data-container="body" data-toggle="popover" data-placement="top" data-content="Этим значком отмечены диагностические клиники работающие круглосуточно.">
                Круглосуточно
                
            </a>
            <a href="?filter=for_children" class="trigger-right list-group-item " rel="nofollow" data-filter="around_the_clock" data-container="body" data-toggle="popover" data-placement="top" data-content="Этим значком отмечены диагностические клиники в которых накоплен опыт проведения МРТ/КТ исследований для детей.">
                Для детей
                
            </a>
            <a href="?filter=tesla_1_5" class="trigger-right list-group-item " rel="nofollow" data-filter="around_the_clock" data-container="body" data-toggle="popover" data-placement="top" data-content="Этим значком отмечены диагностические клиники имеющие в своем парке оборудования, МРТ со сверхвысоким магнитным полем 3 Тл.">
                Поле 1,5 Тесла                
            </a>
        </div>    
            
    </div>
</div>