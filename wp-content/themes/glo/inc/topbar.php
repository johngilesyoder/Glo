<div class="topbar">
  <div class="topbar-series">
    <button id="series-toggle" class="series-toggle">Looking for a particular Glo series?</button>
    <div id="series-list" class="series-list">
      <p>Series:</p>
      <ul>
        <?php
          // your taxonomy name
          $tax = 'series';
          // get the terms of taxonomy
          $terms = get_terms( $tax, [
          'hide_empty' => false, // do not hide empty terms
          ]);
          // loop through all terms
          foreach( $terms as $term ) {
        ?>
          <li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
  <div class="topbar-links">
    <ul>
      <li id="find-dealer"><a href="/find-a-dealer">Find a Dealer</a></li>
      <!-- <li><a href="/dealers">Dealer Portal</a></li> -->
      <li><a href="/contact-us">Contact Us</a></li>
      <li class="phone-number"><a href="tel:+14067212741">(406) 721-2741</a></li>
    </ul>
  </div>
</div>
