<?php
 $allowedRoles = config('variables.role');
/*if (Auth::user()->rolename() !== "Superadmin") {
  foreach ($allowedRoles as $key => $value ) {
    if ($key >= Auth::user()->role) {
        unset($allowedRoles[$key]);
    }
  }
}*/

  $img_url = (isset($item) ? $item->avatar : "http://placehold.it/160x160");
  //$img_url = (isset($item) ? $item->avatar : url('/') . config('variables.avatar.public') . 'avatar0.png');
?>
{!! Form::Input('text', 'name', 'Name') !!}

{!! Form::Input('email', 'email', 'Email') !!}

{!! Form::Input('password', 'password', 'Password') !!}

{!! Form::Input('password', 'password_confirmation', 'Password confirmation') !!}

{{--{!! Form::Select('role', 'Role', $allowedRoles) !!}--}}

{{--{!! Form::Select('active', 'Active', config('variables.boolean')) !!}--}}

{!! Form::File('avatar', 'Avatar', $img_url) !!}
