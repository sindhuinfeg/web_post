<!DOCTYPE html>
<html>
<head>
	<title>Number Calculation</title>
</head>
<body>
	<form method="post" action="switchcase">
		{{csrf_field()}}
		<!-- @php echo '<pre>'; print_r($errors); echo '</pre>'; @endphp -->
		<div>
			<label for="firstNumber">First Number</label>
			<input type="text" name="first_number">
	        @if ($errors->has('first_number'))
				<span class="text-danger">{{ $errors->first('first_number') }}</span>
			@endif
		</div><br/>
		<div>
			<label for="secondNumber">Second Number</label>
			<input type="text" name="second_number">
			@if ($errors->has('second_number'))
				<span class="text-danger">{{ $errors->first('second_number') }}</span>
			@endif
		</div><br/>
		<div>
			<label for="CalcMethod">Calculation Method</label>
			<select name="calc_method" id="calc_method">
				<option value="">-- Select Any One --</option>
			    <option value="add">Addition</option>
			    <option value="sub">Subtraction</option>
			    <option value="mul">Multiplication</option>
			    <option value="div">Division</option>
			</select>
		</div><br/>
		<input type="submit" name="submit">
	</form>
</body>
</html>