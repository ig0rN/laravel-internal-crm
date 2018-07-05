@if(Session::has('error'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert alert-danger text-center">
                    {{ Session::get('error') }}
                </div>
            </div>
        </div>
    </div>
@elseif(Session::has('success'))
    <div class="containter">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <div class="alert alert-success text-center">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    </div>
@endif