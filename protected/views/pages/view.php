<?php
/* @var $this PagesController */
/* @var $model Pages */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Pages', 'url'=>array('index')),
	array('label'=>'Create Pages', 'url'=>array('create')),
	array('label'=>'Update Pages', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pages', 'url'=>array('admin')),
);
?>

<h1>View Pages #<?= $model->id; ?></h1>

    <table>
    <? foreach($model->photos as $photo){ ?>
<tr>
    <td><?=$photo->id?></td>
    <td><?=$photo->source?></td>
</tr>
<? } ?>
    </table>

<pre>
<?
print_r($model->attributes);
?>
</pre>

<table>
    <? foreach($model->attributes as $key=>$value){ ?>
    <tr>
        <td><?=$key?></td>
        <td><?=$value?></td>
    </tr>
    <? } ?>
</table>

    <?=time()?> <?=date('d.m.Y H:i')?>