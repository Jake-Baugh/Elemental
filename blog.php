<?php require_once( 'cctr/cms.php' ); ?>
  <cms:template title='Blog' clonable='1' commentable='0'>
  <cms:editable name='blog_image' type='image' />
  <cms:editable name='blog_author' type='text' label='Author' />
  <cms:editable name='blog_content' type='richtext' />
   
  <cms:folder name="blog" title="Blog" />
  <cms:folder name="case-study" title="Case Study" />
  <cms:folder name="news" title="News" />

</cms:template>

<cms:if k_is_page >
  <cms:embed 'blog-post.html' />
<cms:else />
  <cms:embed 'news-views.html' />
</cms:if>
<?php COUCH::invoke(); ?>
