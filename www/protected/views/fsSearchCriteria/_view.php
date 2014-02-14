<?php
/* @var $this FsSearchCriteriaController */
/* @var $data FsSearchCriteria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_type')); ?>:</b>
	<?php echo CHtml::encode($data->prop_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_range_min')); ?>:</b>
	<?php echo CHtml::encode($data->price_range_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_range_max')); ?>:</b>
	<?php echo CHtml::encode($data->price_range_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_room_range_min')); ?>:</b>
	<?php echo CHtml::encode($data->bed_room_range_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_room_range_max')); ?>:</b>
	<?php echo CHtml::encode($data->bed_room_range_max); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bath_room_range_min')); ?>:</b>
	<?php echo CHtml::encode($data->bath_room_range_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bath_room_range_max')); ?>:</b>
	<?php echo CHtml::encode($data->bath_room_range_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size_min')); ?>:</b>
	<?php echo CHtml::encode($data->size_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size_max')); ?>:</b>
	<?php echo CHtml::encode($data->size_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_with_virtual')); ?>:</b>
	<?php echo CHtml::encode($data->listing_with_virtual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_with_photo')); ?>:</b>
	<?php echo CHtml::encode($data->listing_with_photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year_built_min')); ?>:</b>
	<?php echo CHtml::encode($data->year_built_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year_built_max')); ?>:</b>
	<?php echo CHtml::encode($data->year_built_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garage')); ?>:</b>
	<?php echo CHtml::encode($data->garage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyword')); ?>:</b>
	<?php echo CHtml::encode($data->keyword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_id')); ?>:</b>
	<?php echo CHtml::encode($data->prop_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('search_by')); ?>:</b>
	<?php echo CHtml::encode($data->search_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('search_type')); ?>:</b>
	<?php echo CHtml::encode($data->search_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garage_parking')); ?>:</b>
	<?php echo CHtml::encode($data->garage_parking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cityagain')); ?>:</b>
	<?php echo CHtml::encode($data->cityagain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('neighbourhood')); ?>:</b>
	<?php echo CHtml::encode($data->neighbourhood); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compass_point')); ?>:</b>
	<?php echo CHtml::encode($data->compass_point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street_name')); ?>:</b>
	<?php echo CHtml::encode($data->street_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_style_type')); ?>:</b>
	<?php echo CHtml::encode($data->property_style_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_style')); ?>:</b>
	<?php echo CHtml::encode($data->property_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_tax')); ?>:</b>
	<?php echo CHtml::encode($data->property_tax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_year')); ?>:</b>
	<?php echo CHtml::encode($data->tax_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frequency')); ?>:</b>
	<?php echo CHtml::encode($data->frequency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assessment')); ?>:</b>
	<?php echo CHtml::encode($data->assessment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pet_friendly')); ?>:</b>
	<?php echo CHtml::encode($data->pet_friendly); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('open_house')); ?>:</b>
	<?php echo CHtml::encode($data->open_house); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('open_house_to_time')); ?>:</b>
	<?php echo CHtml::encode($data->open_house_to_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('open_house_from_time')); ?>:</b>
	<?php echo CHtml::encode($data->open_house_from_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('county')); ?>:</b>
	<?php echo CHtml::encode($data->county); ?>
	<br />

	*/ ?>

</div>