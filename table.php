<?php
#
# This file demonstrates how to generate a table view in the WordPress admin.
# There are APIs for this built into the WP core, but I still find it easier
# just to generate this stuff on my own.
# Improvements to follow.
#
?>

<ul class="subsubsub">
  <li class="all"><a href="#" class="current">All <span class="count">(#)</span></a> |</li>
  <li class="publish"><a href="#">Published <span class="count">(#)</span></a> |</li>
  <li class="draft"><a href="#">Drafts <span class="count">(#)</span></a> |</li>
  <li class="trash"><a href="#">Trash <span class="count">(#)</span></a></li>
</ul>

<form id="posts-filter" action="" method="get" name="posts-filter">
  <p class="search-box">
    <label class="screen-reader-text" for="post-search-input">Search Posts:</label> 
    <input type="text" id="post-search-input" name="s" value="" /> 
    <input type="submit" name="" id="search-submit" class="button" value="Search Posts" />
  </p>
  
  <div class="tablenav top">
    <div class="alignleft actions">
      <select name="action">
      </select> 
      <input type="submit" name="" id="doaction" class="button-secondary action" value="Apply" />
    </div>

    <div class="alignleft actions">
      <select name="m">
      </select> 
      <select name="cat" id="cat" class="postform">
      </select>
      <input type="submit" name="" id="post-query-submit" class="button-secondary" value="Filter" />
    </div>

    <?php ob_start(); ?>
      <div class="tablenav-pages one-page">
        <span class="displaying-num">2 items</span> 
        <span class="pagination-links">
          <a class="first-page disabled" title="Go to the first page" href="http://www.dev.wp.fatpandadev.com/wp-admin/edit.php">&laquo;</a> 
          <a class="prev-page disabled" title="Go to the previous page" href="http://www.dev.wp.fatpandadev.com/wp-admin/edit.php?paged=1">&lsaquo;</a> 
          <span class="paging-input">
            <input class="current-page" title="Current page" type="text" name="paged" value="1" size="1" /> 
            of <span class="total-pages">1</span>
          </span> 
          <a class="next-page disabled" title="Go to the next page" href="http://www.dev.wp.fatpandadev.com/wp-admin/edit.php?paged=1">&rsaquo;</a> 
          <a class="last-page disabled" title="Go to the last page" href="http://www.dev.wp.fatpandadev.com/wp-admin/edit.php?paged=1">&raquo;</a>
        </span>
      </div>
    <?php $tablenav = ob_get_flush() ?>

    <div class="view-switch">
      <a href="/wp-admin/edit.php?mode=list" class="current">
        <img id="view-switch-list" src="http://www.dev.wp.fatpandadev.com/wp-includes/images/blank.gif" width="20" height="20" title="List View" alt="List View" name="view-switch-list" /></a> 
        <a href="/wp-admin/edit.php?mode=excerpt">
          <img id="view-switch-excerpt" src="http://www.dev.wp.fatpandadev.com/wp-includes/images/blank.gif" width="20" height="20" title="Excerpt View" alt="Excerpt View" name="view-switch-excerpt" /></a>
    </div>

    <br class="clear" />
  </div>

  <table class="wp-list-table widefat fixed" cellspacing="0">
    
    <thead>
      <?php ob_start(); ?>
      <tr>
        <th scope="col" id="cb" class="manage-column column-cb check-column" style="">
          <input type="checkbox" />
        </th>
        <th scope="col" id="whatever1" class="manage-column column-whatever sortable desc" style="">
          <a href="#"><span>Whatever</span></a>
        </th>
        <th scope="col" id="whatever2" class="manage-column column-whatever sortable desc" style="">
          <a href="#"><span>Whatever</span></a>
        </th>
        <th scope="col" id="whatever2" class="manage-column column-whatever sortable desc" style="">
          <a href="#"><span>Whatever</span></a>
        </th>
      </tr>
      <?php $headrow = ob_get_flush(); ?>
    </thead>

    <tfoot><?php echo $headrow ?></tfoot>

    <tbody id="the-list">
      <tr id="item-#" class="alternate" valign="top">
        <th scope="row" class="check-column">
          <input type="checkbox" name="post[]" value="62" />
        </th>

        <td class="post-title page-title column-title">
          <strong>
            <a class="row-title" href="http://www.dev.wp.fatpandadev.com/wp-admin/post.php?post=62&amp;action=edit" title="Edit &acirc;&euro;&oelig;(no title)&acirc;&euro;">Lorem ipsum whatever</a> 
            - <span class="post-state">Draft</span>
          </strong>

          <div class="row-actions">
            <span class="edit"><a href="#" title="Edit this item">Edit</a> |</span> 
            <span class="inline hide-if-no-js"><a href="#" class="editinline" title="Edit this item inline">Quick&nbsp;Edit</a> |</span> 
            <span class="trash"><a class="submitdelete" title="Move this item to the Trash" href="#">Trash</a> |</span> 
            <span class="view"><a href="#" title="Preview &acirc;&euro;&oelig;(no title)&acirc;&euro;" rel="permalink">Preview</a></span>
          </div>

          <div class="hidden" id="inline_62">
          </div>
        </td>

        <td class="author column-author">
          <a href="edit.php?post_type=post&amp;author=1">whatever</a>
        </td>

        <td class="date column-date">
          <abbr title="2011/08/24 6:00:33 AM">2011/08/24</abbr><br />
          Last Modified
        </td>
      </tr>     
      
      <tr id="item-#" class="" valign="top">
        <th scope="row" class="check-column">
          <input type="checkbox" name="post[]" value="62" />
        </th>

        <td class="post-title page-title column-title">
          <strong>
            <a class="row-title" href="http://www.dev.wp.fatpandadev.com/wp-admin/post.php?post=62&amp;action=edit" title="Edit &acirc;&euro;&oelig;(no title)&acirc;&euro;">Lorem ipsum whatever</a> 
            - <span class="post-state">Draft</span>
          </strong>

          <div class="row-actions">
            <span class="edit"><a href="#" title="Edit this item">Edit</a> |</span> 
            <span class="inline hide-if-no-js"><a href="#" class="editinline" title="Edit this item inline">Quick&nbsp;Edit</a> |</span> 
            <span class="trash"><a class="submitdelete" title="Move this item to the Trash" href="#">Trash</a> |</span> 
            <span class="view"><a href="#" title="Preview &acirc;&euro;&oelig;(no title)&acirc;&euro;" rel="permalink">Preview</a></span>
          </div>

          <div class="hidden" id="inline_62">
          </div>
        </td>

        <td class="author column-author">
          <a href="edit.php?post_type=post&amp;author=1">whatever</a>
        </td>

        <td class="date column-date">
          <abbr title="2011/08/24 6:00:33 AM">2011/08/24</abbr><br />
          Last Modified
        </td>
      </tr>                  
    </tbody>
  </table>

  <div class="tablenav bottom">
    <?php echo $tablenav ?>
  </div>
</form>