<?php
	$title = $lang['homeTitle'];
	require_once "app/views/templates/main-header.php";
?>

<h2><?php echo $lang['homeTitle']; ?></h2>

<table class="uk-table uk-table-hover">
	<thead>
	    <tr>
            <th><?php echo $lang['todoName']; ?></th>
            <th><?php echo $lang['todoInfo']; ?></th>
            <th><?php echo $lang['todoStatus']; ?></th>
            <th><?php echo $lang['todoActions']; ?></th>
        </tr>
    </thead>
    
    <tbody>
	<?php

		foreach($sAllAsc as $data)
		{
			if ($data["status"] == 0){
				$status = $data["status"];
				$data["status"] = "<i class=\"uk-icon-small uk-icon-hover uk-icon-square-o\"></i>";
			}
			else {
				$status = $data["status"];
				$data["status"] = "<span style=\"color: green;\"><i class=\"uk-icon-small uk-icon-check-square-o\"></i></span>";
			}

			if ($status == 1){
				echo "<tr>
        			<td><del>{$data["name"]}</del></td>
            		<td><del>{$data["info"]}</del></td>
            		<td><a href='./update/status/{$data["id"]}'>{$data["status"]}</a></td>
            		<td><a class=\"uk-button uk-button-small uk-button-danger\" href=\"./{$lang['lang']}/delet/{$data["id"]}\">{$lang['deletButton']}</a></td>
        		</tr>";
			} else {
				echo "<tr>
        			<td><a href='./{$lang['lang']}/edit/{$data["id"]}'>{$data["name"]}</a></td>
            		<td>{$data["info"]}</td>
            		<td><a href='./update/status/{$data["id"]}'>{$data["status"]}</a></td> 
            		<td><a class=\"uk-button uk-button-small uk-button-danger\" href=\"./{$lang['lang']}/delet/{$data["id"]}\">{$lang['deletButton']}</a></td>
        		</tr>";
			}
			
		}

	?>
    </tbody>
</table>

<button class="uk-button uk-button-large uk-button-primary" data-uk-modal="{target:'#add'}">+ <?php echo $lang['homeNewTitle']; ?></button>

<!-- This is the modal -->
<div id="add" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <form class="uk-form" method="post" action=".\new">

		    <fieldset data-uk-margin>
		        <legend><?php echo $lang['homeNewTitle']; ?></legend>
		        <div class="uk-form-row">
		        	<input class="uk-width-1-1 uk-form-large" type="text" name="name" placeholder="<?php echo $lang['homeNewName']; ?>">
		        </div>
		       
		        <div class="uk-form-row">
		        	<textarea class="uk-width-1-1" rows="4" name="info" placeholder="<?php echo $lang['homeNewInfo']; ?>"></textarea>
		        </div>

		        	<input type="hidden" name="status" value="0">

		        <div class="uk-form-row">
		        	<button class="uk-button uk-button-large uk-button-primary" type="submit"><?php echo $lang['homeNewButton']; ?></button>
		        </div>
		    </fieldset>

		</form>
    </div>
</div>

<?php
	require_once "app/views/templates/main-footer.php";
?>