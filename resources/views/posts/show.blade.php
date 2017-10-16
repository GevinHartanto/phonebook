@extends('layouts.app')



@section('content')

	<h2 align="center">Contact Detail</h2>
	<table width=230 align="center" border="0">
			<tr height=25>
				<td>Nama</td>
				<td>{{$users->name}}</td>
			</tr>
		
			<tr height=25>
				<td>No Hp</td>
				<td>{{$users->no_hp}}</td>
			</tr>
		
			<tr height=25>
				<td>Email</td>
				<td>{{$users->email}}</td>
			</tr>
			
			<tr height=25>
				<td>Kategori</td>
				<td>{{$users->kategori}}</td>
			</tr>
			
			<tr height=15></tr>
			
			<tr>
				<td colspan="2" align="center"><a href="{{route('users.edit', $users->id)}}" style="text-decoration:none"><input type="button" name="submit" value="Edit Contact" /></a></td>
			</tr>	
			
			<tr>
				<td colspan="2" align="center"><input type="button"  value="Go Back" onclick="history.back(-1)" /></a></td>
			</td>
			
			
			
		</tr>
		</table>

	
@endsection