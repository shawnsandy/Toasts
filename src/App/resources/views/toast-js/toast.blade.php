@include('toast::toast-js.'. Session::get('toast.view', 'default'), [
'toast' => Session::get('toast')
])
