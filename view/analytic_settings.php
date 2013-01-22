<div id="wrap">
    <div class="full-content">
        <div id="post-body">
            <div class="one-full">
                <div class="title pad-right">
                    <h1><img src="<?=ADMIN_URL;?>images/icons/icon_pages_32.png" alt="" /> Analytic Settings</h1>
                    <div class="span8 well">
                        <p>Please enter your Google Analytics tracking code, If you do not have an account or tracking code for this site. Go to and <a href="http://www.google.com/analytics/">register</a></p>

                        <?
                            if ( input::post('tracking_code') )
                                set::option('tracking_code', input::post('tracking_code'));
                        ?>

                        <form action="<?= HISTORY ?>" method="post" class="form-stacked">

                            <input type="hidden" name="history" value="admin/settings_plugins/analytic_settings">

                            <fieldset>

                                <div class="control-group">
                                    <label class="control-label" for="blogname">Tracking Code</label>
                                    <div class="controls">
                                        <input type="text" value="" placeholder="UA-XXXXXX-XX" name="tracking_code">
                                    </div>
                                </div>

                            </fieldset>

                            <div class="form-actions">
                                <button class="btn btn-primary" type="submit">
                                    Save
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div><!-- .one-full -->
        </div><!-- .post-body -->
    </div><!-- .full-content -->
</div><!-- #wrap -->
