<?php require_once( 'cctr/cms.php' ); ?>
<cms:template title='CaseStudy' clonable='1' commentable='0'>
  <cms:editable name='cs_image' type='image' />
  <cms:editable name='cs_author' type='text' label='Author' />
  <cms:editable name='cs_content' type='richtext' />
   
  <cms:folder name="medical" title="Medical" />

</cms:template>

<cms:if k_is_page >
  <cms:embed 'case-study.html' />
<cms:else />
  <cms:if k_is_folder >
    <cms:embed 'cs-views.html' />
  <cms:else />
    <cms:embed 'clients.html' />
  </cms:if>
</cms:if>

<?php COUCH::invoke(); ?>
