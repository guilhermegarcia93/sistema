<div>
	<div>
		<h1>Criando um CRUD com CodeIgniter</h1>
	</div>
	<?php if ($this->session->flashdata('error') == TRUE): ?>
		<p><?php echo $this->session->flashdata('error'); ?></p>
	<?php endif; ?>
	<?php if ($this->session->flashdata('success') == TRUE): ?>
		<p><?php echo $this->session->flashdata('success'); ?></p>
	<?php endif; ?>

	<form method="post" action="<?=base_url('salvar')?>" enctype="multipart/form-data">
		<div>
			<label>Descricao:</label>
			<input type="text" name="descricao" value="<?=set_value('descricao')?>" required/>
		</div>

		<div>
			<label>CNPJ:</label>
			<input type="email" name="cnpj" value="<?=set_value('cnpj')?>" required/>
		</div>
		<div>
			<label><em>Todos os campos são obrigatórios.</em></label>
			<input type="submit" value="Salvar"/>
		</div>
	</form>
	<div>
		<table>
			<caption>Contatos</caption>
			<thead>
				<tr>
					<th>Descricao</th>
					<th>Cnpj</th>
					<th>Operações</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($contatos == FALSE): ?>
					<tr><td colspan="2">Nenhum contato encontrado</td></tr>
				<?php else: ?>
					<?php foreach ($contatos as $row): ?>
						<tr>
							<td><?= $row['descricao'] ?></td>
							<td><?= $row['cnpj'] ?></td>
							<td><a href="<?= $row['editar_url'] ?>">[Editar]</a> <a href="<?= $row['excluir_url'] ?>">[Excluir]</a></td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>

</div>