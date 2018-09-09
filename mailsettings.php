<?php require_once( 'cctr/cms.php' ); ?>

<cms:template title='Mail Settings' order='2' >
    <cms:editable label='MailChimp API Key' name='mc_api_key' type='text'/>
    <cms:editable label='MailChimp List ID' name='mc_list_id' type='text'/>
    <cms:editable label='Contact Form From:' name='contact_from' label='Contact Form From Address' type='text' />
    <cms:editable label='Contact Form To:' name='contact_to' label='Contact Form To Address' type='text' />
</cms:template>

<?php COUCH::invoke(); ?>
