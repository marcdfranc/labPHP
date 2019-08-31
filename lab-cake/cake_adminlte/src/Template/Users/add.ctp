<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="content-header">
	<h1><?= __('Users') ?></h1>
</div>
<section id="users-add" class="content">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title"><?= __('Add User') ?></h3>
				</div>
				<div class="box-body">
					<?= $this->Form->create($user) ?>

					<?php
									echo $this->Form->control('email', ['class'=> 'form-control']);
						echo $this->Form->control('password', ['class'=> 'form-control']);
                    ?>
						<?= $this->Form->button(__('Submit')) ?>

					<?= $this->Form->end() ?>				
				</div>
			</div>
		</div>
	</div>
</section>