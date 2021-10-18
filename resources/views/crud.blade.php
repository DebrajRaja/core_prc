

<form class="crud_frm" method="GET" action="add">
    @csrf
    <input type="text" name="name" placeholder="Enter Your Name">
    <input type="password" name="password" placeholder="Enter Your Password">
    <button type="submit">Create</button>
    <button type="submit" formaction="show">Show</button>
</form>
