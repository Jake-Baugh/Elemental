<?php require_once( 'cctr/cms.php' ); ?>

<cms:template title='Client Testimonials' clonable='1' commentable='0' order='5'>
  <cms:editable name='ct_image' label='Logo Image' type='image' />
  <cms:editable name='ct_name' label='Client Name' type='text' />
  <cms:editable name='ct_organisation' label='Organisation' type='text' />
  <cms:editable name='ct_text' label='Testimonial' desc='Enter client testimonial' type='textarea' />
</cms:template>

<cms:folder name="data-services" title="Data Services" />
<cms:folder name="marketing" title="Marketing" />
<cms:folder name="pr-comms" title="PR Comms" />
<cms:folder name="sales-acceleration" title="Sales Acceleration" />

<?php COUCH::invoke(); ?>
