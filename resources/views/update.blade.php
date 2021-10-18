<form class="crud_frm" method="GET" action="/edit">
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" value="{{$data['name']}}">
    <input type="text" name="password" value="{{$data['password']}}">
    <button type="submit">Update</button>
</form>

