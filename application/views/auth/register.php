    <section class="uk-section uk-section-xsmall header-section" data-uk-height-viewport="expand: true">
      <div class="uk-container">
        <div class="uk-grid uk-grid-small" data-uk-grid>
          <div class="uk-width-1-5@s"></div>
          <div class="uk-width-3-5@s">
            <h3 class="uk-h3 uk-text-uppercase uk-text-bold  uk-margin-medium-top uk-margin-small-bottom"><?= lang('register') ?></h3>
            <?= form_open(current_url()) ?>
            <?= $template['partials']['alerts'] ?>
            <div class="uk-margin">
              <div class="uk-grid uk-grid-small" data-uk-grid>
                <div class="uk-inline uk-width-1-2@s">
                  <label class="uk-form-label"><?= lang('nickname') ?></label>
                  <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                      <span class="uk-form-icon"><i class="fas fa-user"></i></span>
                      <input class="uk-input" type="text" name="nickname" value="<?= set_value('nickname') ?>" placeholder="<?= lang('nickname') ?>">
                    </div>
                  </div>
                  <?= form_error('nickname', '<span class="uk-text-small uk-text-danger">', '</span>') ?>
                </div>
                <div class="uk-inline uk-width-1-2@s">
                  <label class="uk-form-label"><?= lang('username') ?></label>
                  <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                      <span class="uk-form-icon"><i class="fas fa-user"></i></span>
                      <input class="uk-input" type="text" name="username" value="<?= set_value('username') ?>" placeholder="<?= lang('username') ?>">
                    </div>
                  </div>
                  <?= form_error('username', '<span class="uk-text-small uk-text-danger">', '</span>') ?>
                </div>
              </div>
            </div>
            <div class="uk-margin">
              <label class="uk-form-label"><?= lang('email') ?></label>
              <div class="uk-form-controls">
                <div class="uk-inline uk-width-1-1">
                  <span class="uk-form-icon"><i class="fas fa-envelope"></i></span>
                  <input class="uk-input" type="email" name="email" value="<?= set_value('email') ?>" placeholder="<?= lang('email') ?>">
                </div>
              </div>
              <?= form_error('email', '<span class="uk-text-small uk-text-danger">', '</span>') ?>
            </div>
            <div class="uk-margin">
              <div class="uk-grid uk-grid-small" data-uk-grid>
                <div class="uk-inline uk-width-1-2@s">
                  <label class="uk-form-label"><?= lang('password') ?></label>
                  <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                      <span class="uk-form-icon"><i class="fas fa-lock"></i></span>
                      <input class="uk-input" type="password" name="password" placeholder="<?= lang('password') ?>">
                    </div>
                  </div>
                  <?= form_error('password', '<span class="uk-text-small uk-text-danger">', '</span>') ?>
                </div>
                <div class="uk-inline uk-width-1-2@s">
                  <label class="uk-form-label"><?= lang('confirm_password') ?></label>
                  <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                      <span class="uk-form-icon"><i class="fas fa-lock"></i></span>
                      <input class="uk-input" type="password" name="confirm_password" placeholder="<?= lang('confirm_password') ?>">
                    </div>
                  </div>
                  <?= form_error('confirm_password', '<span class="uk-text-small uk-text-danger">', '</span>') ?>
                </div>
              </div>
            </div>
            <div class="uk-margin-top uk-margin-small-bottom">
              <label class="uk-form-label">
                <input class="uk-checkbox" name="terms" value="agree" type="checkbox" <?= set_checkbox('terms', 'agree') ?>> <?= lang('read_and_agree') ?> <a target="_blank" href="<?= site_url('page/tos') ?>"><?= lang('terms_and_conditions') ?></a>.
              </label>
              <?= form_error('terms', '<span class="uk-display-block uk-text-small uk-text-danger">', '</span>') ?>
            </div>
            <?php if (config_item('captcha_register') === 'true'): ?>
            <div class="uk-margin-small">
              <div class="<?= (config_item('captcha_type') === 'hcaptcha') ? 'h-captcha' : 'g-recaptcha' ?>" data-sitekey="<?= config_item('captcha_public') ?>" data-theme="<?= config_item('captcha_theme') ?>"></div>
            </div>
            <?php endif ?>
            <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small" type="submit"><i class="fas fa-user-plus"></i> <?= lang('register') ?></button>
            <?= form_close() ?>
            <hr class="uk-hr">
            <p class="uk-text-small uk-text-center uk-margin-small"><i class="fas fa-info-circle"></i> <?= lang('already_have_account') ?> <a href="<?= site_url('login') ?>"><?= lang('here') ?></a></p>
          </div>
          <div class="uk-width-1-5@s"></div>
        </div>
      </div>
    </section>