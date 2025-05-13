<section>
	<h2>Forms</h2>
	<form>
		<fieldset>
			<legend>Form Controls</legend>
			<label for="text">Text:</label>
			<input type="text" id="text"><br>

			<label for="password">Password:</label>
			<input type="password" id="password"><br>

			<label for="email">Email:</label>
			<input type="email" id="email"><br>

			<label><input type="checkbox"> Checkbox</label><br>
			<label><input type="radio" name="radio"> Radio</label><br>

			<label for="select">Select:</label>
			<select id="select">
				<option>Option I</option>
				<option>Option II</option>
				<option>Option III</option>
				<option>Option IV</option>
				<option>Option V</option>
			</select><br>

			<label for="textarea">Textarea:</label><br>
			<textarea id="textarea" rows="4" cols="30"></textarea><br>

			<label for="textarea">Browser (List):</label><br>
			<input list="browsers" name="browser">
			<datalist id="browsers">
				<option value="Chrome">
				<option value="Chromium">
				<option value="Firefox">
				<option value="Safari">
				<option value="Opera">
			</datalist>
			<br>

			<div class="button-group">
				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
				<button type="button">Button</button>
			</div>

		</fieldset>
	</form>
</section>