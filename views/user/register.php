<?php if(isset($edit) && isset($userdata) && is_object($userdata)): // validation whether the form is for create or update?>
	<h3>Editar Usuario</h3>
	<?php $url_action = base_url."user/save&id=".$userdata->id; ?>
<?php else: ?>
	<h3>Crear nuevo Usuario</h3>
	<?php $url_action = base_url."user/save"; ?>
<?php endif; ?>

<div>
  <a href="<?=base_url?>">Home</a>
	<br/><br/>

	<form action="<?=$url_action?>" method="POST" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>DNI</td>
				<td><input type="number" name="dni" value="<?=isset($userdata) && is_object($userdata) ? $userdata->dni : ''; ?>"></td>
			</tr>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?=isset($userdata) && is_object($userdata) ? $userdata->name : ''; ?>"></td>
			</tr>
			<tr> 
				<td>Birthdate</td>
				<td><input type="date" name="birthdate" value="<?=isset($userdata) && is_object($userdata) ? $userdata->birthdate : ''; ?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="email" name="email" value="<?=isset($userdata) && is_object($userdata) ? $userdata->email : ''; ?>"></td>
			</tr>
			<tr> 
				<td>Sex</td>
				<td>
					<select name="sex">
						<option value="Male" <?=isset($userdata) && is_object($userdata) && $userdata->sex == 'Male' ? 'selected="selected"' : '';?>>Male</option>
						<option value="Female" <?=isset($userdata) && is_object($userdata) && $userdata->sex == 'Female' ? 'selected="selected"' : '';?>>Female</option>
					</select>
				</td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="<?=isset($userdata) && is_object($userdata) ? 'Update' : 'Create'; ?>"></td>
			</tr>
		</table>
	</form>
</div>

