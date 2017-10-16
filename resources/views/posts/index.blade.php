@extends('layouts.app')



@section('content')

	<h2 align="center">Contact List</h2>
	
	<table align="center" border="0">
		@foreach($users as $user)
			<tr>
				<td><li><a href="{{route('users.show', $user->id)}}" style="text-decoration:none">{{$user->name}}</a></li></td>
			</tr>	
		@endforeach
		
			<tr height=15></tr>
			
			<tr>
				<td colspan="2" align="center"><a href="home" style="text-decoration:none"><input type="button" name="submit" value="Home" /></a></td>
			</tr>
	</table>
	
	

	
@endsection