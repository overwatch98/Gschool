<?php
$title = 'Blog';

ob_start()?>

<div class="blog-banner">
    <img src="Public/imgs/gsban.jpg" alt="">
</div>
<div class="container mt-5 min-h">
    <h4 class="teal-text post-title">Les derniers mis a jour du system</h4>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima deleniti aliquid facere explicabo blanditiis ipsa rerum iusto neque facilis nam, culpa nisi saepe non accusantium amet, suscipit cum dignissimos soluta! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora ut ipsa deserunt quod facere facilis optio, pariatur laudantium, quae veniam doloribus minima placeat adipisci minus quia soluta quas debitis magni!</p>
    <h4 class="teal-text post-title">Les nouvelles fonctionalitees</h4>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima deleniti aliquid facere explicabo blanditiis ipsa rerum iusto neque facilis nam, culpa nisi saepe non accusantium amet, suscipit cum dignissimos soluta! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora ut ipsa deserunt quod facere facilis optio, pariatur laudantium, quae veniam doloribus minima placeat adipisci minus quia soluta quas debitis magni!</p>
    <h4 class="teal-text post-title">Comment avoir du trafic</h4>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima deleniti aliquid facere explicabo blanditiis ipsa rerum iusto neque facilis nam, culpa nisi saepe non accusantium amet, suscipit cum dignissimos soluta! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora ut ipsa deserunt quod facere facilis optio, pariatur laudantium, quae veniam doloribus minima placeat adipisci minus quia soluta quas debitis magni!</p>
</div>
<?php $content = ob_get_clean();
require 'View/frontend/template.php'; ?>