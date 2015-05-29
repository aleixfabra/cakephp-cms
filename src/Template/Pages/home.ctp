<h1>Welcome to CakePHP CMS</h1>
<h3>Start</h3>
<ul>
    <li>
        Access admin <?= $this->Html->link(__('here'), ['_name' => 'admin']) ?>
        <ul>
            <li>username: admin</li>
            <li>password: 123456</li>
        </ul>
    </li>
    <li>Test your cakephp configuration <?= $this->Html->link(__('here'), ['_name' => 'cakephp_conf']) ?></li>
</ul>

<h3>Editing this Page</h3>
<ul>
    <li>To change the content of this page, edit: src/Template/Pages/home.ctp.</li>
    <li>You can also add some CSS styles for your pages at: webroot/css/.</li>
</ul>