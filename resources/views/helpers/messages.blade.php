<div class="row text-white">
    <div class="col-12">
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
    </div>
</div>
