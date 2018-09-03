<?php require_once( 'cctr/cms.php' ); ?>

<cms:template title='Newsletter'>
    <cms:editable label='MailChimp API Key' name='mc_api_key' required='1' type='text'/>
    <cms:editable label='MailChimp List ID' name='mc_list_id' required='1' type='text'/>
</cms:template>

<cms:form method='post' name='subscribe'>
    <cms:if k_success>
        <cms:php>
            global $CTX;
            use \DrewM\MailChimp\MailChimp;
            $MailChimp = new MailChimp($CTX->get('mc_api_key'));

            $result = $MailChimp->post('lists/' . $CTX->get('mc_list_id') . '/members', array(
                'email_address' => $CTX->get('frm_email'),
                'status'        => 'pending'
            ));

            if (isset($result['id'])) {
                echo "<p class=\"success\">Please check your inbox for a confirmation email.</p>";
            } else if (isset($result['type'])) {
                echo "<p class=\"error\"><strong>" . $result['title'] . " (" . $result['status'] . "):</strong> " . $result['detail'] . "<br><br>" . $result['type'] . "</p>";
            } else {
                echo "<p class=\"error\">An unknown error was encountered. Please try again later or contact us.</p>";
            }
        </cms:php>
    <cms:else/>
        <cms:if k_error>
            <div class="notice">Please enter a valid email address.</div>
        </cms:if>

        <cms:input name='email' placeholder='Email Address' required='1' type='text' validator='email'/>
        <input type="submit" value="Subscribe to Newsletter">
    </cms:if>
</cms:form>
<?php COUCH::invoke(); ?>
