*******************
Query Builder
*******************

    $users = DB::table('users')->where('status', 'active')->get();


Example>>>>

    use Illuminate\Support\Facades\DB;

    public function getActiveUsers()
    {
        $users = DB::table('users')
                    ->where('status', 'active')
                    ->orderBy('name', 'asc')
                    ->get();

        return view('users.index', compact('users'));
    }



*******************
Eloquent ORM
*******************

    $users = User::where('status', 'active')->get();

Example>>>>

    // Controller e
    use App\Models\User;

    public function getActiveUsers()
    {
        // Active users er list pabe
        $users = User::where('status', 'active')->orderBy('name', 'asc')->get();

        return view('users.index', compact('users'));
    }




*******************
Raw SQL Queries
*******************

    $users = DB::select('SELECT * FROM users WHERE status = ?', ['active']);

Example>>>>

    use Illuminate\Support\Facades\DB;

    public function getActiveUsers()
    {
        $users = DB::select('SELECT * FROM users WHERE status = ? ORDER BY name ASC', ['active']);

        return view('users.index', compact('users'));
    }


*******************
Paginate Query Results
*******************

    $users = User::where('status', 'active')->orderBy('name', 'asc')->paginate(10);

Example>>>>

    use App\Models\User;

    public function getActiveUsers()
    {
        $users = User::where('status', 'active')->orderBy('name', 'asc')->paginate(10);

        return view('users.index', compact('users'));
    }










    5. Chunking (Large Dataset Handle)


    use App\Models\User;

public function processUsers()
{
    User::where('status', 'active')->chunk(100, function ($users) {
        foreach ($users as $user) {
            // Process each user
            echo $user->name;
        }
    });
}





use Illuminate\Support\Facades\Cache;
use App\Models\User;

public function getCachedUsers()
{
    $users = Cache::remember('active_users', 60, function () {
        return User::where('status', 'active')->get();
    });

    return view('users.index', compact('users'));
}






6. Caching Query Results
