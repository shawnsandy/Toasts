@include('toast::toast-js.toast-'. Session::get('toast.type', 'info'),
['toast' => Session::get('toast')])
