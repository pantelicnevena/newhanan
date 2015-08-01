<?php
/**
 * Created by PhpStorm.
 * User: enco
 * Date: 7/23/15
 * Time: 12:36 AM
 */
?>

<footer class="mdl-mini-footer mdl-color--teal-700 opposites-footer">
    <div class="mdl-mini-footer--left-section">
        <div class="mdl-logo">&copy; 2015 adoralevin. All rights reserved</div>
    </div>
    <div class="mdl-mini-footer--right-section">
        <ul class="mdl-mini-footer--link-list">
            <li title="Adora">
                <button
                    class="mdl-button mdl-js-button mdl-button--fab
                        mdl-js-ripple-effect mdl-color--pink-A400 footer-btn mdl-button--mini-fab"
                    onclick="window.open('http://adoralevin.com')">
                    <i class="fa fa-home fa-fw"></i>
                </button>
            </li>
            <li title="Contact">
                <button
                    class="mdl-button mdl-js-button mdl-button--fab
                        mdl-js-ripple-effect mdl-color--pink-A400 footer-btn mdl-button--mini-fab"
                    onclick="location.href='mailto:hanan@adoralevin.com'" >
                    <i class="fa fa-envelope fa-fw"></i>
                </button>
            </li>
            <li title="Facebook">
                <button
                    class="mdl-button mdl-js-button mdl-button--fab
                        mdl-js-ripple-effect mdl-color--pink-A400 footer-btn mdl-button--mini-fab"
                    onclick="window.open('https://www.facebook.com/pages/Adora-Art-Project-Fan-Club/837747369619420', '_blank')" name="Facebook">
                    <i class="fa fa-facebook fa-fw"></i>
                </button>
            </li>
            <li title="Twitter">
                <button
                    class="mdl-button mdl-js-button mdl-button--fab
                        mdl-js-ripple-effect mdl-color--pink-A400 footer-btn mdl-button--mini-fab"
                    onclick="window.open('https://twitter.com/AdoraLevin', '_blank')" name="Twitter">
                    <i class="fa fa-twitter fa-fw"></i>
                </button>
            </li>
            <li title="Foundation">
                <button
                    class="mdl-button mdl-js-button mdl-button--fab
                        mdl-js-ripple-effect mdl-color--pink-A400 footer-btn mdl-button--mini-fab"
                    onclick="window.open('<?php echo esc_url( home_url( '/charity' ) );?>', '_blank')" name="Foundation">
                    <i class="fa fa-money fa-fw"></i>
                </button>
            </li>
        </ul>
    </div>
</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>
