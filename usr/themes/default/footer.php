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
<script src="https://cdn.staticfile.org/KaTeX/0.10.0/katex.min.js" defer></script>
<script src="https://cdn.staticfile.org/KaTeX/0.10.0/contrib/auto-render.min.js" defer></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        renderMathInElement(document.body, {
            'delimiters': [
                {left: "$$", right: "$$", display: true},
                {left: "$", right: "$", display: false}
            ]
        });
    });
</script>
</body>
</html>
