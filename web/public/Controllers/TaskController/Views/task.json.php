<?php
/**
* @name task.json
* @author Adrar May 2020
* @version 1.0.0
*   Render task list as JSON document
*/
?>
[
	<?php foreach ($datas->modelData as $task) {?>
	    {
		<?php foreach ($task as $key => $value) {?>
    			"<?php echo $key;?>": "<?php echo $value;?>",
    	<?php }?>
    	},
	<?php }?>
]