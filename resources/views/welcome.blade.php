@extends('layouts.app')

@section('content')
        <div class="top-padding">
                <h3>Welcome to CodeDB</h3>

                <div class=" main-panel">
                <div class="row">
                  <div class="col-md-4">
                    <h4>Browse our codes</h4>
                    <p>Our website is open for everyone.</p>
                    <p>Start exploring right away</p>
                    <button type="button" class="btn btn-lg btn-primary">Browse</button>
                  </div>
                  <div class="col-md-4">
                  <h4>Popular tags</h4>
                  <button type="button" class="btn btn-md btn-tag">Smile</button>
                  <button type="button" class="btn btn-md btn-tag">Sweet</button>
                  <button type="button" class="btn btn-md btn-tag">Sister</button>
                  <button type="button" class="btn btn-md btn-tag">Sadistic</button>
                  <button type="button" class="btn btn-md btn-tag">Service</button>
                  <button type="button" class="btn btn-md btn-tag">Sorting</button>
                  <button type="button" class="btn btn-md btn-primary btn-tag">more..</button>
                  </div>
                </div>
                </div>
                <div class=" main-panel">
                <div class="row">
                  <div class="col-md-4">
                    <h4>Or contribute</h4>
                    <p>to our community.</p>
                    <p>We are open for anyone to contribute</p>
                    <p>Your contribution helps us grow</p>
                    <button type="button" class="btn btn-lg btn-primary">Contribute</button>
                  </div>
                <!-- <button type="button" class="btn btn-primary btn-block">Button 1</button>  -->
                </div>
              
        </div>

@endsection
