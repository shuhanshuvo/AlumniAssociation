@extends('admin.dashboard.alumni.add_news')
@section('adminContent')

<form>
	<label>Add news</label>
	<input type="text" name="title" placeholder="add news">
	<button type="submit" value="submit" class="btn btn-info"></button>
</form>
@endsection

