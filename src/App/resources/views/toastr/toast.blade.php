@include('toast::toastr-js.'. Session::get('toast.view', 'js'), [
'toast' => Session::get('toast')
])
