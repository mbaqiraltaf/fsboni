<?php
/* @var $this FsPropertyController */
/* @var $data FsProperty */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fsboni_property_id')); ?>:</b>
	<?php echo CHtml::encode($data->fsboni_property_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_title')); ?>:</b>
	<?php echo CHtml::encode($data->prop_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_id')); ?>:</b>
	<?php echo CHtml::encode($data->seller_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street_number')); ?>:</b>
	<?php echo CHtml::encode($data->street_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compas_point')); ?>:</b>
	<?php echo CHtml::encode($data->compas_point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prp_add')); ?>:</b>
	<?php echo CHtml::encode($data->prp_add); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip_code')); ?>:</b>
	<?php echo CHtml::encode($data->zip_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('neighbourhood')); ?>:</b>
	<?php echo CHtml::encode($data->neighbourhood); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school')); ?>:</b>
	<?php echo CHtml::encode($data->school); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mls_number')); ?>:</b>
	<?php echo CHtml::encode($data->mls_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prp_desc')); ?>:</b>
	<?php echo CHtml::encode($data->prp_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prp_type')); ?>:</b>
	<?php echo CHtml::encode($data->prp_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_range')); ?>:</b>
	<?php echo CHtml::encode($data->price_range); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numbr_bedroom')); ?>:</b>
	<?php echo CHtml::encode($data->numbr_bedroom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numbr_bathroom')); ?>:</b>
	<?php echo CHtml::encode($data->numbr_bathroom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_style')); ?>:</b>
	<?php echo CHtml::encode($data->prop_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('att_dett_style')); ?>:</b>
	<?php echo CHtml::encode($data->att_dett_style); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('air_conditioning')); ?>:</b>
	<?php echo CHtml::encode($data->air_conditioning); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heating')); ?>:</b>
	<?php echo CHtml::encode($data->heating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kitchen_max_dimension')); ?>:</b>
	<?php echo CHtml::encode($data->kitchen_max_dimension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kitchen_min_dimension')); ?>:</b>
	<?php echo CHtml::encode($data->kitchen_min_dimension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kitchen_menu')); ?>:</b>
	<?php echo CHtml::encode($data->kitchen_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kitchen_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->kitchen_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dinning')); ?>:</b>
	<?php echo CHtml::encode($data->dinning); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dinning_max_dimension')); ?>:</b>
	<?php echo CHtml::encode($data->dinning_max_dimension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dinning_min_dimenstion')); ?>:</b>
	<?php echo CHtml::encode($data->dinning_min_dimenstion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dinning_menu')); ?>:</b>
	<?php echo CHtml::encode($data->dinning_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dinning_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->dinning_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attic')); ?>:</b>
	<?php echo CHtml::encode($data->attic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attic_max_dimension')); ?>:</b>
	<?php echo CHtml::encode($data->attic_max_dimension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attic_min_dimension')); ?>:</b>
	<?php echo CHtml::encode($data->attic_min_dimension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('basement_details')); ?>:</b>
	<?php echo CHtml::encode($data->basement_details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('base_max_dimenstion')); ?>:</b>
	<?php echo CHtml::encode($data->base_max_dimenstion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('base_min_dimension')); ?>:</b>
	<?php echo CHtml::encode($data->base_min_dimension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bath_max_dim_1')); ?>:</b>
	<?php echo CHtml::encode($data->bath_max_dim_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bath_min_dim_1')); ?>:</b>
	<?php echo CHtml::encode($data->bath_min_dim_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bath_max_dim_2')); ?>:</b>
	<?php echo CHtml::encode($data->bath_max_dim_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bath_min_dim_2')); ?>:</b>
	<?php echo CHtml::encode($data->bath_min_dim_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bath_max_dim_3')); ?>:</b>
	<?php echo CHtml::encode($data->bath_max_dim_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bath_min_dim_3')); ?>:</b>
	<?php echo CHtml::encode($data->bath_min_dim_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_mast_bed_max_dim')); ?>:</b>
	<?php echo CHtml::encode($data->bed_mast_bed_max_dim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_mast_bed_min_dim')); ?>:</b>
	<?php echo CHtml::encode($data->bed_mast_bed_min_dim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_mast_menu')); ?>:</b>
	<?php echo CHtml::encode($data->bed_mast_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_mast_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->bed_mast_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_max_dim_1')); ?>:</b>
	<?php echo CHtml::encode($data->bed_max_dim_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_min_dim_1')); ?>:</b>
	<?php echo CHtml::encode($data->bed_min_dim_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_1_menu')); ?>:</b>
	<?php echo CHtml::encode($data->bed_1_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_1_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->bed_1_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_max_dim_2')); ?>:</b>
	<?php echo CHtml::encode($data->bed_max_dim_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_min_dim_2')); ?>:</b>
	<?php echo CHtml::encode($data->bed_min_dim_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_2_menu')); ?>:</b>
	<?php echo CHtml::encode($data->bed_2_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_2_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->bed_2_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_max_dim_3')); ?>:</b>
	<?php echo CHtml::encode($data->bed_max_dim_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_min_dim_3')); ?>:</b>
	<?php echo CHtml::encode($data->bed_min_dim_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_3_menu')); ?>:</b>
	<?php echo CHtml::encode($data->bed_3_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_3_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->bed_3_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_max_dim_4')); ?>:</b>
	<?php echo CHtml::encode($data->bed_max_dim_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_min_dim_4')); ?>:</b>
	<?php echo CHtml::encode($data->bed_min_dim_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_4_menu')); ?>:</b>
	<?php echo CHtml::encode($data->bed_4_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_4_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->bed_4_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fireplace_location')); ?>:</b>
	<?php echo CHtml::encode($data->fireplace_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_max_dim_5')); ?>:</b>
	<?php echo CHtml::encode($data->bed_max_dim_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_min_dim_5')); ?>:</b>
	<?php echo CHtml::encode($data->bed_min_dim_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_5_menu')); ?>:</b>
	<?php echo CHtml::encode($data->bed_5_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bed_5_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->bed_5_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garage_ownrship')); ?>:</b>
	<?php echo CHtml::encode($data->garage_ownrship); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garage_on_site')); ?>:</b>
	<?php echo CHtml::encode($data->garage_on_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garage_type')); ?>:</b>
	<?php echo CHtml::encode($data->garage_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disability_access')); ?>:</b>
	<?php echo CHtml::encode($data->disability_access); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('elevatory_building')); ?>:</b>
	<?php echo CHtml::encode($data->elevatory_building); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sewer')); ?>:</b>
	<?php echo CHtml::encode($data->sewer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('water')); ?>:</b>
	<?php echo CHtml::encode($data->water); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pet_friendly')); ?>:</b>
	<?php echo CHtml::encode($data->pet_friendly); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assessment')); ?>:</b>
	<?php echo CHtml::encode($data->assessment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->updated_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('electricity')); ?>:</b>
	<?php echo CHtml::encode($data->electricity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('youtube')); ?>:</b>
	<?php echo CHtml::encode($data->youtube); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_home_inMls')); ?>:</b>
	<?php echo CHtml::encode($data->list_home_inMls); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('virtual_tour')); ?>:</b>
	<?php echo CHtml::encode($data->virtual_tour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('real_estate_attorney')); ?>:</b>
	<?php echo CHtml::encode($data->real_estate_attorney); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_warantee')); ?>:</b>
	<?php echo CHtml::encode($data->home_warantee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('appraiser')); ?>:</b>
	<?php echo CHtml::encode($data->appraiser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_inspector')); ?>:</b>
	<?php echo CHtml::encode($data->home_inspector); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_size')); ?>:</b>
	<?php echo CHtml::encode($data->prop_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_view_count')); ?>:</b>
	<?php echo CHtml::encode($data->prop_view_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_type')); ?>:</b>
	<?php echo CHtml::encode($data->prop_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fireplace_details')); ?>:</b>
	<?php echo CHtml::encode($data->fireplace_details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_frame_for_selling')); ?>:</b>
	<?php echo CHtml::encode($data->time_frame_for_selling); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('living_room_max')); ?>:</b>
	<?php echo CHtml::encode($data->living_room_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('living_room_min')); ?>:</b>
	<?php echo CHtml::encode($data->living_room_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('living_room_menu')); ?>:</b>
	<?php echo CHtml::encode($data->living_room_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('living_room_fire')); ?>:</b>
	<?php echo CHtml::encode($data->living_room_fire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('family_room_max')); ?>:</b>
	<?php echo CHtml::encode($data->family_room_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('family_room_min')); ?>:</b>
	<?php echo CHtml::encode($data->family_room_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('family_menu')); ?>:</b>
	<?php echo CHtml::encode($data->family_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('family_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->family_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('den_max')); ?>:</b>
	<?php echo CHtml::encode($data->den_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('den_min')); ?>:</b>
	<?php echo CHtml::encode($data->den_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('den_menu')); ?>:</b>
	<?php echo CHtml::encode($data->den_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('den_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->den_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laundry_max')); ?>:</b>
	<?php echo CHtml::encode($data->laundry_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laundry_min')); ?>:</b>
	<?php echo CHtml::encode($data->laundry_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laundry_menu')); ?>:</b>
	<?php echo CHtml::encode($data->laundry_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laundry_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->laundry_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('balcony_max')); ?>:</b>
	<?php echo CHtml::encode($data->balcony_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('balcony_min')); ?>:</b>
	<?php echo CHtml::encode($data->balcony_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('balcony_menu')); ?>:</b>
	<?php echo CHtml::encode($data->balcony_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('balcony_fire')); ?>:</b>
	<?php echo CHtml::encode($data->balcony_fire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_room_max')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_room_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_room_min')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_room_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_room_menu')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_room_menu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus_room_fireplace')); ?>:</b>
	<?php echo CHtml::encode($data->bonus_room_fireplace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_taxes')); ?>:</b>
	<?php echo CHtml::encode($data->property_taxes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_year')); ?>:</b>
	<?php echo CHtml::encode($data->tax_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street_suffix')); ?>:</b>
	<?php echo CHtml::encode($data->street_suffix); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('living_room_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->living_room_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dinning_room_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->dinning_room_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('family_room_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->family_room_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kitchen_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->kitchen_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mastrBedroom_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->mastrBedroom_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bedroom1_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->bedroom1_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bedroom2_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->bedroom2_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bedroom3_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->bedroom3_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bedroom4_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->bedroom4_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bedroom5_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->bedroom5_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('den_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->den_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laundry_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->laundry_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('den_balcony_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->den_balcony_flooring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bouns_flooring')); ?>:</b>
	<?php echo CHtml::encode($data->bouns_flooring); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('frequency')); ?>:</b>
	<?php echo CHtml::encode($data->frequency); ?>
	<br />

	*/ ?>

</div>