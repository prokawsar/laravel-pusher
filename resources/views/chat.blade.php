@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>

            <ul class="list-group col-md-6">
                <li class="list-group-item active text-center">Chat/Comment/Notification</li>
                <component 
                v-for="value in chat.message"
                :key=this.index
                color='success'
                >
                    @{{ value }}
                </component>
                <input type="text" class="form-control" name="" placeholder="Type your message..." 
                v-model='message' 
                @keyup.enter='send'
                >

            </ul>

            <div class="col-md-3"></div>
        </div>
    </div>
@endsection