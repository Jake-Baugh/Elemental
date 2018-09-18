<?php require_once( 'cctr/cms.php' ); ?>

<cms:template title='Global Settings' executable='0' order='1' >
    <cms:editable type='text' name='address' label='Enter Address' order='1' />
    <cms:editable type='text' name='email' label='Enter Contact Email' order='2' />
    <cms:editable type='text' name='owner_email' label='Enter Owner Email' order='3' />
    <cms:editable type='text' name='phone' label='Enter Phone' order='4' />
    <cms:editable type='text' name='twitter_url' label='Enter Twitter URL' order='5' />
    <cms:editable type='text' name='twitter_hdl' label='Enter Twitter Handle' order='6' />
    <cms:editable type='text' name='linkedin_url' label='Enter LinkedIn URL' order='7' />
    <cms:editable type='text' name='linkedin_name' label='Enter LinkedIn Name' order='8' />
    <cms:editable type='text' name='records_visible' label='Total Number of blog posts visible on front page after load more' order='10' >9</cms:editable>
</cms:template>

<?php COUCH::invoke(); ?>
