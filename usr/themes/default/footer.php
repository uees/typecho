<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="https://github.com/uees/typecho">Typecho</a> 强力驱动'); ?>.
    <?php _e('由 <a href="http://www.huizzd.com/users/yang">阳阳</a> 维护'); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script src="<?php mix('app.min.js', $this->options) ?>"></script>
</body>
</html>
