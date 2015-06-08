<div>
    The user name is {{$user->name}}.<br>
    The user email is {{$user->email}}
    {{session('status')}}
    {{var_dump(session('status'))}}
    @if($user->type == 'admin')
        This user is a fucking admin!
    @endif
    @if(Auth::user() != null)
        @if(Auth::user()->type =='admin')
            <button>
                fuck this user!
            </button>
        @endif
    @else
        You are not fucking logged in.
    @endif

</div>