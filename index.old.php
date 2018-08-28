<?php require_once( 'cctr/cms.php' ); ?>
<cms:template title='Blog' clonable='1' commentable='0'>
  <cms:editable name='blog_image' type='image' />
  <cms:editable name='blog_author' type='text' label='Author' />
  <cms:editable name='blog_content' type='richtext' />
   
  <cms:folder name="marketing" title="Marketing" />
  <cms:folder name="nhs-sales-teams" title="NHS Sales Teams" />
  <cms:folder name="nhs-suppliers" title="NHS Suppliers" />

</cms:template>

<cms:if k_is_page >
  <cms:embed 'blog-post.html' />
<cms:else />
  <cms:if k_is_folder >
    <cms:embed 'news-views.html' />
  <cms:else />
    <cms:embed 'index.html' />
  </cms:if>
</cms:if>

<?php COUCH::invoke(); ?>
