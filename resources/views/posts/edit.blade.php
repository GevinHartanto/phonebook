@extends('layouts.app')

@section('content')

	<h3 align="center">Edit Contact</h3>
	
	<form action="/users/{{$users->id}}" method="post">
		<table width=230 align="center" border="0">
		<input type="hidden" name="_method" value="PUT" />
			<tr>
				<td height=25>Nama</td>
				<td><input type="text" name="name" value="{{$users->name}}" /> </td>
			</tr>
		
			<tr height=25>
				<td>No Hp</td>
				<td><input type="text" name="no_hp" value="{{$users->no_hp}}" /></td>
			</tr>
		
			<tr height=25>
				<td>Email</td>
				<td><input type="text" name="email" value="{{$users->email}}" /></td>
			</tr>
			
			<tr height=25>
				<td>Kategori</td>
				<td><input type="text" name="kategori" value="{{$users->kategori}}" /></td>
			</tr>
			
			<tr height=15></tr>
		
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Save Changes" /></td>
			</tr>
			
		{{csrf_field()}}	
		</table>
	</form>
	
	
	<form action="/users/{{$users->id}}" method="post">
		<table align="center" border="0">
			<input type="hidden" name="_method" value="DELETE" />
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Delete Contact" /></td>
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