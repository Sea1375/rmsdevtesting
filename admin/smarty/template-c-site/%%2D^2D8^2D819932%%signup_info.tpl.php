<?php /* Smarty version 2.6.31, created on 2021-04-07 02:21:34
         compiled from signup_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'signup_info.tpl', 1, false),)), $this); ?>
<?php $this->assign('page_title', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['static_html_title']['signup_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['static_html_description']['signup_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['static_html_keywords']['signup_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['signup_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_header_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="signup-info">
  <div class="signup-info-wrap">
    <div class="signup-info__head">
      <div class="signup-info__head-container">
        <h1 class="signup-info__title">Welcome to RMS</h1>
        <p class="signup-info__text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
          ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
          sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.
        </p>
      </div>
    </div>
    <div class="signup-info__body">
      <div class="signup-info__body-container">
        <div class="signup-info-card-wrap">
          <div class="signup-info-card">
            <h2 class="signup-info-card__title">Guest</h2>
            <p class="signup-info-card__text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip
            </p>
            <ul class="signup-info-features">
              <li class="signup-info-features__item">Watch 40 second teaser videos in 720P</li>
              <li class="signup-info-features__item">Watch Full Length Videos in 1080P/4K</li>
              <li class="signup-info-features__item">Rate or Comment on any videos</li>
              <li class="signup-info-features__item">Save videos to your favorites section</li>
              <li class="signup-info-features__item">
                Create & Upload your own videos and earn cash!
              </li>
              <li class="signup-info-features__item">
                Have % of proceeds from your videos go to charity
              </li>
              <li class="signup-info-features__item">Disable advertisements site-wide</li>
              <li class="signup-info-features__item">Subscribe to user channels</li>
              <li class="signup-info-features__item">
                Get notified when new content is added from subscribed channels
              </li>
              <li class="signup-info-features__item">full personal library of favorited videos</li>
            </ul>
            <a href="/" class="signup-info-card__button signup-info-card__button--guest">
              <span> CONTINUE AS GUEST </span>
              <span> ENJOY FREE PREVIEWS </span>
            </a>
          </div>
          <div class="signup-info-card">
            <h2 class="signup-info-card__title">Premium</h2>
            <p class="signup-info-card__text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
              exercitation ullamco laboris nisi ut aliquip
            </p>
            <ul class="signup-info-features">
              <li class="signup-info-features__item">Watch 40 second teaser videos in 720P</li>
              <li class="signup-info-features__item">Watch Full Length Videos in 1080P/4K</li>
              <li class="signup-info-features__item">Rate or Comment on any videos</li>
              <li class="signup-info-features__item">Save videos to your favorites section</li>
              <li class="signup-info-features__item">
                Create & Upload your own videos and earn cash!
              </li>
              <li class="signup-info-features__item">
                Have % of proceeds from your videos go to charity
              </li>
              <li class="signup-info-features__item">Disable advertisements site-wide</li>
              <li class="signup-info-features__item">Subscribe to user channels</li>
              <li class="signup-info-features__item">
                Get notified when new content is added from subscribed channels
              </li>
              <li class="signup-info-features__item">full personal library of favorited videos</li>
            </ul>
            <a href="<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['signup'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>" data-action="popup" class="signup-info-card__button signup-info-card__button--premium">
              <span> ACCESS PREMIUM </span>
              <span> GET FULL ACCESS NOW! </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_footer_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>