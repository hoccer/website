
    <div class="push"></div>
    </div>
    <footer>
      <hr />
      <div class="row">
        <div class="column grid_8">
          <a href="http://www.twitter.com/hoccer"><h4>Latest Tweets</h4></a>
        </div>
        <div class="column grid_4">
          <h4>About Hoccer</h4>
        </div>
      </div>
      <div class="row">
        <div class="column grid_3 tweet">
          <p>
          </p>
        </div>
        <div class="column grid_3 tweet">
          <p>
          </p>
        </div>

        <div class="column grid_2">
          &nbsp;
        </div>
        <div class="column grid_2">
          <ul>
            <li><a href="/company/">Company</a></li>
            <li><a href="/blog/">Blog</a></li>
            <li><a href="/contact/">Contact/Press</a></li>
            <li><a href="/legal_notice/">Legal Notice</a></li>
          </ul>
        </div>
        <div class="column grid_2">
          <ul id="social">
            <li>
              <a href="<?php bloginfo('rss2_url'); ?>">
                <img src="<?php bloginfo('template_url'); ?>/images/mini_rss.png" />
                Subscribe RSS Feed
              </a>
            </li>
            <li>
              <a href="http://www.twitter.com/hoccer">
                <img src="<?php bloginfo('template_url'); ?>/images/mini_twitter.png" />
                Follow us on Twitter
              </a>
            </li>
            <li>
              <a href="http://www.facebook.com/hoccer">
                <img src="<?php bloginfo('template_url'); ?>/images/mini_facebook.png" />
                Hoccer on Facebook
              </a>
            </li>
          </ul>
        </div>

      </div>
    </footer>


<script>!window.jQuery && document.write('<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.2.min.js"><\/script>')</script>

<script src="<?php bloginfo('template_url'); ?>/js/script.js?v=1"></script>
<script type="text/javascript" charset="utf-8" src="http://api.twitter.com/1/statuses/user_timeline/hoccer.json?include_rts=true&count=2&callback=updateTwitter"></script>



<!--[if lt IE 7 ]>
  <script src="js/dd_belatedpng.js?v=1"></script>
<![endif]-->
<?php wp_footer() ?>
</body>
</html>
