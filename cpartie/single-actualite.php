<?php get_header(); ?>
<div class="container">
		<?php the_post() ?>
	<table>
		<tr>
			<td> <?php the_title() ?></td>
		</tr>
		<tr>
			<td> Type </td>
			<td>Date</td>
		</tr>
		<tr>
			<td>Photos</td>
			<td><?php get_the_content() ?></td>
		</tr>
		<tr>
			<td>Illustrations</td>
			<td>Photos</td>
		</tr>
	</table>	
</div>