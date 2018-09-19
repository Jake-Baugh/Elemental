<?php require_once( 'cctr/cms.php' ); ?>
  <cms:template title='Team' clonable='1' commentable='0' order='5'>
  <cms:editable name='team_image' type='image' label='Image' />
  <cms:editable name='team_role' type='text' label='Role' />
  <cms:editable name='team_about' label='About' type='richtext' />
   
  <cms:folder name="staff" title="Staff" />
  <cms:folder name="experts" title="Experts" />

</cms:template>

<?php COUCH::invoke(); ?>
