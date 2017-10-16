@extends('layouts.app')



@section('content')

	<h3 align="center">Add Contact</h3>
	<form action="/users" method="post">
		<table width=230 align="center" border="0">
			<tr height=28>
				<td>Nama</td>
				<td><input type="text" name="name" /></td>
			</tr>
		
			<tr height=28>
				<td>No Hp</td>
				<td><input type="text" name="no_hp" /></td>
			</tr>
		
			<tr height=28>
				<td>Email</td>
				<td><input type="text" name="email" /></td>
			</tr>
			
			<tr height=28>
				<td>Kategori</td>
				<td><input type="text" name="kategori" /></td>
			</tr>
			
			<tr height=15></tr>
		
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Save Contact" /></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input type="button"  value="Go Back" onclick="history.back(-1)" /></a></td>
			</tr>
		
		{{csrf_field()}}		
		</table>
	</form>
	
@stop


@section('footer')

@stop