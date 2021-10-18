<table border='1'>
@foreach($cruds as $crud)
    <tr><td>{{$crud['id']}}</td>
    <td>{{$crud['name']}}</td>
    <td>{{$crud['password']}}</td>
    <td><a href="{{"read/".$crud['id']}}">Read</a></td>
    <td><a href={{"delete/".$crud['id']}}>Delete</a></td>
    <td><a href={{"edit/".$crud['id']}}>Edit</td>
</tr>
@endforeach
<table>
<form class="crud_frm" method="GET" action="add">
    @csrf
    <input type="text" name="name" placeholder="Enter Your Name">
    <input type="password" name="password" placeholder="Enter Your Password">
    <button type="submit">Create</button>
</form>