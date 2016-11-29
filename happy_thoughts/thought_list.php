<?php include '../views/header_nav.php'; ?>
<div class="row">
	<h1>List of Happy Thoughts</h1>
</div>
<div class="row">
	<div class="col s4">
		<a class="modal-trigger waves-effect waves-light btn black darken-4" href="#editModal" id="openEditModal">Edit</a>
	</div>
	<div class="col s4">
		<a class="modal-trigger waves-effect waves-light btn black darken-4" href="#addModal" id="openAddModal">Add</a>
	</div>
	<div class="col s4">
		<a class="modal-trigger waves-effect waves-light btn black darken-4" href="#deleteModal" id="openDeleteModal">Delete</a>
	</div>
</div>
<div class="row">
	<table class="striped">
		<tr>
			<th class="col s2 flow-text"><h4>Date</h4></th>
			<th class="col s6 flow-text"><h4>Thought</h4></th>
			<th class="col s4 flow-text"><h4>Author</h4></th>
		</tr>
		<?php foreach ($thoughts as $thought) : ?>
			<tr>
				<td class="col s2 flow-text"><?php echo $thought['date']; ?></td>
				<td class="col s6 flow-text"><?php echo $thought['thought']; ?></td>
				<td class="col s4 flow-text"><?php echo $thought['author']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
<div id="editModal" class="modal modal-fixed-footer">
    <div class="modal-content">
    	<h4>Select one to edit</h4>
    	<div class="collection">
    		<?php foreach ($thoughts2 as $thought2) : ?>
    	    <a href="#editThoughtModal" class="modal-trigger modal-action modal-close openEditModal collection-item" data-author="<?php echo $thought2['author']; ?>" data-date="<?php echo $thought2['date']; ?>" data-thought="<?php echo $thought2['thought']; ?>"><?php echo $thought2['thought']; ?></a>
			<?php endforeach; ?>
		</div>
    </div>
    <div class="modal-footer">
      <a href="#editThoughtModal" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
</div>
<div id="editThoughtModal" class="modal modal-fixed-footer">
    <div class="modal-content">
    	<h4>Edit the Happy Thought</h4>
	  	<div class="row">
			<form class="col s12" action="index.php" method="post" id="update_thought_form">
	  			<div class="row">
    				<div class="input-field col s6">
      					<input id="author" type="text" class="validate">
      					<label for="author">Author</label>
    				</div>
    				<div class="input-field col s6">
      					<input id="date" type="date" class="datepicker">
      					<label for="date"></label>
    				</div>
  				</div>
  				<div class="row">
  	  				<div class="input-field col s12">
      					<input value="" id="thought" type="text" class="validate">
      					<label for="thought">Thought</label>
    				</div>
  				</div>
  				<button class="btn waves-effect waves-light blue-grey" type="submit" name="action" value="update_thought">Update
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
</div>
<div id="addModal" class="modal modal-fixed-footer">
    <div class="modal-content">
    	<h4>Add a Happy Thought</h4>
    	<div class="row">
			<form class="col s12" action="index.php" method="post" id="add_thought_form">
	  			<div class="row">
    				<div class="input-field col s6">
      					<input id="author" name="author" type="text" class="validate">
      					<label for="author">Author</label>
    				</div>
    				<div class="input-field col s6">
      					<input id="date" name="date" type="date" class="datepicker">
      					<label for="date"></label>
    				</div>
  				</div>
  				<div class="row">
  	  				<div class="input-field col s12">
      					<textarea id="thought" name="thought" class="materialize-textarea"></textarea>
          				<label for="thought">Thought</label>
    				</div>
  				</div>
  				<button class="btn waves-effect waves-light blue-grey" type="submit" name="action" value="add_thought">Add Thought
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
</div>
<div id="deleteModal" class="modal modal-fixed-footer">
    <div class="modal-content">
    	<h4>Delete a Happy Thought</h4>
      <form class="col s12" action="index.php" method="post" id="delete_thought_form">
    		<?php foreach ($thoughts3 as $thought3) : ?>
    	     <p>
            <input class="with-gap" name="thought_id" type="radio" id="<?php echo $thought3['thoughtID']; ?>" value="<?php echo $thought3['thoughtID']; ?>" />
            <label for="<?php echo $thought3['thoughtID']; ?>"><?php echo $thought3['thought']; ?></label>
          </p>
			 <?php endforeach; ?>
        <button class="btn waves-effect waves-light blue-grey" type="submit" name="action" value="delete_thought">Delete Thought
        <i class="material-icons right">send</i>
      </form>
		  </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
    </div>
</div>
<?php include '../views/footer.php'; ?>

<script type="text/javascript" src="../js/modalInit.js"></script>
