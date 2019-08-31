<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="content-header">
	<h1><?= __('Users') ?></h1>
</div>
<section id="users-index" class="content">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="box box-default">
                <div class="box-header with-border row">
                    <h3 class="box-title col-sm-12 col-md-10 col-lg-10"><?= __('Users') ?></h3>
                    <div class="box-tools col-sm-12 col-md-2 col-lg-2">
                        <form method="get" role="form" >                        
                            <input type="hidden" name="sort" id="sort" value="<?= isset($pesquisa['sort'])? $pesquisa['sort'] : '' ?>">
                            <input type="hidden" name="direction" id="direction" value="<?= isset($pesquisa['direction'])? $pesquisa['direction'] : '' ?>">
                            <div class="input-group input-group-sm">
                                <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisa..." value="<?= isset($pesquisa['search'])? $pesquisa['search'] : '' ?>" >                                
                                <span class="input-group-btn">
                                    <button class="btn btn-default"><i class="fa fa-search"></i></button>                                
                                </span>
                            </div>
                        </form>                        
                    </div>
                </div>
           
                <div class="box-body row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <table cellpadding="0" cellspacing="0" class="table table-bordered table-hover dataTable">
                            <thead>
                                <tr role="row">
                                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                            	</tr>
                       		</thead>
                        	<tbody>
            <?php foreach ($users as $user): ?>
                            	<tr>
                                	<td><?= $this->Number->format($user->id) ?></td>
                                	<td><?= h($user->email) ?></td>
                                	<td><?= h($user->password) ?></td>
                                	<td><?= h($user->created) ?></td>
                                	<td><?= h($user->modified) ?></td>
									<td class="actions">
										<?= $this->Html->link('<i class="fa fa-eye"></i>', ['action' => 'view', $user->id], [ 'escape' => false, 'title' => __('View')]) ?>
										<?= $this->Html->link('<i class="fa fa-edit"></i>', ['action' => 'edit', $user->id], ['escape' => false, 'title' => __('Edit')]) ?>
										<?= $this->Form->postLink('<i class="text-red fa fa-remove"></i>', ['action' => 'delete', $user->id], ['escape' => false, 'title' => __('Delete'), 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
									</td>
								</tr>
            <?php endforeach; ?>
                        	</tbody>
						</table>
						<div class="paginator">
							<ul class="pagination">
								<?= $this->Paginator->first('<< ' . __('first')) ?>
								<?= $this->Paginator->prev('< ' . __('previous')) ?>
								<?= $this->Paginator->numbers() ?>
								<?= $this->Paginator->next(__('next') . ' >') ?>
								<?= $this->Paginator->last(__('last') . ' >>') ?>
							</ul>
							<p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>
