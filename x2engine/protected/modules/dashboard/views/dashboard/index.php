<?php
/*****************************************************************************************
 * X2CRM Open Source Edition is a customer relationship management program developed by
 * X2Engine, Inc. Copyright (C) 2011-2013 X2Engine Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY X2ENGINE, X2ENGINE DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact X2Engine, Inc. P.O. Box 66752, Scotts Valley,
 * California 95067, USA. or at email address contact@x2engine.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * X2Engine" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by X2Engine".
 *****************************************************************************************/
$this->menu=array(array('label'=>'Dashboard', 'url'=>array('admin')));
?>
<h2><center><?php echo Yii::t('app','Side Panel Settings'); ?></center></h2>
<center><p>Below you see a listing of all potential widgets to be shown on the side panel. Please use this listing for setting your desired configurations of the side panel.</p></center>
<?php
$dataP = new Dashboard();
$DPRO = $dataP->search('sp');
$this->widget('zii.widgets.grid.CGridView',array(
    'id'=>'dashboard-grid',
    'baseScriptUrl'=>Yii::app()->request->baseUrl.'/themes/'.Yii::app()->theme->name.'/css/gridview',
    'dataProvider'=>$DPRO,
    'columns'=>array(
        array(
            'name'=>'dispNAME',
            'header'=>'Display Name',
        ),
        array(
            'name'=>'showPROFILE',
            'header'=>'Shown in Profile',
            'value'=>'$data->showPROFILE ? "Yes" : "No"',
        ),
        array(
            'name'=>'showDASH',
            'header'=>'Shown in Dashboard',
            'value'=>'$data->showDASH ? "Yes" : "No"',
        ),
        array(
            'name'=>'posPROFILE',
            'header'=>'Position in Profile',
        ),
        array(
            'name'=>'posDASH',
            'header'=>'Position in Dashboard',
        ),
        array(
            'header'=>'EditingTools',
            'class'=>'CButtonColumn'
        ),
    ),
));
?>

