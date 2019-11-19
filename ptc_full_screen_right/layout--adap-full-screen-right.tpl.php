<?php
/**
 * @file
 *Template for a full screen layout in which the header menu is vertically on the right of the content area.
 *
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
<div class="layout--adap-full-screen-right container <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <main class="l-wrapper container" role="main" aria-label="<?php print t('Main content'); ?>">
      <a id="main-content"></a>

    <div class="l-content adap-main col-12 col-sm-9 col-lg-10 container" role="region">
      <?php if ($messages): ?>
        <div class="l-messages col-12" role="status" aria-label="<?php print t('Status messages'); ?>">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>

      <div class="col-12">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($tabs): ?>
        <nav class="tabs small-12 column" role="tablist" aria-label="<?php print t('Admin Content Navigation Tabs'); ?>">
          <?php print $tabs; ?>
        </nav>
      <?php endif; ?>

      <?php print $action_links; ?>
      <?php print $content['content']; ?>
      </div>
      <?php if ($content['footer']): ?>
      <footer class="l-footer col-12" role="contentinfo" aria-label="<?php print t('Footer navigation'); ?>">
        <?php print $content['footer']; ?>
      </footer>
      <?php endif; ?>
    </div>

    <?php if ($content['header']): ?>
      <header class="l-header col-12 col-sm-3 col-lg-2" role="banner" aria-label="<?php print t('Site header'); ?>">
        <?php print $content['header']; ?>
      </header>
    <?php endif; ?>
  </main>

</div>
