<?php require_once( 'cctr/cms.php' ); ?>

<cms:template title='Global Settings' executable='0' >
    <cms:editable type='text' name='records_visible' label='Total Number of blog posts visible on front page after load more' order='10' >9</cms:editable>
</cms:template>

<?php COUCH::invoke(); ?>
