<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</div>
<?php
    $add_view = $this->view === 'add' ? true : false;
?>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend>
            <?= $add_view ? __('Add User') :  __('Edit User'); ?>
        </legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password', [
                'label' => $add_view ? __('Password') : __('New password (If you don\'t want to change the user\'s password, leave the boxes blank)')
            ]);
            echo $this->Form->input('password_confirm', [
                'type'  => 'password',
                'label' => $add_view ? __('Confirm password') : __('Confirm new password')
            ]);
            echo $this->Form->input('role', [
                'options' => ['admin' => 'Admin', 'user' => 'User']
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
