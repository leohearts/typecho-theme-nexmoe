<script src="<?php echo $this->options->jquery_js ?>"></script>
<script src="<?php echo $this->options->mdui_js ?>"></script>
<?php if (!empty($this->options->function) && in_array('SmoothScroll', $this->options->function)) : ?>
    <script src="<?php echo $this->options->SmoothScroll_js ?>"></script>
<?php endif; ?>
<script src="<?php $this->options->themeUrl('source/js/app.js'); ?>"></script>
<script src="<?php echo $this->options->lazysizes_js ?>"></script>
<?php if (!empty($this->options->function) && in_array('LinkinNewtab', $this->options->function)) {
    echo '<script>(function(){var res = document.querySelectorAll("a");for (var i=0;i<res.length;i++){  if(res[i].href!=""&&res[i].href.search(document.querySelectorAll("a")[2].href)){    res[i].target="_blank";  }}})();</script>';
} ?>