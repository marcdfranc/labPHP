<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
 


<section id="users-edit" class="content">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title"><?= __('Edit User') ?></h3>
				</div>
				<div class="box-body">
					<?= $this->Form->create($user) ?>

					<?php
									echo $this->Form->control('email');
						echo $this->Form->control('password');
                    ?>
						<?= $this->Form->button(__('Submit')) ?>

					<?= $this->Form->end() ?>				
				</div>
			</div>
		</div>
	</div>
</section>