<h2>hello {{session('user')}}</h2>

@if(session('user')=='admin')
     <a href="./admin">admin</a><br/>
@endif
<a href="./logout">logout</a>