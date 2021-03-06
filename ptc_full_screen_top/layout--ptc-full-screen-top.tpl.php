<?php
/**
 * @file
 * Template for a full screen layout with the header menu at the top of the screen.
 * Supportive themes will have a theme setting for l-big_statement and ptc-main class areas to have a full screen background image
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following divs:
 */
?>
<div class="layout--ptc-full-screen-top container js <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="loader"></div>

  <main class="l-wrapper container ptc-main" role="main" aria-label="<?php print t('Main content'); ?>">
      <a id="main-content"></a>

    <?php if ($content['header']): ?>
    <header class="l-header col-12 header-scrolled" role="banner" id="l-header" aria-label="<?php print t('Site header'); ?>">
      <div class="nav-placeholder"></div>
      <?php print $content['header']; ?>
    </header>
    <?php endif; ?>
    
    <?php if ($content['top']): ?>
    <div class="l-top col-12 container gutters" role="region">
      <?php print $content['top']; ?>
    </div>
    <?php endif; ?>
    
    <?php if ($content['statement1']): ?>
    <div class="l-statement l-statement1 col-12 container gutters section justify-center" id="l-statement" role="region">
        <?php print $content['statement1']; ?>
    </div>
    <?php endif; ?>

    <?php if ($content['secondary1']): ?>
    <div class="l-secondary l-secondary1 col-12 container secondary gutters" role="region">
        <?php print $content['secondary1']; ?>
    </div>
    <?php endif; ?>

    
    <?php if ($content['calltoaction']): ?>
    <div class="l-calltoaction col-12 container gutters section" role="secondary" aria-label="<?php print t('Action to take'); ?>">
       <?php print $content['calltoaction']; ?>
    </div>
    <?php endif; ?>
    
    <div class="l-content container gutters col-12 section">
      <?php print render($title_prefix); ?>
      <div class="header col-12 container gutters">
        <?php if ($title): ?>
          <h1 class="page-title col-10 align-center">
            <?php print $title; ?>
          </h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>
      <?php if ($messages): ?>
      <div class="l-messages col-10 align-center" role="status" aria-label="<?php print t('Status messages'); ?>">
        <?php print $messages; ?>
      </div>
      <?php endif; ?>
      <?php print $action_links; ?>
      <?php if ($tabs): ?>
        <nav class="tabs col-10 align-center column" role="tablist" aria-label="<?php print t('Admin Content Navigation Tabs'); ?>">
          <?php print $tabs; ?>
        </nav>
      <?php endif; ?>
      <?php print $content['content']; ?>
    </div>
  
    <?php if ($content['statement2']): ?>
      <div class="l-statement l-statement2 col-12 container section" role="region">
        <?php print $content['statement2']; ?>
      </div>
    <?php endif; ?>

    <?php if ($content['secondary2']): ?>
      <div class="l-secondary l-secondary2 col-12 container gutters secondary" role="region">
        <?php print $content['secondary2']; ?>
      </div>
    <?php endif; ?>

    <?php if ($content['statement3']): ?>
      <div class="l-statement l-statement3 col-12 container gutters section" role="region">
        <?php print $content['statement3']; ?>
      </div>
    <?php endif; ?>
  
    <?php if ($content['bottom']): ?>
    <div class="l-bottom col-12 container section" role="region">
        <?php print $content['bottom']; ?>
    </div>
    <?php endif; ?>

  </main>

  <?php if ($content['footer']): ?>
    <footer class="l-footer col-12 container gutters secondary" role="contentinfo" aria-label="<?php print t('Footer navigation'); ?>">
      <?php print $content['footer']; ?>
    </footer>
  <?php endif; ?>

</div>
