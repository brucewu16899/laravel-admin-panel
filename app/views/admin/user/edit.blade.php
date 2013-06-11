@extends('admin.layouts.default')

@section('main')

	<div class="three columns">

        <h2>Edit user</h2>

        {{ Notification::showAll() }}

        {{ Form::model($user, array('method' => 'put', 'route' => array('admin.user.update', $user->id))) }}

        <div class="control-group">
            {{ Form::label('first_name', 'First name') }}
            <div class="controls">
                {{ Form::text('first_name') }}
            </div>
        </div>

        <div class="control-group">
            {{ Form::label('last_name', 'Last Name') }}
            <div class="controls">
                {{ Form::text('last_name') }}
            </div>
        </div>

        <div class="form-actions">
            {{ Form::submit('Update', array('class' => 'button small success radius')) }}
            <a href="{{ URL::route('admin.user.index') }}" class="btn btn-large">Cancel</a>
        </div>

        {{ Form::close() }}

	</div>

@stop
