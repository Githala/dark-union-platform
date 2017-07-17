<?php
/**
 * Created by IntelliJ IDEA.
 * User: quantu
 * Date: 22/06/2017
 * Time: 09:50
 */

?>

<style>
	.line {

	}

	.du-cell {
		float: left;
		padding: 5px;
	}

	.du-cell input {
		width: 100%;
	}

	.du-cell.du-50 {
		width: 50%;
	}

	.du-cell.du-33{
		width: 33%;
	}

	.du-cell.du-33:nth-of-type(2n){
		width: 34%;
	}
</style>


<div class="line">
	<div class="du-cell du-50">
		<label>Ras</label>
		<input value="<? echo $this->model->getRace() ?>" />
	</div>
	<div class="du-cell du-50">
		<label>Klasse</label>
		<input value="<? echo $this->model->getClass() ?>" />
	</div>
</div>

<div class="line">
	<div class="du-cell du-50">
		<label>Hierarchy</label>
		<input value="<? echo $this->model->getHierarchy() ?>" />
	</div>
	<div class="du-cell du-50">
		<label>Herkomst</label>
		<input value="<? echo $this->model->getOrigin() ?>" />
	</div>
</div>

<div class="line">
	<div class="du-cell du-50">
		<label>Geloof</label>
		<input value="<? echo $this->model->getDeity() ?>" />
	</div>
	<div class="du-cell du-50">
		<label>Element</label>
		<input value="<? echo $this->model->getElement() ?>" />
	</div>
</div>

<div class="line">
	<div class="du-cell du-33">
		<label>Ras</label>
		<input value="<? echo $this->model->getRace() ?>" />
	</div>
	<div class="du-cell du-33">
		<label>Klasse</label>
		<input value="<? echo $this->model->getClass() ?>" />
	</div>
	<div class="du-cell du-33">
		<label>Klasse</label>
		<input value="<? echo $this->model->getClass() ?>" />
	</div>
</div>
