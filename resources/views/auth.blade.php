<form method="post" action="/admin">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="name">Username:</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" class="form-control" id="pwd">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>