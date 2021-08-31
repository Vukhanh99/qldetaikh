<?php include('header.php'); ?>
<div id="main">
	<table>
		<thead>
			<tr>
				<?php

				/** Build headers */
        echo $this->example; // 1

				$keys = array_keys($this -> tableData[0]);
				foreach ($keys as $key => $val) {
					echo "<th id='$val'>" . trim($val) . "</th>";
				}
				?>
			<th></th></tr>
		</thead>
		<?php
		foreach ($this->tableData as $key => $row) {

			echo '<tr id="' . $row['id'] . '">';

			foreach ($row as $key => $val) {

				echo '<td><span>' . $val . '</span></td>';

			}

			echo '<td class="delete"> </td>';
			echo '</tr>';

		}
		?>
	</table>
</div>
