
<?php require_once( 'cctr/cms.php' ); ?>

<cms:template title='Client Logos' clonable='1' commentable='0' order='4'>
  <cms:editable name='cl_image' label='Logo Image' type='image' />
  <cms:editable name='cl_slider' label='Slider' desc='Include In Home Page Slider' type='radio' opt_values='No=0 | Yes=1' />
</cms:template>

<?php COUCH::invoke(); ?>
